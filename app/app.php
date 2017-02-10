<?php
  date_default_timezone_set('America/Los_Angeles');
  require_once __DIR__."/../vendor/autoload.php";

  $app = new Silex\Application();

  $app->get("/", function() {
    return "
    <!DOCTYPE html>
        <html>
        <head>
            <title>Hello Friend!</title>
            <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
        </head>
        <body>
            <div class='container'>
            <h1>Welcome!</h1>
            <p><a href='/hello.php'>HELLO</a> - <a href='/goodbye.php'>GOODBYE</a></p>
            </div>
        </body>
    </html>
    ";
  });
  $app->get("/hello", function() {
    return "Hello Friend!";
  });
  $app->get("/goodbye", function() {
    return "Goodbye Friend!";
  });

  return $app;
 ?>
