<?php
$connect = new PDO("mysql:host=LOCALHOST;dbname=NOME_AQUI", "USUÁRIO", "SENHA");

$data = [
	'nome' => $_POST["nome"],
	'email' => $_POST["email"],
	'fone' => $_POST["fone"],
	'whatsapp' => $_POST["whatsapp"],
	'msg' => $_POST["msg"],
];

$stmt = $connect->prepare('INSERT INTO contact_request (CLIENT_NAME, CLIENT_EMAIL, CLIENT_NUMBER, WHATSAPP, COMMENT) values (:nome, :email, :fone, :whatsapp, :msg)');

try{
	$connect->beginTransaction();
	$stmt->execute($data);
	$connect->commit();
	echo 'Registro salvo com sucesso';
}catch (Exception $e) {
	$connect->rollback();
	throw $e;
}

