<?php

//php para logout



session_start();
session_destroy();
header('Location: login.php');

?>