<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <?php $url = 'http://'.$_SERVER['SERVER_NAME'].'/sua-url-aqui'; ?>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $url ?>/images/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $url ?>/images/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $url ?>/images/favicon/favicon-16x16.png">
        <link rel="manifest" href="<?php echo $url ?>/images/favicon/site.webmanifest">
        <link rel="mask-icon" href="<?php echo $url ?>/images/favicon/safari-pinned-tab.svg" color="#f46b45">
        <meta name="msapplication-TileColor" content="#f46b45">
        <meta name="theme-color" content="#f46b45">

        <title>
            Smart Campus Unoesc
        </title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
        <link rel="stylesheet" href="<?php echo $url ?>/css/base.css">
        <link rel="stylesheet" href="<?php echo $url ?>/css/menu.css">
        <link rel="stylesheet" href="<?php echo $url ?>/css/spinner.css">
        
        <!-- Adicionar CSS aqui -->

    </head>
    <body>
    <?php date_default_timezone_set('America/Sao_Paulo'); ?>

    <div class="overlay show" id="spinnerLoading">
        <!-- <p>Loader...</p> -->
        <div class="spinner-border spinner-border-sm spinner1"></div>
    </div>
         
       
        