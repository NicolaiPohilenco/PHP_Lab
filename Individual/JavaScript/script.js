// Массив объектов с информацией о товарах


// Получаем элемент списка товаров
const productList = document.getElementById('product-list');

// Создаем элементы списка на основе массива объектов
products.forEach(product => {
  // Создаем элементы списка и заполняем их информацией о товаре
  const li = document.createElement('li');
  const img = document.createElement('img');
  img.src = product.image;
  img.alt = product.name;
  const h4 = document.createElement('h4');
  h4.textContent = product.name;
  const p = document.createElement('p');
  p.textContent = `${product.price} руб.`;

  // Добавляем созданные элементы в список товаров
  li.appendChild(img);
  li.appendChild(h4);
  li.appendChild(p);
  productList.appendChild(li);
});
// Получаем элемент кнопки "Просмотр каталога"
const viewCatalogBtn = document.getElementById('view-catalog-btn');

// Добавляем обработчик события клика на кнопку
viewCatalogBtn.addEventListener('click', function(event) {
  // Отменяем стандартное действие ссылки (переход по адресу #)
  event.preventDefault();

  // Выполняйте здесь необходимые действия для перехода в каталог
  // Например, можно использовать window.location.href для перехода на другую страницу
  window.location.href = 'catalog.html';
});