<?php
$articleTitle = "This is a very long article title exceeding 50 characters limit";
if (strlen($articleTitle) > 50) {
    $truncatedTitle = substr($articleTitle, 0, 50);
    echo $truncatedTitle;
} else {
    echo $articleTitle;

}
?>