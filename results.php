<?php //results.php
require_once 'functions.php';
require_once 'header.php';

database_connect($dbhost, $dbuser, $dbpass, $dbname);

$query = 'SELECT * FROM nyitevents WHERE Event="'.sanitizeString($_GET['category']).'"';
$result = queryMysql($query);
if(!$result) die('Database access failed: '.mysql_error());
    
$rows = mysql_num_rows($result);

echo "<div class='container-fluid table-responsive'>";
echo "<table class='table table-striped table-hover table-bordered'>";
echo "<tr><th>Name</th><th>Description</th><th>Date</th><th>Time</th><th>Location</th></tr>";
for($j=0; $j<$rows; ++$j){
    $row = mysql_fetch_row($result);
    echo "<tr>";
    echo "<td>".$row[0]."</td>";
    echo "<td>".$row[1]."</td>";
    echo "<td>".$row[2]."</td>";
    echo "<td>".$row[3]."</td>";
    echo "<td>".$row[4]."</td></tr>";
    
}

if($rows==0){
    echo "<tr><td colspan='5'><img src='img/noFlexZone.png' />
    <h2>It ha no events dawg</h2></td></tr>";
}
echo "</table></div>";



mysql_close(mysql_connect($dbhost, $dbuser, $dbpass));
?>

<script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>