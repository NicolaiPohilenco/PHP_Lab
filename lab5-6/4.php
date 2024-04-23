<?php
/**
 * Sanitizes the given data.
 * @param string $data The data to sanitize.
 * @return string The sanitized data.
 */
function sanitizeData(string $data): string
{
    $data = trim($data);
    $data = stripslashes($data);
    return htmlspecialchars($data);
}

$errors = [];
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["register"])) {
    // Валидация данных
    if (empty($_POST['login'])) {
        $errors['login'][] = 'Введите имя!';
    }
    if (empty($_POST['password'])) {
        $errors['password'][] = 'Введите свой пароль!';
    }
    // Добавьте другие проверки
    if (count($errors) === 0) {
        // Обработка данных формы
        $data = [
            'name' => sanitizeData($_POST['login']),
            'password' => md5(sanitizeData($_POST['password']))
        ];
        // Проверка существования пользователя
        $log = fopen("../lab5-6_PohilencoNicolai/users.txt", "a+") or die("Unavailable file!");
        $ifExist = false;
        while (!feof($log)) {
            $line = trim(fgets($log));
            if (strpos($line, $data['name']) !== false) {
                $ifExist = true;
                $errors['login'][] = 'Пользователь с таким именем уже существует!';
                break;
            }
        }
        if (!$ifExist) {
            // Запись данных в файл
            $log = fopen("../lab5-6_PohilencoNicolai/users.txt", "a+") or die("Unavailable file!");
            if (fwrite($log, $data['name'] . ':' . $data['password'] . PHP_EOL)) {
                echo "Регистрация успешна!";
            } else {
                echo "Ошибка записи данных. Повторите позже.";
            }
        }
        fclose($log);
    } else {
        // Вывод ошибок валидации
        foreach ($errors as $field => $error) {
            echo implode("<br>", $error);
        }
    }
}

?>


<!-- Registration Form -->
<div>
    <h2>Registration</h2>
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
        <label>
            <span>Name</span>
            <input name="login" value="<?php echo isset($_POST['login']) ? $_POST['login'] : ''; ?>">
            <?php if (isset($errors["login"])): ?>
                <?php foreach ($errors["login"] as $error): ?>
                    <p class="error"><?php echo $error; ?></p>
                <?php endforeach; ?>
            <?php endif; ?>
        </label>
        <label>
            <span>Password</span>
            <input type="password" name="password">
            <!-- Add error message here if needed -->
        </label>
        <input type="submit" name="register" value="Register">
    </form>
</div>