<?php 


function salvarCliente($email,$cpf,$cupom,$host,$dbname,$user,$password){
    $dbh = conectarBD($host,$dbname,$user,$password);
    $dataAtual=date('Y-m-d H:i:s');

    $parametro = [];    
	$parametro[] = $email;
	$parametro[] = $cpf;
	$parametro[] = $cupom;
	$parametro[] = $dataAtual;


    $sql = "INSERT INTO cliente(emailCliente,cpfCliente,cupomCliente,dataCadastro) VALUES (?,?,?,?)";
    try {
	    $cod = $dbh->prepare($sql);
	    $cod->execute($parametro);
	    return true;
    	
    } catch (Exception $e) {
    	return $e;
    }
}
