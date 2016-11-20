<?php 
include "config.php";
?>
<!doctype html>
<html>
    <head>
        <title>Makitweb - How to Export MySQL Table data as CSV file in PHP</title>
        <link href="style.css" rel="stylesheet" type="text/css">

    </head>
    <body>
        <div class="container">
            
            <form method='post' action='download.php'>
            <input type='submit' value='Export' name='Export'>
                
            <table border='1' style='border-collapse:collapse;'>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Email</th>
                </tr>
            <?php 
            $query = "SELECT * FROM user3 ORDER BY id asc";
            $result = mysql_query($query);
            $user_arr = array();
            while($row = mysql_fetch_array($result)){
                $id = $row['id'];
                $uname = $row['username'];
                $name = $row['name'];
                $gender = $row['gender'];
                $email = $row['email'];
                $user_arr[] = array($id,$uname,$name,$gender,$email);
            ?>
                <tr>
                    <td><?php echo $id; ?></td>
                    <td><?php echo $uname; ?></td>
                    <td><?php echo $name; ?></td>
                    <td><?php echo $gender; ?></td>
                    <td><?php echo $email; ?></td>
                </tr>
            <?php
            }
            ?>
            </table>
            <?php 
            $serailze_user_arr = serialize($user_arr);
            ?>
            <textarea name='export_data' style='display: none;'><?php echo $serailze_user_arr; ?></textarea>
            </form>
        </div>
    </body>
</html>

