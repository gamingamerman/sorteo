<?php
require('view/header.php');

require('controller/sorteoController.php');

$controller = new SorteoController();

$controller->mainPage();

require('view/footer.php'); ?>