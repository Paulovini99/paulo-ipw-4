<?php
include '2_trycatch.php';

//$query ="insert into teste (nome, email) values ('Paulo' , 'paulovini@hotmail.com')";
//$query="update  teste set nome= 'dennys ' where id= 1";
$query="DELETE FROM teste WHERE id = 4";


$sql = $conexao->prepare($query);
$resultado = $sql->execute();





?>