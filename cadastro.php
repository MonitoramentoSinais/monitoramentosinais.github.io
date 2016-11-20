<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_config1 = "mysql.hostinger.com.br";
$database_config1 = "u702593220_msdb";
$username_config1 = "u702593220_tcc";
$password_config1 = "TCC2016!@#";
$config1 = mysql_pconnect($hostname_config1, $username_config1, $password_config1) or trigger_error(mysql_error(),E_USER_ERROR);
?>

 
 
 
 
 
 <!DOCTYPE html>
 <html xmlns="http://www.w3.org/1999/xhtml">
 <head>
    <title>Home</title>
    <link href="style/index-layout.css" rel="stylesheet" type="text/css" />
    <link href="style/homepage-layout.css" rel="stylesheet" type="text/css"/>
 </head>
 <body>
    <!--right-->
    <div id="body">
        <div id="left">
        </div></div>
    <?php
    //execute the SQL query and return records
    $result = mysql_query("SELECT * 'FROM TABLE 1'");
    ?>
    <table>
        <thead>
            <tr>
                <th>Employee_id</th>
                <th>Employee_Name</th>

            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = mysql_fetch_assoc($result)) {
                echo"<tr>
          <td>{$row['bid']}</td>
          <td>{$row['bname']}</td>
        </tr>";
            }
            ?>
        </tbody>
    </table>
 </body>
 </html>
<?php mysql_close($connector); ?>