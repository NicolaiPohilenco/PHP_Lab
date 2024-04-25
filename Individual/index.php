<!DOCTYPE html>
<html>

<head>
  <title>Amelia</title>
  <link rel="stylesheet" type="text/css" href="CSS/style.css">
  <link rel="stylesheet" type="text/css" href="header.css">

  <style>
    /* Стили для плавающей кнопки */
    .floating-button {
      position: fixed;
      bottom: 20px;
      right: 20px;
      background-color: #ff3366;
      color: #ffffff;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      text-transform: uppercase;
      font-weight: bold;
      cursor: pointer;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    }
  </style>
  <link rel="icon" href="images/icon.jpg" type="image/x-icon">

</head>

<body>
  <header>
    <div class="header-container">
      <a href="index.php" class="logo-link">
        <img src="images/logo.jpg" alt="Лого" class="logo">
      </a>

      <nav>
        <ul class="nav-links">
          <li><a href="index.php">Главная</a></li>
          <li><a href="catalog.php">Каталог</a></li>
          <li><a href="order.php">Заказ</a></li>
          <li><a href="info.php">О нас</a></li>
          <li><a href="contact.php">Контакты</a></li>
        </ul>
      </nav>
    </div>
  </header>


  <section id="hero">
    <h2>Добро пожаловать в наш цветочный магазин</h2>
    <p>У нас вы найдете широкий выбор красивых цветов для любого случая.</p>
    <a href="catalog.php" class="button" id="view-catalog-btn">Посмотреть каталог</a>
  </section>

  <section id="featured-products">
    <div id="main">
      <h3>Популярные товары</h3>
      <ul id="product-list">
        <li>
          <a href="order.php">
            <div class="product">
              <img src="images/roz1.jpg" alt="Розы">
              <h4>Розы</h4>
              <p>50 лей за шт.</p>
            </div>
          </a>
        </li>
        <li>
          <a href="order.php">
            <div class="product">
              <img src="images/lilii.jpg" alt="Лилии">
              <h4>Лилии</h4>
              <p>35 лей за шт.</p>
            </div>
          </a>
        </li>
        <li>
          <a href="order.php">
            <div class="product">
              <img src="images/tulp1.jpg" alt="Тюльпаны">
              <h4>Тюльпаны</h4>
              <p>20 лей за шт.</p>
            </div>
          </a>
        </li>
        <li>
          <a href="order.php">
            <div class="product">
              <img src="images/orhi1.jpg" alt="Орхидеи">
              <h4>Орхидеи</h4>
              <p>200 лей за горшок.</p>
            </div>
          </a>
        </li>
      </ul>
    </div>
  </section>

  <!-- Плавающая кнопка "Сделать заказ" -->
  <a href="order.php" class="floating-button">Сделать заказ</a>

  <footer>
    <p>&copy; 2023 Amelia. </p>
    <p>Все права защищены.</p>
  </footer>

  <script src="JavaScript/script.js"></script>
</body>

</html>