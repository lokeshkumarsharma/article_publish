<?php
$db=mysql_connect('localhost','root','');
mysql_select_db('kavd',$db);

$sql = 'CREATE TABLE IF NOT EXISTS cms_users (
user_id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
email VARCHAR(100) NOT NULL UNIQUE,
password CHAR(41) NOT NULL,
name VARCHAR(100) NOT NULL,

PRIMARY KEY (user_id))';
mysql_query($sql,$db);



$sql = 'CREATE TABLE IF NOT EXISTS cms_articles (
article_id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
user_id INTEGER UNSIGNED NOT NULL,
title VARCHAR(255) NOT NULL,
article_text MEDIUMTEXT,
PRIMARY KEY (article_id),
FOREIGN KEY (user_id) REFERENCES cms_users(user_id))';
mysql_query($sql,$db);


$sql = 'CREATE TABLE IF NOT EXISTS cms_pending (
pend_id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
title VARCHAR(255) NOT NULL,
article_text MEDIUMTEXT,
PRIMARY KEY (pend_id))';
mysql_query($sql,$db);


$sql = 'CREATE TABLE IF NOT EXISTS cms_comment (
comment_id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
article_id INTEGER UNSIGNED NOT NULL,
comment_text MEDIUMTEXT,
PRIMARY KEY(comment_id),
FOREIGN KEY (article_id) REFERENCES cms_articles(article_id))';
mysql_query($sql,$db) or die(mysql_error($db));


echo'success';