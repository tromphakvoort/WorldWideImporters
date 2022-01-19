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
        .carousel-control-prev-icon {
            width: 40px;
            height: 40px;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23220a00' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath d='M5.25 0l-4 4 4 4 1.5-1.5L4.25 4l2.5-2.5L5.25 0z'/%3e%3c/svg%3e");
        }
        .carousel-control-next-icon {
            width: 40px;
            height: 40px;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23220a00' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath d='M2.75 0l-1.5 1.5L3.75 4l-2.5 2.5L2.75 8l4-4-4-4z'/%3e%3c/svg%3e");
        }
        .iconicon1{
            color: #231f20;
            box-sizing: border-box;
            margin: ;
            padding: 0;
            text-align: center;
            border: 0;
            font: inherit;
            width: 20%;
            float: left;
            padding-top: 18px;
            padding-bottom: 10px;
            border-style: initial;
            background-color: transparent;
            border-top: 2px solid #e8e8e9;
            border-bottom: 2px solid #e8e8e9;
        }
        .htitle {
            box-sizing: border-box;
            margin: 0;
            text-align: center;
            padding: 0;
            border: 0;
            font: inherit;
            font-weight: 400;
            line-height: 1.2125em;
            margin-top: -0.2em;
            margin-bottom: 0.2em;
            display: block;
            color: black;
            text-align: center;
            padding-top: 10px;
            font-size: 16px;
        }
        .h2 {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            border: 0;
            font: inherit;
            font-weight: 100;
            margin-top: -0.2em;
            margin-bottom: 0.2em;
            font-size: 19px;
            color: #3c2314;
            line-height: 32px;
        }

        .carousel-caption {
             background-color:rgba(0,0,0,0.4);
        }

        #carouseldesc {
            color: white;
        }

    </style>

    <title><?php echo $title; ?></title>
</head>
<body>
<?php include APP_ROOT . "/templates/navbar.php"; ?>
