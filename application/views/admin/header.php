<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Admin Dholpine</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">

    <!-- Optional theme -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap-theme.min.css') ?>" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link href="<?= base_url('assets/css/font_googleapis_css.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/fonts/font-awesome.min.css') ?>">

    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>

<style>
    body {
        font-family: 'Quicksand', sans-serif;
    }

    .wrapper {
        width: 100%;
        height: 100%;
    }

    .navbar {
        margin-bottom: 0;
    }

    .sidebar {
        width: 100%;
        height: 100%;
        background: #293949;
        position: absolute;
        z-index: 100;
    }

    ul {
        padding: 0;
        margin-left: -40px;
    }

    ul li {
        list-style: none;
        border-bottom: 1px solid rgba(255, 255, 255, 0.5);
    }

    ul li a {
        text-decoration: none;
        color: #aeb2b7;
        display: block;
        padding: 19px 0px 18px 25px;
        transition: all 200ms ease-in;
    }

    ul li a:hover {
        text-decoration: none;
        color: #1abc9c;
    }

    ul li a:visited {
        text-decoration: none;
        color: #fff;
    }

    li li a span {
        display: inline-block;
    }

    ul ul {
        display: none;
        margin: 0px;
    }

    ul li a .fa-angle-down {
        margin-right: 10px;
    }

    /*apabila lebar min 768px*/
    @media(min-width: 768px) {
        .sidebar {
            width: 240px;
        }

        .content {
            margin-left: 250px;
        }

        .inner {
            padding: 15px;
        }
    }
</style>
