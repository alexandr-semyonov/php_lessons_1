1. Создайте объект класса View, удовлетворяющий следующим требованиям:
	1. Конструктор не имеет аргументов (а может быть вообще не нужен никакой конструктор)
	2. Есть метод assign($name, $value), чья задача - сохранить данные, передаваемые в шаблон по заданному имени (используйте защищенное свойство - массив для хранения этих данных)
	3. Есть метод display($template), который отображает указанный шаблон с заранее сохраненными данными
	4*. Метод render($template), который аналогичен методу display(), но не выводит шаблон с данными в браузер, а возвращает его
2. Перепишите предыдущее ДЗ, используя ВЕЗДЕ объекты класса View для отображения страниц сайта
3. Создайте на своем учебном сайте раздел "Новости". Для этого:
	1. Создайте класс Article - модель одной новости
	2. Создайте класс News - модель хранилища новостей (аналогично гостевой книге в предыдущем ДЗ и на уроке)
	3. Две страницы сайта
		1. news.php - отображает список всех новостей. Заголовок у каждой - ссылка на страницу этой новости, под заголовком - краткий текст
		2. article.php?id=NNN - отображает новость номер NNN с полным текстом
4. При выполнении задачи 3. весь код должен быть в классах. Используйте при необходимости тайп-хинтинг. Весь вывод - через ранее созданный объект View.