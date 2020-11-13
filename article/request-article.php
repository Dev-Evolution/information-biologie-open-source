<?php
require __DIR__ . '../../account/db-config.php';
if($_GET['article']){
    try{
        $options = [
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_PERSISTENT => true
        ];
    
        $PDO = new PDO($DB_BSN, $DB_USER, $DB_PASS);
        
        $articles = $PDO -> query('SELECT id_article, article_domain, article_content, article_registration, user_pseudo FROM article INNER JOIN t_users ON article.author_article = t_users.id_user WHERE id_article =' . $_GET['article']);
        
        $article = $articles->fetch(PDO::FETCH_ASSOC);
        $article_domain = $article['article_domain'];
        $article_content = $article['article_content'];
        $article_registration = $article['article_registration'];
        $author_article = $article['user_pseudo'];
        
    }
    catch(PDOException $pe){
        echo 'ERREUR: ' . $pe->getMessage();
    }
}
?>