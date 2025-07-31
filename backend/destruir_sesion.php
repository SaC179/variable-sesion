<?php
session_start();
session_destroy();
header('Location: ../frontend/sesion_destruida.html');
exit;
?>