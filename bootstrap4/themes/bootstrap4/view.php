<?php
defined('C5_EXECUTE') or die("Access Denied.");

$view->inc('elements/header.php');
?>

<main>
    <?php
    View::element('system_errors', [
        'format' => 'block',
        'error' => isset($error) ? $error : null,
        'success' => isset($success) ? $success : null,
        'message' => isset($message) ? $message : null,
    ]);

    echo $innerContent;
    ?>
</main>

<?php $view->inc('elements/footer.php') ?>