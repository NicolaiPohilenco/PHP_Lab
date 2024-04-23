<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Тестовая форма</title>
    <style>
        body {
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
        }

        form {
            max-width: 450px;
            margin: 60px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 128, 0, 0.3);
            box-sizing: border-box;
        }

        label {
            display: flex;
            flex-direction: column;
        }

        input[type="checkbox"],
        input[type="radio"] {
            padding: 10px;
            margin: 0;
            box-sizing: border-box;
            border: 1px solid #ead6d6;
            border-radius: 2px;
            gap: 10px;
        }

        input[type="text"],
        textarea,
        select {
            width: 100%;
            height: 30px;
            /*vertical-align: middle;*/
            /*margin-top: 0; !* Reset margin-top for radio and checkbox *!*/
        }

        /* Основной стиль кнопки */
        input[type="submit"] {
            background-color: #4CAF50;
            /* Зеленый цвет */
            color: #ffffff;
            /* Белый цвет текста */
            padding: 10px 20px;
            /* Отступы внутри кнопки */
            border: none;
            /* Убираем границу */
            border-radius: 5px;
            /* Закругляем углы */
            cursor: pointer;
            font-size: 16px;
            /* Размер шрифта */
        }

        /* Стиль при наведении на кнопку */
        input[type="submit"]:hover {
            background-color: #45a049;
            /* Темно-зеленый цвет при наведении */
        }


        p {
            font-weight: bold;
            padding: 5px;
        }
    </style>

</head>

<body>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="username" style="font-weight: bold;">Введите ваше имя:</label>
        <input type="text" name="username" required><br><br>

        <p>Вопрос 1: В каком году отменили крепостное право?</p>
        <div style="display: flex; flex-direction: column;">
            <div style="display: flex; flex-direction: row;">
                <input id="first" type="radio" name="Вопрос1" value="1510"> <label for="first">1510</label>
            </div>
            <div style="display: flex; flex-direction: row;">
                <input id="first" type="radio" name="Вопрос1" value="1918"> 1918
            </div>
            <div style="display: flex; flex-direction: row;">
                <input id="first" type="radio" name="Вопрос1" value="1861"> 1861
            </div>
        </div>
        <br><br>
        <p>Вопрос 2: В каком году началась первая мировая война?</p>
        <div style="display: flex; flex-direction: column;">
            <div style="display: flex; flex-direction: row;">
                <input type="checkbox" name="Вопрос2[]" value="1814"> 1814
            </div>
            <div style="display: flex; flex-direction: row;">
                <input type="checkbox" name="Вопрос2[]" value="1914"> 1914
            </div>
            <div style="display: flex; flex-direction: row;">
                <input type="checkbox" name="Вопрос2[]" value="1939"> 1939
            </div>
            <div style="display: flex; flex-direction: row;">
                <input type="checkbox" name="Вопрос2[]" value="1918"> 1918
            </div>
        </div>
        <br><br>

        <p>Вопрос 3: Богом чего являеться зевс?</p>
        <select name="Вопрос3">
            <option value="" selected disabled>Выберите ответ</option>
            <option value="Бог неба и грома">Бог неба и грома</option>
            <option value="Бог морской стихии">Бог морской стихии</option>
            <option value="Владыка Царства Мёртвых">Владыка Царства Мёртвых</option>
            <option value="Бог огня и кузнечного ремесла">Бог огня и кузнечного ремесла</option>
            <option value="Бог торговли, хитрости">Бог торговли, хитрости</option>
        </select><br><br>

        <input type="submit" value="Отправить">
    </form>

</body>

</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получение данных из формы
    $username = htmlspecialchars($_POST["username"]);
    $question1 = isset($_POST["Вопрос1"]) ? $_POST["Вопрос1"] : "";
    $question2 = isset($_POST["Вопрос2"]) ? $_POST["Вопрос2"] : [];
    $question3 = isset($_POST["Вопрос3"]) ? $_POST["Вопрос3"] : "";

    // Правильные ответы
    $correct_answers = [
        'Вопрос1' => '1861',
        'Вопрос2' => '1914',
        'Вопрос3' => 'Бог неба и грома',
    ];

    // Вывод результатов
    echo "<h2>Результаты:</h2>";
    echo "<p>Имя: $username</p>";

    foreach ($correct_answers as $question => $correct_answer) {
        echo "<p>Ответ на $question: ";
        $user_answer = isset($_POST[$question]) ? $_POST[$question] : "";

        if (!empty($user_answer)) {
            if (is_array($user_answer)) {
                $user_answer = implode(", ", $user_answer);
            }

            if ($user_answer === $correct_answer) {
                echo "<span style='color:green;'>Верно</span>: $user_answer";
            } else {
                echo "<span style='color:red;'>Неверно</span>: $user_answer (Верный ответ: $correct_answer)";
            }
        } else {
            echo "<span style='color:red;'>Не указано</span>";
        }

        echo "</p>";
    }
}