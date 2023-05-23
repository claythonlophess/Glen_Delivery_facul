<script src="http://localhost/NiceAdmin/assets/js/jquery-3.6.1.min.js"></script>
<script>
    function showDiscription(accao, codigo, tabela,url) {
        var xhttp;
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                $(".ajax-modal").html(this.responseText);
            }
        };
        xhttp.open("GET", "http://localhost/"+url+"?acao=" + accao+"&codigo="+codigo+"&tabela="+tabela, true);
        xhttp.send();
    }

    function pesquisa(accao, valor, $id_ajax, tabela) {
        var xhttp;
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                $("."+$id_ajax).html(this.responseText);
            }
        };
        xhttp.open("GET", "http://localhost/NiceAdmin/admin/index.php?&acao=" + accao+"&codigo="+valor+"&tabela="+tabela, true);
        xhttp.send();
    }

    function rows(accao, valor, $id_ajax, tabela,rows) {
        var xhttp;
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                $("."+$id_ajax).html(this.responseText);
            }
        };
     //   alert("http://localhost/NiceAdmin/admin/index.php?&acao=" + accao+"&codigo="+valor+"&tabela="+tabela+"&rows="+rows, true);
        xhttp.open("GET", "http://localhost/NiceAdmin/index.php?&acao=" + accao+"&codigo="+valor+"&tabela="+tabela+"&rows="+rows, true);
        xhttp.send();
    }
</script>