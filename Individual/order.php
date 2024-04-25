<!DOCTYPE html>
<html>

<head>
  <title>Оформление заказа</title>
  <link rel="stylesheet" type="text/css" href="CSS/logo.css">
  <link rel="icon" href="images/icon.jpg" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="header.css">

</head>

<body>
  <header>
    <div class="header-container">
      <a href="index.php" class="logo-link">
        <img src="images/logo.jpg" alt="Лого" class="logo">
      </a>

      <nav>
        <ul>
          <li><a href="index.php">Главная</a></li>
          <li><a href="catalog.php">Каталог</a></li>
          <li><a href="order.php">Заказ</a></li>
          <li><a href="info.php">О нас</a></li>
          <li><a href="contact.php">Контакты</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main>
    <section class="order-section">
      <h2>Оформление заказа</h2>
      <?php
      // Проверяем, была ли отправлена форма
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Получаем данные из формы
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $flowers = $_POST["flowers"];

        // Формируем текст для записи в файл
        $order_info = "Имя: " . $name . "\n" .
          "Email: " . $email . "\n" .
          "Телефон: " . $phone . "\n" .
          "Выбранные цветы: " . $flowers . "\n\n";

        // Открываем файл для записи (или создаем, если его нет)
        $file = fopen("orders.txt", "a") or die("Ошибка: Не удалось открыть файл для записи заказа.");

        // Записываем информацию о заказе в файл
        fwrite($file, $order_info) or die("Ошибка: Не удалось записать данные заказа в файл.");

        // Закрываем файл
        fclose($file);

        // Выводим сообщение об успешной отправке заказа
        echo "<p>Ваш заказ успешно оформлен. Мы свяжемся с вами в ближайшее время!</p>";
      } else {
        ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
          <div class="form-group">
            <label for="name">Имя:</label>
            <input type="text" id="name" name="name" required>
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
          </div>
          <div class="form-group">
            <label for="phone">Телефон:</label>
            <input type="tel" id="phone" name="phone" required>
          </div>
          <div class="form-group">
            <label for="flowers">Выберите цветы:</label>
            <select id="flowers" name="flowers">
              <option value="roses">Розы</option>
              <option value="lilies">Лилии</option>
              <option value="tulips">Тюльпаны</option>
              <option value="gvozdic">Гвоздики</option>
              <option value="hrizant">Хризантемы</option>
              <option value="lizian">Лизиантусы</option>
              <option value="gerber">Герберы</option>
              <option value="orhid">Орхидеи</option>
              <option value="alstr">Альстромерии</option>
            </select>
          </div>
          <button type="submit">Отправить заказ</button>
        </form>
        <?php
      }
      ?>
    </section>
  </main>

  <footer>
    <p>&copy; 2023 Amelia. </p>
    <p>Все права защищены.</p>
  </footer>
</body>

</html>