<?php

$idade = $_POST['idade'];

if ($idade < 0) {
    echo json_encode(
        array(
            'success' => true,
            'mensagem' => $idade . ' é uma idade inválida'
        )
    );
}else if($idade < 18){
    echo json_encode(
        array(
            'success' => true,
            'mensagem' => $idade . ': menor de idade'
        )
    );
}else{
    echo json_encode(
        array(
            'success' => true,
            'mensagem' => $idade . ': maior de idade'
        )
    );
}
