<?php
 
require_once 'init.php';
 
if (!isset($_SESSION['username']))
{
    header('Location: login.php');
}