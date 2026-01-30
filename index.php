<?php

$alunos = [];
$mediaTurmaDisciplinas = [];
$mediaTurmaGeral = 0;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nomes       = $_POST['nome'];
    $notas       = $_POST['notas'];
    $frequencias = $_POST['frequencia'];

    $totalAlunos = count($nomes);

    // Inicializa a soma das disciplinas
    $mediaTurmaDisciplinas = array_fill(0, 5, 0);

    for ($i = 0; $i < $totalAlunos; $i++) {

        $notasAluno = $notas[$i];
        $mediaAluno = array_sum($notasAluno) / count($notasAluno);
        $frequencia = (int) $frequencias[$i];

        // Soma as notas por disciplina para calcular a média da turma
        for ($disciplina = 0; $disciplina < 5; $disciplina++) {
            $mediaTurmaDisciplinas[$disciplina] += $notasAluno[$disciplina];
        }

        $alunos[] = [
            'nome'       => $nomes[$i],
            'media'      => round($mediaAluno, 2),
            'frequencia' => $frequencia
        ];

        $mediaTurmaGeral += $mediaAluno;
    }

    // Média geral da turma
    $mediaTurmaGeral /= $totalAlunos;

    // Média da turma por disciplina
    foreach ($mediaTurmaDisciplinas as $i => $soma) {
        $mediaTurmaDisciplinas[$i] = round($soma / $totalAlunos, 2);
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sistema de Notas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Sistema de Controle de Notas</h1>

<form method="post">

    <?php for ($i = 0; $i < 2; $i++): ?>
        <fieldset>
            <legend>Aluno <?= $i + 1 ?></legend>

            <input type="text" name="nome[]" placeholder="Nome do aluno" required>

            <?php for ($disciplina = 0; $disciplina < 5; $disciplina++): ?>
                <input
                    type="number"
                    name="notas[<?= $i ?>][]"
                    min="0"
                    max="10"
                    step="0.1"
                    placeholder="Nota <?= $disciplina + 1 ?>"
                    required
                >
            <?php endfor; ?>

            <input
                type="number"
                name="frequencia[]"
                min="0"
                max="100"
                placeholder="Frequência (%)"
                required
            >
        </fieldset>
    <?php endfor; ?>

    <button type="submit">Calcular</button>
</form>

<?php if (!empty($alunos)): ?>

    <h2>Resultados</h2>

    <table>
        <tr>
            <th>Aluno</th>
            <th>Média</th>
            <th>Frequência</th>
        </tr>

        <?php foreach ($alunos as $aluno): ?>
            <tr>
                <td><?= htmlspecialchars($aluno['nome']) ?></td>
                <td><?= $aluno['media'] ?></td>
                <td><?= $aluno['frequencia'] ?>%</td>
            </tr>
        <?php endforeach; ?>
    </table>

    <h3>Média da turma por disciplina</h3>
    <ul>
        <?php foreach ($mediaTurmaDisciplinas as $i => $media): ?>
            <li>Disciplina <?= $i + 1 ?>: <?= $media ?></li>
        <?php endforeach; ?>
    </ul>

    <h3>Alunos com média acima da média da turma</h3>
    <?php
        $encontrou = false;
        foreach ($alunos as $aluno) {
            if ($aluno['media'] > $mediaTurmaGeral) {
                echo "<p>{$aluno['nome']}</p>";
                $encontrou = true;
            }
        }
        if (!$encontrou) {
            echo "<br>";
        }
    ?>

    <h3>Alunos com frequência abaixo de 75%</h3>
    <?php
        $encontrou = false;
        foreach ($alunos as $aluno) {
            if ($aluno['frequencia'] < 75) {
                echo "<p>{$aluno['nome']}</p>";
                $encontrou = true;
            }
        }
        if (!$encontrou) {
            echo "<br>";
        }
    ?>

<?php endif; ?>

</body>
</html>
