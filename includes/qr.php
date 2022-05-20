<?php
session_start();
$id = $_SESSION['clave'];
if($id == "759@153Ddos1100"){

    if(isset($_POST) && !empty($_POST)) {
        include('phpqrcode/qrlib.php'); 
        $codesDir = "codes/";   
        $codeFile = date('d-m-Y-h-i-s').'.png';
        $color = [
            [0,0,0],//Color de fondo
            [227,28,52],// El color del ángulo de posicionamiento 
            [247,134,0],// El color del contenido medio
        ];
        QRcode::png($_POST['formData'], $codesDir.$codeFile, $_POST['ecc'], $_POST['size'],2,false,$color); 
        echo '<img class="img-thumbnail" src="'.$codesDir.$codeFile.'" />';
    } else {
        header('location:./');
    }
}else{ 
    echo "ERROR 500";
}
?>