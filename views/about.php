<?php
    ob_start();
?>

<<div class="jumbotron">
    <h1 class="display-4">About</h1>
    <p class="lead">Comment la société est né </p>
</div>

<?php
    $title = "About la société" ;
    $content = ob_get_clean();
    include 'includes/template.php';
?>
