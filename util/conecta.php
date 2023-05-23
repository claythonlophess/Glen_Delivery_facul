<?php
// include the ADODB library
require("adodb5\adodb.inc.php");

    class conexao {
        var $tipo_banco = "mysql";
        var $nome_banco = "db";
        var $servidor = "localhost";
        var $usuario = "root";
        var $senha = "";
        var $banco;

        function conexao(){
            // create an object instance
            // Configurar para uma conexão tipo PostgreSQL
            $this->banco = NewADOConnection($this->tipo_banco);
            $this->banco->debug= false;
            // Abrir uma conexão com o banco de dados
            // $db->Connect("servidor", "usuario", "senha", "banco")
            $this->banco->Connect($this->servidor,$this->usuario,$this->senha,$this->nome_banco) or die("Falha na conexão!");
        }

        function debug($debug){
            $this->banco->debug= $debug;
        }

    }

    $con = new conexao();//usado no login
    // if($con)
    //     echo "conectou";
    // else
    //     echo "nao conectou";


?>