<?php
session_start();

//destroy the session
session_destroy();
header('Location: /phplectures/13sessions.php');


?>