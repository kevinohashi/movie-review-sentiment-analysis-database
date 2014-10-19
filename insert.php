<?php
$username = 'username';
$password = 'password';
$databasename = 'movie_sentiment';
$dbh = mysql_connect ("localhost", $username,$password) or die('Cannot connect to the database because: ' . mysql_error());
        mysql_select_db ($databasename,$dbh);

if ($handle = opendir('pos')) {

    while (false !== ($entry = readdir($handle))) {

        if ($entry != "." && $entry != "..") {
        $entry = 'pos/' . $entry;
        $text = file_get_contents($entry);
        $text = mysql_real_escape_string($text);
        $query = "INSERT INTO moviesentiment(sentiment, text) VALUES('pos','$text')";
        mysql_query($query) or die('fml ' . mysql_error());
        }
    }

    closedir($handle);
}
if ($handle = opendir('neg')) {

    while (false !== ($entry = readdir($handle))) {

        if ($entry != "." && $entry != "..") {
        $entry = 'neg/' . $entry;
        $text = file_get_contents($entry);
        $text = mysql_real_escape_string($text);
        $query = "INSERT INTO moviesentiment(sentiment, text) VALUES('neg','$text')";
        mysql_query($query) or die('fml ' . mysql_error());
        }
    }

    closedir($handle);
}
?>
