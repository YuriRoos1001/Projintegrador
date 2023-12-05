<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="livro.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Baskervville&family=Inter:wght@300&family=Lexend+Zetta:wght@300&display=swap');
    </style> 
    <title>Página do Livro</title>
</head>
<body>
    <header>
        <button type="button" id="menu"><img src="menuButton.png"></button>
        <div id="pesquisar">
            <input type="text" id="textoP" placeholder="PESQUISAR">
            <button type="button" id="botaoP"><img id="imgP" src="pesquisaButton.png"></button>
        </div>
        <button type="button" id="login"> <img src="contaButton.png"></button>
    </header>
    <main>
        <?php
            require_once("conecta.php");

            // verifica se a conexao com o banco de dados foi bem sucedida
            if ($conn) {
                // consulta  a ser executada
                $sql = "SELECT livros.id, titulo, resumo, editora, autor, lançamento, paginas, capa, fundo FROM livros";

                // resultado da consulta executada
                $registros = mysqli_query($conn, $sql);

                // mysqli_num_rows conta quantas linhas a consulta retornou
                if (mysqli_num_rows($registros) > 0 ) {
                    // tem dados para mostrar...
                    // criando a tabela para mostrar os dados
                    echo("<div id='infoLivro'>");
                        echo("<div id='imagem'>");
                            echo("<img src='$registro[capa]' alt=''>");
                        echo("</div>");
                        echo("<div id='informacoes'>");
                            echo("<div id='resumo'>");
                                echo("<p>$registro[resumo]</p>");
                            echo("</div>");
                            echo("<div id='dados'>");
                                echo("<h3>Título: $registro[titulo]</h3>");
                                echo("<h3>Editora: $registro[editora]</h3>");
                                echo("<h3>Autores(as): $registro[autor]</h3>");
                                echo("<h3>Categorias: </h3>");
                                echo("<h3>Lançamento: $registro[lançamento]</h3>");
                                echo("<h3>Páginas: $registro[paginas]</h3>");
                            echo("</div>");
                        echo("</div>");
                    echo("</div>");
                    
                    mysqli_close($conn);
                } else {
                    echo ("Não há nenhuma informação para ser exibida");
                }
    
            } else {
                die("Houve um erro ao conectar com o banco de dados <br>" . mysqli_connect_error() );
            }
        ?>
        
    </main>
</body>
</html>



