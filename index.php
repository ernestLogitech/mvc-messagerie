<?php

require('model/model.php');

$posts = getPosts();

require('templates/homepage.php');
?>