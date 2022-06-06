<!-- tabela com nome, preço, descrição e foto de 5 produtos -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<h1>Lista de Produtos #Hortifruti</h1>
<body class="container pt-5">

<table class="table table-hover table-striped">
    <thead class="table-dark">
        <tr>
            <th>Nome</th>
            <th>Preço</th>
            <th>Descrição</th>
            <th>Foto</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Manga</td>
            <td>R$3,82</td>
            <td>Possui vitaminas A, B e C</td>
            <td> <a href="https://upload.wikimedia.org/wikipedia/commons/thumb/4/49/Mango_-_single.jpg/220px-Mango_-_single.jpg" target="#_blank" class="btn btn-success btn-sm">Ver</td>
        </tr>
        <tr>
            <td>Banana</td>
            <td>R$1,75</td>
            <td>Possui vitaminas A, B, C e E</td>
            <td> <a href="https://upload.wikimedia.org/wikipedia/commons/thumb/a/af/Bananas_%28Alabama_Extension%29.jpg/280px-Bananas_%28Alabama_Extension%29.jpg" target="#_blank" class="btn btn-success btn-sm">Ver</td>
        </tr>
        <tr>
            <td>Uva</td>
            <td>R$1,31</td>
            <td>Possui vitaminas B, C, E e K</td>
            <td> <a href="https://upload.wikimedia.org/wikipedia/commons/thumb/7/76/Riesling_grapes_leaves.jpg/280px-Riesling_grapes_leaves.jpg" target="#_blank" class="btn btn-success btn-sm">Ver</td>
        </tr>
        <tr>
            <td>Laranja</td>
            <td>R$2,92</td>
            <td>Possui vitaminas A, B e C</td>
            <td> <a href="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e3/Oranges_-_whole-halved-segment.jpg/220px-Oranges_-_whole-halved-segment.jpg" target="#_blank" class="btn btn-success btn-sm">Ver</td>
        </tr>
        <tr>
            <td>Kiwi</td>
            <td>R$9,83</td>
            <td>Possui vitaminas A, B, C e E</td>
            <td> <a href="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b8/Kiwi_%28Actinidia_chinensis%29_1_Luc_Viatour.jpg/280px-Kiwi_%28Actinidia_chinensis%29_1_Luc_Viatour.jpg" target="#_blank" class="btn btn-success btn-sm">Ver</td>
        </tr>
        
<!--    < ?php     
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
        ?> -->
    </tbody>

</table>

</body>