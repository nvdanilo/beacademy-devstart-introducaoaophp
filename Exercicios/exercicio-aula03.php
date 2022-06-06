<!-- Criar uma tabela no HTML e preencher ela com dados que vem do PHP -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<h1>Playlist de Músicas</h1>
<body class="container pt-5">

<table class="table table-hover table-striped">
    <thead class="table-dark">
        <tr>
            <th>Artista</th>
            <th>Música</th>
            <th>Álbum</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $musicas = [
                "Muse;Hysteria;Absolution",
                "Red Hot Chili Peppers;Dark Necessities;The Getaway",
                "Gorillaz;Feel Good Inc.;Demon Days",
            ];
            foreach ($musicas as $cadaMusica) {
                $colunas = explode(";", $cadaMusica);
                echo "<tr>";
                    foreach ($colunas as $cadaColuna) {
                        echo "<td>{$cadaColuna}</td>";
                    }
                echo "</tr>";
            }
        ?>
    </tbody>

</table>

</body>