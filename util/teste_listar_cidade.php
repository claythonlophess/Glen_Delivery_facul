<?php
 include('conecta.php');
 $sql = "select * from cidade";

 $resultado = $con->banco->Execute($sql) or die("Erro na consulta: $query. " . $db->ErrorMsg());
 
 // Iteração através do resultset
// imprimir dados em colunas no formato TÍTULO - AUTOR

while (!$resultado->EOF){
    echo "cidade = " . $resultado->fields('descricao') . "<br>";
    $resultado->MoveNext(); // Veja que função útil, como também o EOF 
                            // (End Of File, enquanto não chegar ao final)
}

?>