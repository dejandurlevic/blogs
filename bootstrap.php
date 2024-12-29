<?php 
session_start();

$config = require 'config.php';

require 'classes/Connection.php';

$db = Connection::connect($config['database']);

require 'classes/QueryBuilder.php';
require 'classes/User.php';
require 'classes/Posts.php';

$query = new QueryBuilder($db);
$user = new User($db);
$posts = new Posts($db);
?>