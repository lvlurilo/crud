<?php

function capa($capa){

    if(isset($_POST['buttonCadastrar'])){
        $formatos = array("jpg", "jpeg", "png");
        $extensao = pathinfo($_FILES['capa']['name'], PATHINFO_EXTENSION);
    
        if(in_array($extensao, $formatos)){
            $pasta = "../img/";
            $temp = $_FILES['capa']['tmp_name'];
            $arqName = uniqid().".$extensao";
    
            if(move_uploaded_file($temp, $pasta.$arqName)){
                $msg = "";
            }else{
                $msg = "não foi possivel fazer o upload do arquivo";
            }
    
        }else{
            $msg = "formato não permitido";
        }
    }
    
    return $arqName;
    
}


function newcapa($capa, $newcapa){

if(isset($_FILES['newcapa'])){
    $arqimg = "../img/".$capa;
    unlink($arqimg);

    $formatos = array("jpg", "jpeg", "png");
    $extensao = pathinfo($_FILES['newcapa']['name'], PATHINFO_EXTENSION);

    if(in_array($extensao, $formatos)){
        $pasta = "../img/";
        $temp = $_FILES['newcapa']['tmp_name'];
        $arqName = uniqid().".$extensao";

        if(move_uploaded_file($temp, $pasta.$arqName)){
            $msg = "";
        }else{
            $msg = "não foi possivel fazer o upload do arquivo";
        }

    }else{
        $msg = "formato não permitido";
    }

}else{
    $arqName = $capa;
}

return $arqName;

}

?>