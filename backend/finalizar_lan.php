<?php

session_start();
session_destroy();

unset(
    $_SESSION['competicao'],
    $_SESSION['msg']
);

header("Location: ../index.php");

?>