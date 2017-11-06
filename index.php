<?php
include_once('classes.php');
include_once('header.php');

echo '<div class="panel panel-default">';
echo '<div class="panel-heading">Stavenhof Kniffel Highscore Board</div>';
echo '<div class="panel-body">';

echo '<table class="table">';
echo '<tr>';
echo '<th>Name</th>';
echo '<th>Punkte</th>';
echo '<th>Kniffel</th>';
echo '<th>Datum</th>';
echo '</tr>';

$mydb = new myDB();
$sql = 'SELECT * FROM stavenhof ORDER BY Punkte DESC';
$return = $mydb->myquery($sql);

foreach ($return as $row) {
  echo '<tr>';
  echo '<td>' . $row["Name"] . '</td>';
  echo '<td>' . $row["Punkte"] . '</td>';
  echo '<td>' . $row["Kniffel"] . '</td>';
  echo '<td>' . $row["Datum"] . '</td>';
  echo '</tr>';
}
echo '</table>';
echo '</div>';
echo '</div>';

include_once('footer.php');
?>
