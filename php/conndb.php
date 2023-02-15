<?php

$connect = mysqli_connect('mio_dbserver', 'root', 'ciccio', 'demo');
$query = "SELECT * FROM blogs";
$result = mysqli_query($connect, $query);

echo "<h1>SQL Content</h1>";
while ( $rec = mysqli_fetch_assoc($result)){

    echo '<h2>' .$rec['title'] .'</h2>';
    echo '<h2>' .$rec['content'] .'</h2>';
    echo '<h2>' .$rec['date'] .'</h2>';

}