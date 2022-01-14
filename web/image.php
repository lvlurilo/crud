<?php

function capa($c){

    if(isset($c)){
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
    }else{
        $arqName = "vazio";
    }
    
    return $arqName;
    
}


function newcapa($c, $nc){

if(isset($nc)){
    $arqimgdelete = "../img/".$c;
    unlink($arqimgdelete);

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
    $arqName = "vazio";
}

return $arqName;

}

?>