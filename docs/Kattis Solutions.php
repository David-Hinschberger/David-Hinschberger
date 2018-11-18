<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kattis Solutions</title>
</head>
<body>
Click <a href="/">Here</a> to go back to the empty page of nothing.
<br><br>

Kattis Solutions!

<table id="solutions" style="width:800px">
    <tr>
        <th align="left">Name</th>
        <th align="left">Solution</th>
        <th align="left">Difficulty</th>
    </tr>

<?php
$db = new SQLite3('../solutions.db');
$results = $db->query('SELECT Link,Title,Difficulty FROM Kattis');
while ($row = $results->fetchArray()) {
    echo '<tr>' . "<td><a href=\"$row[0]\">".$row[1].'</a></td>' . "<td><a href=\"KattisSolutionRetrieve.php?Problem=" . str_replace(' ','_',$row[1]) . "\">Solution</a></td>" . '<td>' . $row[2] . '</td></tr>';
}
?>
</table>

</body>
</html>