<?php
session_start();
include_once 'includes/header.php';
include_once 'includes/functions.php';

Welcome($_SESSION['name']??'Guest');

include_once 'includes/footer.php';
