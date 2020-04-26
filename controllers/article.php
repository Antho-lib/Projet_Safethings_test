<?php

require 'models/articles.php';
$article=REQ_TYPE_ID;
if(!REQ_TYPE_ID){
    $list = $list_data;
    include 'views/articles.php';
}else{
    // $list = per_item(REQ_TYPE_ID);
    $item = item($article);
    include 'views/article.php';
}
?>
