<!DOCTYPE html>
<html>

<head>
  <title>Каталог</title>
  <link rel="stylesheet" type="text/css" href="CSS/catalog.css">
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

  <section id="catalog">
    <div class="container">
      <h2>Каталог цветов</h2>
      <ul id="product-list">
      </ul>
    </div>
  </section>

  <footer>
    <p>&copy; 2023 Amelia.</p>
    <p>Все права защищены.</p>
  </footer>

  <script src="JavaScript/catalog.js"></script>

</body>

</html>