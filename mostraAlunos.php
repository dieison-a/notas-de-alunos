<?php

$alunos = [
    trim($_POST['nome1']) => $_POST['nota1'],
    trim($_POST['nome2']) => $_POST['nota2'],
    trim($_POST['nome3']) => $_POST['nota3'],
];

$maiorNome = '';
$maiorNota = null;

foreach ($alunos as $nome => $nota) {
    if ($maiorNota === null || $nota > $maiorNota) {
        $maiorNome = $nome;
        $maiorNota = $nota;
    }
}
?>
<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Resultado das notas</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <main class="card">
        <h1>Notas cadastradas</h1>

        <table>
            <thead>
                <tr>
                    <th>Aluno</th>
                    <th>Nota</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($alunos as $nome => $nota): ?>
                    <tr>
                        <td><?php echo $nome; ?></td>
                        <td><?php echo number_format($nota, 2, ',', '.'); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <p class="highlight">
            Maior nota: <strong><?php echo $maiorNome; ?></strong>
            com <?php echo number_format($maiorNota, 2, ',', '.'); ?>.
        </p>

        <a href="index.html">Cadastrar novamente</a>
    </main>
</body>

</html>