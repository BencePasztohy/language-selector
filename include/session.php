<?php
// $_SESSION['language'] = 'eng';
$_SESSION['language'] = 'hun';
if (isset($_GET["lang"])) $_SESSION["language"] = $_GET["lang"];
else $_SESSION['language'] = 'hun';

$_SESSION['page'] = 'index.php';
if (isset($_GET["page"])) $_SESSION["page"] = $_GET["page"];
else $_SESSION['page'] = 'index.php';
?>