<?php
require_once 'function.php';

$articles = get_derniers_articles();
$categories = get_categories();

require_once 'index-template.php';