<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduction of Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1 class="text-center mb-3 "><i>Introduction of Laravel</i></h1>

        <ul>
            <li>Laravel was developed and created by <b>Taylor Otwell </b> provide an excellent substitute for the older PHP framework named CodeIgniter.</li>
            <li>We like to call Laravel a "progressive" framework.</li>

        </ul>
        <h3>What Is Laravel Used For?</h3>
        <ul>
            <li>Laravel is an open-source PHP framework, which is robust and easy to understand. It follows a model-view-controller design pattern.</li>
            <li>Laravel framework promotes the MVC architectural pattern for creating web apps.</li>
            <li>There are a variety of tools and frameworks available to you when building a web application. However, we believe Laravel is the best choice for building modern, full-stack web applications.</li>
            <li>Laravel has a very rich set of features which will boost the speed of web development.</li>
            <li>If you are familiar with Core PHP and Advanced PHP, Laravel will make your task easier. It saves a lot time if you are planning to develop a website from scratch. Moreover, a website built in Laravel is secure and prevents several web attacks.</li>
        </ul>
        <h3>Advantages of Laravel:</h3>
        <ul>
            Laravel offers you the following advantages, when you are designing a web application based on it
            <li>The web application becomes more scalable, owing to the Laravel framework.</li>
            <li>
                Considerable time is saved in designing the web application, since Laravel reuses the components from other framework in developing web application.
            </li>
            <li>
                It includes namespaces and interfaces, thus helps to organize and manage resources.
            </li>
        </ul>
        <h3>Composer:</h3><a href="https://getcomposer.org/"><b>Composer Download link</b></a>
        <ul>
            <li>Before creating your first Laravel project, you should ensure that your local machine has PHP and Composer installed.Third party libraries can be installed easily with help of composer.</li>
            <li>After you have installed PHP and Composer, you may create a new Laravel project via the Composer create-project command:<b>composer create-project laravel/laravel example-app</b></li>
        </ul>
        <h3>Artisan:</h3>
        <ul>
            <li>Command line interface used in Laravel is called Artisan.</li>
            <li>After the project has been created, start Laravel's local development server using the Laravel's Artisan CLI serve command:<b>php artisan serve</b></li>
        </ul>
        <h3>Features of Laravel:</h3>
        <p>Laravel offers the following key features which makes it an ideal choice for designing web applications </p>
        <h4><b>Modularity:</b></h4>
        <ul>
            <li>Laravel provides 20 built in libraries and modules which helps in enhancement of the application. Every module is integrated with Composer dependency manager which eases updates.</li>
        </ul>
        <h4><b>Testability:</b></h4>
        <ul>
            <li>Laravel includes features and helpers which helps in testing through various test cases. This feature helps in maintaining the code as per the requirements.</li>
        </ul>
        <h4><b>Routing:</b></h4>
        <ul>
            <li>Laravel provides a flexible approach to the user to define routes in the web application. Routing helps to scale the application in a better way and increases its performance.</li>
        </ul>
        <h4><b>Configuration Management:</b></h4>
        <ul>
            <li>A web application designed in Laravel will be running on different environments, which means that there will be a constant change in its configuration. Laravel provides a consistent approach to handle the configuration in an efficient way.</li>
        </ul>
        <h4><b>Query Builder and ORM(Object Relational Mapper):</b></h4>
        <ul>
            <li>Laravel incorporates a query builder which helps in querying databases using various simple chain methods. It provides ORM (Object Relational Mapper) and ActiveRecord implementation called Eloquent.</li>
            <li>Laravel includes Eloquent, an object-relational mapper (ORM) that makes it enjoyable to interact with your database. Eloquent models allow you to insert, update, and delete records from the table as well.</li>
        </ul>
        <h4><b>Schema Builder:</b></h4>
        <ul>
            <li>Schema Builder maintains the database definitions and schema in PHP code. It also maintains a track of changes with respect to database migrations.</li>
            <li>Generating Migration Command:<b>php artisan make:migration create_tablename_table</b> </li>
            <li>Alter table Migration Command:<b>php artisan make:migration create_alttablename_table --table=tablename</b> </li>
        </ul>
        <h4><b>Template Engine:</b></h4>
        <ul>
            <li>Laravel uses the Blade Template engine, a lightweight template language used to design hierarchical blocks and layouts with predefined blocks that include dynamic content.</li>
            <li>Blade template files use the <b>.blade.php</b> file extension and are typically stored in the <b>resources/views </b>directory.</li>
        </ul>
        <h4><b>E-mail:</b></h4>
        <ul>
            <li>Laravel includes a mail class which helps in sending mail with rich content and attachments from the web application.</li>
        </ul>
        <h4><b>Authentication:</b></h4>
        <ul>
            <li>User authentication is a common feature in web applications. Laravel eases designing authentication as it includes features such as<b> register,login, forgot password and send password reminders</b>.</li>
            <ul>
                <b>Auth command :</b>
                <b>
                    <li>composer require laravel/ui</li>
                    <li>php artisan ui vue --auth</li>
                    <li>npm i</li>
                    <li>php artisan serve</li>
                    <li>npm run dev</li>
                </b>
            </ul>
        </ul>
        <h4><b>REDIS:</b></h4>
        <ul>
            <li>Redis is a key-value store that's also referred to as a data structure server because it supports data types like strings, hashes, lists, sets and sorted sets.</li>
            <li>Laravel supports the use of Redis as a cache for temporary data storage. Caching data to Redis speeds up database queries and feedback, which makes data retrieval quicker. This, in turn, makes your web applications run faster.</li>
        </ul>









    </div>
</body>

</html>