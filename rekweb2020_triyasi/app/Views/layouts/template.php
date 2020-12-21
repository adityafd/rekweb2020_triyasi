<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.css'); ?>">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> -->

    <!-- Main CSS Style -->
    <link rel="stylesheet" href="<?php echo base_url('css/style.css'); ?>">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="<?php echo base_url('css/font-awesome.css'); ?>">

    <!-- Slick -->
    <link rel="stylesheet" href="<?php echo base_url('css/slick.css'); ?>">

    <!-- Theme Colour -->
    <link rel="stylesheet" href="<?php echo base_url('css/theme-colour.css'); ?>">

    <title><?= $title; ?></title>
</head>

<body>

    <?= $this->include('layouts/navbar'); ?>

    <?= $this->renderSection('content'); ?>

    <!-- jQuery -->
    <script type="text/javascript" src="<?php echo base_url('js/jquery.min.js'); ?>"></script>
    <!-- Bootstrap JS -->
    <script type="text/javascript" src="<?php echo base_url('js/bootstrap.js'); ?>"></script>
    <!-- Slick -->
    <script type="text/javascript" src="<?php echo base_url('js/slick.js'); ?>"></script>
    <!-- Main Script -->
    <script type="text/javascript" src="<?php echo base_url('js/script.js'); ?>"></script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script> -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>

</html>