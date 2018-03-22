<?php
require_once 'connect.php';
?>

<?php

$Name = $_Post['t1'];
$Email = $_Post['t2'];
$Message = $_Post['t3'];

try {
    $host = "localhost";
    $username = "root";
    $password = "ganesh";
    $database = "studentaccomodation";
    $dsn = "mysql:host=$host;dbname=$database";

    $conn = new PDO( $dsn, $username, $password );
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO contacts("
    . "Name, Email, Message" 
    . " ) VALUES (" 
    . "'" . $Name . "',"
    . "'" . $Email . "',"
    . "'" . $Message . "')";

    $conn->query($sql);

    $sql = "SELECT * FROM contacts";
    $contacts = $conn-query($sql);
    echo '<table>';
    echo '<tr>';
    echo '<th>Name</th>
          <th>Email</th>
          <th>Message</th>';
    echo '<tr>';
    foreach ($contacts as $contacts) {
    echo '<tr>';
    echo '  <td>' . $contacts['Name'] . '</td>';
    echo '  <td>' . $contacts['Email'] . '</td>';
    echo '  <td>' . $contacts['Message'] . '</td>';
    echo '  </tr> ';
}

echo '</table>';

        $conn = null;
    }
    catch (PDOException $e) {
        $conn = null;
        exit("Connection failed: " . $e->getMessage());
    }
?>

