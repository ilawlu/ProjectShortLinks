<h1>Задание</h1>
<br>
<p><strong>Необходимо реализовать сервис по сокращению ссылок.</strong></p>
<br>
<p>1. Сервис состоит из одной страницы и формы ввода. </p>
<br>
<p>2. Поле для ввода ссылки и кнопка. Результат. </p>
<br>
<p>3. Сокращенная ссылка, по переходу по ссылке должно быть перенаправление на исходный адрес. </p>
<br>
<p>4. Токен короткой ссылки должен быть рандомным, уникальным, состоящим из цифр и букв (разного регистра), длинной в 6 символов. </p>
<br>
<br>
<h1>Запуск проекта</h1>
<br>
<p>Проект реализован с помощью OpenServer, содержит в себе базу данных (ShortLink), и таблицу Link.</p>
<p>В таблице имеются следующие поля: id, source_link (string, 255), link_key (string, 20).</p>
<br>
<h1>Для запуска проекта нужно:</h1>
<br>
<p>1. <strong>composer update</strong></p>
<br>
<p>2. изменить .env.example на .env</p>
<br>
<p>3. Прописать в коносоли <strong>php artisan key:generate</strong> </p>
<br>
<p>4. Дать имя дб в .env</p>
<br>
<p>5. Прописать Mail в .env</p>
<br>
<p>6. Создаем ДБ в phpmyadmin с именем, которое мы дали в пункте 4</p>
<br>
<p>5. Прописать в консоль <strong>php artisan migrate</strong> и после миграции <strong>php artisan serve</strong></p>
<br>
