<?php
$servername = '194.135.91.242;'; // адрес сервера
$dbname = 'common_vanobit'; // имя базы данных
$username = 'common_vanobit'; // имя пользователя
$password = '0xHfxZPUFI'; // пароль


$table = "contact1";
try {
    $db = new PDO("mysql:dbname=common_vanobit;host=194.135.91.242", "common_vanobit", "0xHfxZPUFI" );
    $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );//Error Handling
    $sql ="CREATE table $table(
     ID INT( 11 ) AUTO_INCREMENT PRIMARY KEY,
     status VARCHAR( 10 ) NOT NULL, 
     blocked VARCHAR( 10 ) NOT NULL,
     Name VARCHAR( 250 ) NOT NULL,
     Last_Name VARCHAR( 250 ) NOT NULL);" ;
    $db->exec($sql);
    print("Created $table Table.\n");

} catch(PDOException $e) {
    echo $e->getMessage();//Remove or change message in production code
}
?>


