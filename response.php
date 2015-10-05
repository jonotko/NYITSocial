<?php //response.php
require 'functions.php';
require 'header.php';

if($_GET['submitted']){
    echo <<<_HTML
    <div class='container-fluid'>
    <h1 class='messages'> Your Event has been successfully added! </h1>
    </div>
_HTML;
}
?>
<!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
