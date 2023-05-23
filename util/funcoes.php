<?php
    function alerta($messagem){
        echo '<script>alert("'.$messagem.'")</script>';
    }
    function direciona_Para($url){
        echo '<script>window.location="'.$url.'"</script>';
    }
    function voltar(){
        echo '<script>history.back()</script>';
    }
?>