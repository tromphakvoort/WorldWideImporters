<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300&display=swap');

        * {
            font-family: 'Titillium Web', sans-serif;
        }
        .product {
            border: 1px solid #e2e2e2;
            margin: -1px 19px 3px -1px;
            padding: 10px;
            text-align: center;
            background-color: #efefed;
        }
        table, th, tr {
            text-align: center;
        }
        .title2 {
            text-align: center;
            color: cornflowerblue;
            background-color: #e2e2e2;
            padding: 2%;
        }
        h2 {
            text-align: center;
            color: cornflowerblue;
            background-color: #e2e2e2;
            padding: 2%;
        }
        table th {
            background-color: #e2e2e2;

        }
    </style>

    <title><?php echo $title; ?></title>
</head>
<body>
<?php include APP_ROOT . "/templates/navbar.php"; ?>
