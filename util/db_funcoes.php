  <?php
    class db_funcoes
    {
        var $resultado;
        var $con;
        var $registros;

        function db_funcoes()
        {
            $this->con = new conexao();
        }

        /**
         *   @param $tabela -> nome da tabela ou array de duas tabelas 
         * ex de uma tabela: $dao->listar('nomeTabela', "usuario", $_REQUEST['pesquisa'], $_REQUEST['ordem']);
         * 
         * ex duas tabelas: $dao->listar(array('tabelaA', "tabelaB"), "usuario", $_REQUEST['pesquisa'], $_REQUEST['ordem'], true);
         *   @param $$atributo_a_ser_retornado -> atributo que deseja retornar
         *   @param $condicao -> like a%
         *   @param $where -> condicao where 
         */
        function listar($tabela, $atributo_a_ser_retornado, $condicoes, $isArray)
        //SELECT v.matricula, f.nome , m.descricao as modeloo , mv.descricao as marca FROM `viatura` v JOIN funcionario f join modelo m join marca_viatura mv on v.id=v.id and f.id=v.funcionario and m.id = v.modelo and m.marca =mv.id
        {
            $nome = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j");
            $sql = "select " . $atributo_a_ser_retornado . " from ";

            if ($isArray) {
                for ($i = 0; $i < count($tabela); $i++) {
                    if (count($tabela) - 1 != $i)
                        $sql .=  $tabela[$i] . " " . $nome[$i] . " JOIN ";
                    else
                        $sql .=  $tabela[$i] . " " . $nome[$i] . " ON  " . $condicoes;
                }
            } else {
                $pp = "";
                $pp = $tabela[0];
                $sql .= "" . $pp . " " . $nome[0] . " where " . $condicoes;
            }
            // echo $sql;
            //echo '<script>alert("'. $sql.'")</script>';
            $this->resultado = $this->con->banco->Execute($sql);
        }

        /**
         *  @param $valor  a pesquisar apartir da coluna tem de ser literal
         *  @param $tabela tabela na base de dados
         *  @param $coluna coluna referente a id
         * 
         */
        // function pesquisar_geral($tabela,  $coluna, $codigo, $isArray)
        // {
        //     $nome = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j");
        //     $sql = "select * from ";
        //     if ($isArray) {
        //         for ($i = 0; $i < count($tabela); $i++) {
        //             if (count($tabela) - 1 != $i)
        //                 $sql .=  $tabela[$i] . " " . $nome[$i] . " JOIN ";
        //             else
        //                 $sql .=  $tabela[$i] . " " . $nome[$i] . " ON  " . $condicoes;
        //         }
        //     } else {
        //         $pp="";
        //         $pp = $tabela;
        //         $sql = "select * from " .$pp . " where " . $condicoes ;
        //     }
        //     if ($isArray) {
        //         $sql = "select * from " . $tabela[0] . " a JOIN " . $tabela[1] . " b ON a.id = b.id where " . $coluna . " like '" . $codigo . "%'";
        //     } else {
        //         $sql = "select * from " . $tabela . " where  " . $coluna . " like '" . $codigo . "%'";
        //     }
        //     return  $this->resultado = $this->con->banco->Execute($sql);
        // }

        /**
         *   @param $tabela -> nome da tabela
         *   @param $atributo -> nome da coluna
         *   @param $valor -> volor 
         */
        function excluir($tabela, $atributo, $valor)
        {

            $sql = "delete from " . $tabela . " where " . $atributo . "=" . $valor;
            if ($this->resultado = $this->con->banco->Execute($sql)) {
                return true;
            } else {
                return false;
            }
        }
        /**
         *  @param $tabela -> nome da tabela
         *  @param $atributo -> array de colunas da tabela Ex: nome
         *  @param $atributosAtualizados -> array de valores para stualizar Ex: 'claiton'
         */
        function gravar($tabela, $atributo, $atributosAtualizados)
        {
            $str = "";
            $str1 = "";
            for ($x = 0; $x < count($atributo); $x++) {
                //essa condicao retira a ultima virgula
                if (count($atributo) - 1 == $x) {
                    if ('#id' == substr($atributosAtualizados[$x],0,3)) {
                        $str .= $atributo[$x];
                        $str1 .= substr($atributosAtualizados[$x],3,strlen($atributosAtualizados[$x]));
                    }else
                    if ('LOCALTIMESTAMP' == $atributosAtualizados[$x]) {
                        $str .= $atributo[$x];
                        $str1 .= "LOCALTIMESTAMP";
                    }else{
                        $str1 .= "'";
                        $str .= $atributo[$x] . "";
                        $str1 .= $atributosAtualizados[$x] . "'";
                    }
                } else {
                    if ('#id' == substr($atributosAtualizados[$x],0,3)) {
                        $str .= $atributo[$x] . ", ";;
                        $str1 .= substr($atributosAtualizados[$x],3,strlen($atributosAtualizados[$x])) . ", ";;
                    }else
                    //adiciona virgulas
                    if ('LOCALTIMESTAMP' == $atributosAtualizados[$x]) {
                        $str .= $atributo[$x] . ", ";
                        $str1 .= "LOCALTIMESTAMP,";
                    }else{
                    $str1 .= "'";
                    $str .= $atributo[$x] . ", ";
                    $str1 .= $atributosAtualizados[$x] . "', ";
                    }
                }
            }

            $sql = "insert into " . $tabela . "  (" . $str . ")   VALUES (" . $str1 . " )";
            //echo '<script>alert("' . $sql . '")</script>';
            if ($this->resultado = $this->con->banco->Execute($sql)) {
               echo '<script>alert("'.$this->con->banco->insert_id().'")</script>';
            } else {
                echo '<script>alert("erro")</script>';
                echo '<script>alert("'. $sql.'")</script>';
            }
        }

        /**
         *   @param $tabela -> nome da tabela
         *   @param $atributo -> array de colunas da tabela Ex: nome
         *   @param $atributosAtualizados -> array de valores para stualizar Ex: 'claiton'
         *   @param $codigo -> id do elemento a atualizar  Ex: 'claiton'
         */
        function alterar($tabela, $atributo, $atributosAtualizados, $codigo)
        {
            $str = "";
            for ($x = 0; $x < count($atributo); $x++) {
                if (count($atributo) - 1 == $x) {
                    $str .= $atributo[$x] . " = '" . $atributosAtualizados[$x] . "'";
                } else {
                    $str .= $atributo[$x] . " = '" . $atributosAtualizados[$x] . "', ";
                }
            }

            $sql = "update " . $tabela . " set " . $str . " where  id=" . $codigo;
            if ($this->resultado = $this->con->banco->Execute($sql)) {
                return true;
            } else {
                return false;
            }
        }

        /**
         *  @param $codigo pesquisa apartir da coluna
         *  @param $tabela tabela na base de dados
         *  @param $coluna coluna referente a id
         * 
         */
        function selecionaPorId($tabela,  $coluna, $codigo, $isArray)
        {
            if ($isArray) {
                $sql = "select * from " . $tabela[0] . " a JOIN " . $tabela[1] . " b ON a.id = b.id where " . $coluna . "=" . $codigo;;
            } else {
                $sql = "select * from " . $tabela . " where  " . $coluna . "=" . $codigo;
            }
            return $this->resultado = $this->con->banco->Execute($sql);
        }


        function gravar_img($tipo, $id)
        {
            $tipos_arquivos = array(".jpeg", ".JPEG", ".jpg", ".gif", ".png", ".JPG", ".GIF", ".PNG");
            $nome_arquivo = $_FILES["imagem"]["name"];
            $tipo_arquivo = strrchr($nome_arquivo, ".");
            if (in_array($tipo_arquivo, $tipos_arquivos)) {
                if (move_uploaded_file($_FILES['imagem']['tmp_name'], '' . $nome_arquivo)) {
                    $sql = "insert into `imagem`(`descricao`,`$tipo`, `id_associado`) VALUES ('Imagem do $tipo " . $_REQUEST['id_associado'] . " " . date_timestamp_get(date_create()) . "', '$id')";
                    if ($this->resultado = $this->con->banco->Execute($sql)) {
                        echo '<script>alert("sucesso")</script>';
                        return true;
                    } else {
                        echo '<script>alert("erro bd")</script>';

                        return false;
                    }
                } else {
                    echo '<script>alert("server")</script>';
                }
            } else {
                echo '<script>alert("' . $nome_arquivo . '")</script>';
            }
        }
    }

    //  $oquefazer = new db_funcoes();
    //  $tabela = array('usuario', "funcionario");
    //  $oquefazer->listar($tabela , "a.*, b.*", "a.id = b.id", true);
    // $oquefazer->listar(array("viatura","modelo","marca_viatura","funcionario"),"a.*, b.descricao, c.descricao, d.nome", " a.funcionario = d.id and a.modelo = b.id and b.marca = c.id ", false);
    //$oquefazer->listar("cidade", "", "", "", "descricao", "");
    // $oquefazer->listar("cidade", "id", "like", "descricao", "descricao");
    // $oquefazer->gravar("tabela", array("carro", "marca", "tipo"), array("Volvo", "BMW", "Toyota"), "codigo",);
    ?>