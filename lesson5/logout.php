<?php
session_start();
require_once __DIR__ . '/functions.php';
makeRecordInLog( getCurrentUser(), 'logout' );
unset($_SESSION['user']);
header('location: .');