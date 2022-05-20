<?php
session_start();
$id = $_SESSION['clave'];
if($id == "759@153Ddos1100"){

    if(isset($_POST) && !empty($_POST)) {
        include('phpqrcode/qrlib.php'); 
        $codesDir = "codes/";   
        $codeFile = date('d-m-Y-h-i-s').'.png';
        QRcode::png($_POST['formData'], $codesDir.$codeFile, $_POST['ecc'], $_POST['size']); 
        echo '<img class="img-thumbnail" src="'.$codesDir.$codeFile.'" />';
    } else {
        header('location:./');
    }
}else{ 
    echo "ERROR 500";
}
?>