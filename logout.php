<?php
include_once "session.php" ;
unset($_SESSION["user"]);
session_destroy();
header("location: index.php?g=5");