// Массив объектов с информацией о цветах
const flowers = [
  {
    name: 'Розы',
    image: 'images/roz.jpg',
    price: 50
  },
  {
    name: 'Гвоздики',
    image: 'images/gvozd.jpg',
    price: 15
  },
  {
    name: 'Хризантемы',
    image: 'images/hriz.jpg',
    price: 25
  },
  {
    name: 'Лизиантусы',
    image: 'images/lizia.jpg',
    price: 30
  },
  {
    name: 'Герберы',
    image: 'images/gerber.jpg',
    price: 30
  },
  {
    name: 'Тюльпаны',
    image: 'images/tulp.jpg',
    price: 20
  },
  {
    name: 'Альстромерии',
    image: 'images/astral.jpeg',
    price: 47
  },
  {
      name: 'Лилии',
      image: 'images/lilii.jpg',
      price: 40
    },
    {
      name: 'Орхидеи',
      image: 'images/orhi.jpg',
      price: 200
    },
  
];

// Получаем элемент списка товаров
const productList = document.getElementById('product-list');

// Создаем элементы списка на основе массива объектов
flowers.forEach((flower, index) => {
  // Создаем элементы списка и заполняем их информацией о цвете
  const li = document.createElement('li');
  const img = document.createElement('img');
  img.src = flower.image;
  img.alt = flower.name;
  const h4 = document.createElement('h4');
  h4.textContent = flower.name;
  const p = document.createElement('p');
  p.textContent = `Цена: ${flower.price} лей за шт.`;

  // Создаем ссылку и добавляем ее в список товаров
  const link = document.createElement('a');
  link.href = `order.php?flower=${index}`; // Добавляем параметр в URL для передачи информации о выбранном товаре
  link.appendChild(img);
  link.appendChild(h4);
  link.appendChild(p);
  li.appendChild(link);
  productList.appendChild(li);
});

  