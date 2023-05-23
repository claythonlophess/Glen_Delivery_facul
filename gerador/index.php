<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        <label for="">nome</label>
        <input type="text" id="txt-atributo">
        <button type="button" id="btn-adicionar" value="Adicionar">Adicionar</button>

        <div id="container">

        </div>


        <table>
            <thead><label for="">Adicionar usuarios</label></thead>
            <tr>
                <th>Usuario</th>
                <th>Email</th>
                <th>permissao</th>
            </tr>
            <tr>
                <th>@calaiton</th>
                <th>Claiotm@lopes.com</th>
                <th>
                    <input type="Checkbox" name="gender" value="CREAT" checked> CREATE
                    <input type="Checkbox" name="gender" value="READ"> READ
                    <input type="Checkbox" name="gender" value="UPDATE"> UPDATE
                    <input type="Checkbox" name="gender" value="DELETE"> DELETE
                </th>
            </tr>
            <tr>
                <th>@edosm</th>
                <th>edsom@lopes.com</th>
                <th>
                    <input type="Checkbox" name="gender" value="CREAT" checked> CREATE
                    <input type="Checkbox" name="gender" value="READ"> READ
                    <input type="Checkbox" name="gender" value="UPDATE"> UPDATE
                    <input type="Checkbox" name="gender" value="DELETE"> DELETE
                </th>
            </tr>
        </table>

    </form>
    <script>
        var cont =0;
        document.addEventListener('DOMContentLoaded', function() {
            var btn = document.getElementById('btn-adicionar');
            btn.onclick = function() {
                var txt = document.getElementById('txt-atributo');
                var input = document.createElement('input');

                input.id = 'var'+cont;
                input.type = 'text';
                input.id = 'submit';
                input.value = txt.value;
                input.className = 'var'+cont;

                var l = document.createElement('label');
                
                l.innerHTML = 'Nome';
                l.className = 'border pad';

                container.appendChild(l);
                container.appendChild(input);

                var input = document.createElement('input');

                input.id = 'var'+cont;
                input.type = 'text';
                input.id = 'submit';
                input.value = txt.value;
                input.className = 'var'+cont;

                var l = document.createElement('label');
                
                l.innerHTML = 'Tipo';
                l.className = 'border pad';

                container.appendChild(l);
                container.appendChild(input);
                var input = document.createElement('input');

                input.id = 'var'+cont;
                input.type = 'text';
                input.id = 'submit';
                input.value = txt.value;
                input.className = 'var'+cont;

                var l = document.createElement('label');
                
                l.innerHTML = 'Tamanho';
                l.className = 'border pad';

                container.appendChild(l);
                container.appendChild(input);
                var input = document.createElement('input');

                input.id = 'var'+cont;
                input.type = 'text';
                input.id = 'submit';
                input.value = txt.value;
                input.className = 'var'+cont;

                var l = document.createElement('input');
                var ll = document.createElement('label');
                l.type="checkbox"
                ll.innerHTML = 'Chave';
                l.className = 'border pad';

                container.appendChild(l);
                container.appendChild(ll);
                container.appendChild(input);

                var l = document.createElement('label');
                
                l.innerHTML = 'Hi there!';
                l.className = 'border pad';

                container.appendChild(l);
                container.appendChild(input);
                var b = document.createElement('br');

                container.appendChild(b);
            }


        }, false);
    </script>
</body>

</html>
<?php
// seleciona todos os usuarios com as respectivas permissoes

// SELECT DISTINCT a.usuario, c.descricao as 'permissa' FROM usuario a join usu_per b join permissao c on a.id=b.usu_id and b.per_id=c.id and b.class_id=1

// seleciona um  usuario com as respectivas permissoes
// SELECT a.usuario, c.descricao as 'permissaa', b.class_id as classe FROM usuario a join usu_per b join permissao c on a.id=b.usu_id and b.per_id=c.id AND a.id=/* id do usuario*/ and b.class_id=/* id da classe */ GROUP by descricao

// adiciona uma permissao a um usuario
// INSERT into usu_per (class_id,per_id,usu_id)SELECT c.id 'na clsasse ', p.id 'de permissao', u.id 'ao usuario' from permissao p join usuario u join classe c on c.id=1 and u.id=1 and p.id=2 GROUP by p.id
?>