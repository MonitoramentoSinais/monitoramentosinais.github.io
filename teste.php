


<?php
$query = "SELECT col, id FROM TABLE 1";
while($data = mysql_fetch_assoc($query)){
$name = $data['name'];
$id = $data['id'];
echo '<tr>';
echo '<td>'.$name.'</td>';
echo '<td>'.$id.'</td>'; 
echo '</tr>';
}
?>