<?php
require_once 'src/Aluno.php';
require_once 'src/Treino.php';

$aluno1 = new Aluno("Lauro de Oliveira", "123.456.789-00", "Plano VIP Premium");
$treino1 = new Treino("Hipertrofia A (Peito e Tríceps)", "Musculação", 60);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Academia - Escola SEG</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f9; padding: 20px; text-align: center; }
        .card { background: white; border-radius: 8px; padding: 20px; margin: 15px auto; max-width: 400px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); }
        .status { font-weight: bold; color: green; }
        h1 { color: #333; }
    </style>
</head>
<body>
    <h1>Painel de Gestão da Academia</h1>

    <div class="card">
        <h2>Dados do Aluno</h2>
        <p><strong>Nome:</strong> <?= $aluno1->getNome(); ?></p>
        <p><strong>CPF:</strong> <?= $aluno1->getCpf(); ?></p>
        <p><strong>Plano:</strong> <?= $aluno1->getPlano(); ?></p>
        <p><strong>Status:</strong> <span class="status"><?= $aluno1->isAtivo() ? 'Ativo' : 'Inativo'; ?></span></p>
    </div>

    <div class="card">
        <h2>Ficha de Treino</h2>
        <p><?= $treino1->getDetalhes(); ?></p>
    </div>
</body>
</html>