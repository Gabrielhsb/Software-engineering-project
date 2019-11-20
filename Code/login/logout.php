<?php
//Utilizado para encerrar a sessão
session_start();
session_unset();
session_destroy();
header('Location: login.php');