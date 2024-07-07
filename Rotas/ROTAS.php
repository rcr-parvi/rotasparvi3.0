<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ROTA</title>
    <link rel="stylesheet" href="ROTAS.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <a href="../index.html" class="back-button">Voltar</a>
            <img src="logo parvi.png" alt="Grupo Parvi">
            <h1>ROTA AQUI</h1>
        </div>
    </div>
    <div class="content">
        <?php
        $file = fopen("TS02_1.csv", "r");
        $data = [];
        // Ler cabeçalho do CSV
        $header = fgetcsv($file);

        while (($row = fgetcsv($file)) !== FALSE) {
            $data[] = $row;
        }
        fclose($file);

        for ($i = 0; $i < 11; $i++) {
            echo '<div class="table-container">';
            echo '<div class="table-box">';
            echo '<table>';
            echo '<thead>';
            echo '<tr>';
            echo '<th>ID</th>';
            echo '<th>Bairros</th>';
            echo '<th>Pontos de Embarque</th>';
            echo '<th>07x19hs</th>';
            echo '<th>19x07hs</th>';
            echo '<th>Link do Mapa</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            foreach ($data as $row) {
                echo '<tr>';
                echo '<td>' . $row[0] . '</td>';
                echo '<td>' . $row[1] . '</td>';
                echo '<td>' . $row[2] . '</td>';
                echo '<td>' . $row[3] . '</td>';
                echo '<td>' . $row[4] . '</td>';
                echo '<td>' . $row[5] . '</td>';
                echo '</tr>';
            }
            echo '</tbody>';
            echo '</table>';
            echo '</div>';
            echo '</div>';
        }
        ?>
    </div>
</body>
</html>
