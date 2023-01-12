<?php
$home = 'This is the home page';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        header {
            height: 15vh;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 1.5rem;
            border: 1px solid black;
        }

        a {
            text-decoration: none;
            color: grey;
        }

        a:hover {
            text-decoration: underline;
        }

        .link {
            padding: 0.5rem;
            text-transform: uppercase;
        }
    </style>
</head>
<body>
    <header>
        <div class="link"><a href="about">about</a></div>

        <div class="link"><a href="contacts">contacts</a></div>

        <div class="link"><a href="shop">shop</a></div>
    </header>
    <h1 style="text-align: center; margin-top: 1rem;">Hello World! {{ $home }}</h1>
</body>
</html>
