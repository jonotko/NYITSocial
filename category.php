<?php //category.php
require_once 'functions.php';

if($_GET['category'])
{
    switch($_GET['category'])
    {
        case 'party':
        echo "<p>This is a party</p>";
        header('location:results.php?category=party');
        break;
        case 'campus event':
        echo "<p>This is a campus event</p>";
        header('location:results.php?category=campus event');
        break;
        case 'club meeting':
        echo "<p>This is a club event</p>";
        header('location:results.php?category=club meeting');
        break;
        case 'greek mixer':
        echo "<p>This is a greek mixer</p>";
        header('location:results.php?category=greek mixer');
        break;
        default:
        require 'header.php';
        echo <<<_HTML
        <div class='container-fluid' id='apology'>
        <h1> OH NO!</h1> 
        <h3>There seems to be something wrong</h3> 
        <p><strong>GO back to the homepage and try again</strong></p>
        </div>
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
        </body></html>
_HTML;
        break;
        
    }
}
?>