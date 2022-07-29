<?php

require_once 'funcoes.php';

$contasCorrentes = [
    '1234' => [
        'nome' => 'Maria',
        'saldo' => 10000,
    ],
    '1235' => [
        'nome' => 'Alberto',
        'saldo' => 300,
    ],
    '1236' => [
        'nome' => 'Vinicius',
        'saldo' => 100,
    ]
];

$contasCorrentes['1234'] = sacar($contasCorrentes['1234'], 500);
$contasCorrentes['1235'] = sacar($contasCorrentes['1235'], 200);

$contasCorrentes['1236'] = depositar($contasCorrentes['1236'], 900);

unset($contasCorrentes['1235']);

titularComLetrasMaiusculas($contasCorrentes['1236']);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
	<h1>Contas Correntes</h1>
	
	<dl>
		<?php foreach ($contasCorrentes as $cpf => $conta){?>
		<dt>
			<?= $conta['nome'];?> - <?= $cpf; ?> 
		</dt>
		<dd>
			Saldo: <?= $conta['saldo']; ?></dd>
		<?php } ?>
	</dl>
</body>
</html>