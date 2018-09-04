<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<!DOCTYPE html>
<html lang="<?php echo Localization::activeLanguage(); ?>">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <?php echo View::element('header_required'); ?>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
        <?php echo Core::make('helper/html')->css($view->getStylesheet('main.less')); ?>
    </head>

    <body>
        <div class="<?php echo $c->getPageWrapperClass(); ?>">