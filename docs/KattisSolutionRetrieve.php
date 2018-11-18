<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 18-Nov-18
 * Time: 12:52
 */
$db = new SQLite3('../solutions.db');
$results = $db->query('SELECT Solution FROM Kattis WHERE Title =\'' . str_replace('_',' ',$_GET['Problem']) . '\'');
echo "<xmp>";
echo $results->fetchArray()[0];
echo "</xmp>";