<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <style>
        div.input:not(:first-child) {
            margin-top: 1rem;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
        }
        li {
            list-style: none;
        }

        ul {
            display: flex;
            gap: 1rem;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: beige;
        }
    </style>
</head>
<body>
    <header>
        <div>LOGO</div>
        <ul>
            <li><a href="#">Accueil</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Gallerie</a></li>
            <li><a href="#">A propos</a></li>
        </ul>
    </header>