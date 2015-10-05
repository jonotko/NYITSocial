<?php
require_once 'functions.php';
require_once 'header.php';
database_connect($dbhost, $dbuser, $dbpass,$dbname);
$user = 'n';
if(isset($_FILES['image']['name']))
{
    $saveto = "$user.jpg";
    move_uploaded_file($_FILES['image']['tmp_name'],$saveto);
    $typeok = TRUE;
    switch($_FILES['image']['type'])
    {
        case "image/gif": $src = imagecreatefromgif($saveto); break;
        case "image/jpeg":
        case "image/pjpeg": $src = imagecreatefromjpeg($saveto); break;
        case "image/png": $src = imagecreatefrompng($saveto); break;
        default : $typeok = FALSE; break;
    }
    if($typeok)
    {
        list($w, $h) = getimagesize($saveto);
        $max = 250;
        $tw = $w;
        $th = $h;
        
        if($w > $h && $max < $w)
        {
            $th = $max/$w * $h;
            $tw = $max;
        }
        elseif($h > $w && $max < $h)
        {
            $tw = $max/$h* $w;
            $th = $max;
        }
        elseif($max < $w)
        {
            $tw = $th = $max;
        }
        $tmp = imagecreatetruecolor($tw, $th);
        imagecopyresampled($tmp, $src, 0, 0, 0, 0, $tw, $th, $w, $h);
        imageconvolution($tmp, array(array(-1, -1,-1), array(-1,16, -1), array(-1,-1,-1)),8,0);
        imagejpeg($tmp,$saveto);
        imagedestroy($tmp);
        imagedestroy($src);
    }
}


echo <<<_HTML
<div class='container-fluid'>
<form method='post' action='test.php' enctype='multipart/form-data'>
Image: <input type='file' name='image' size='14' maxlength='32' />
<input type='submit' value='Save Image' />
</form>
</div>
_HTML;
echo "<div class='container-fluid'>";
for($i=0; $i<4; $i++){
$user = 'n'.$i;
if(file_exists("$user.jpg"))
{
    echo "<div class='row'><div class='col-xs-12'><img src='$user.jpg' class='img-responsive' /><br /></div></div>";
}
}
?>
<!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>