<?php

/**
 * Get the article record based on the ID.
 * 
 * @param object $conn Connection to the database.
 * @param integer $id the article ID.
 * 
 * @return mixed An associative array containing the article with that ID, or null if not found.
 */
function getArticle($id, $conn)
{
    $sql = "SELECT * FROM article WHERE id = $id;";

    $results = mysqli_query($conn, $sql);

    if ($results === false) {
        $article = null;
    } else {
        $article = mysqli_fetch_assoc($results);
    }
    return $article;
}

/**
 * Get the database connection.
 * 
 * @return object Connection to a MySQL server.
 */
function getDB()
{
    include('./includes/db_credentials.php');

    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    return $conn;
}
