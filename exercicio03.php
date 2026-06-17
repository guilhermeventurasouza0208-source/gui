<!DOCTYPE html>
<html><head>
    <meta charset="utf-8">
	<title></title>
</head><body>
    <?php
	    print "testando<br>";
		// Declarando uma variavel de memória
		$nome;
		// atribuindo um valor a variavel
		$nome = 'João';
		// imprimindo a variavel
		print $nome;
		// case sensitive
		print $Nome; // mensagem de erro na linha 26 ja esperado
	?>
</body>
</html>