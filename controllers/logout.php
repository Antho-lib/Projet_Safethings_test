<?php
    session_destroy();
    session_unset();
    header("Location:".ROOT_PATH);
    exit();
?>
