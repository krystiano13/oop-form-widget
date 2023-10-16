<?php
    require_once 'vendor/autoload.php';

    $userInput = new \App\Input('text','username','username');
    $passwordInput = new \App\Input('password', 'password', 'password');
    $button = new \App\Button('submit','Log In');
    $form = new \App\Form('/','get');

    $form->insert($userInput());
    $form->insert($passwordInput());
    $form->insert($button());
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Simple form build using OOP">
        <title>OOP Form</title>
        <meta name="author" content="Krystian Zieja" >
        <meta name="keywords" content="oop, form, abstraction, php" >
        <link rel="stylesheet" href="output.css" />
    </head>
    <body>
        <main class="w-full h-full flex flex-col justify-center items-center">
        <?php
            echo $form -> render();
        ?>
        </main>
    </body>
</html>