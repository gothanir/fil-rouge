<?php
// controllers/post.php
require_once('model/model.php');
function post(string $identifier) {
    $post = getPost($identifier);
    require('templates/post.php');
} 