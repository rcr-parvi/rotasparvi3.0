<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rotas Carajás</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="logo-box">
            <img src="logo-parvi.png" alt="Logo da Empresa">
        </div>
        <h1>ROTAS CARAJÁS</h1>
        <nav>
            <ul>
                <li><a href="#">Contato</a></li>
            </ul>
        </nav>
    </header>

    <div class="search-box">
        <form action="search.php" method="get">
            <input type="text" name="query" placeholder="Pesquisar rotas...">
            <button type="submit">Pesquisar</button>
        </form>
    </div>

    <main>
        <section id="botoes">
            <h2>Rotas TCs</h2>
            <div class="botoes-container">
                <?php
                $tc_rotas = [
                    "TC-03", "TC-04", "TC-05", "TC-06", "TC-07", "TC-08", "TC-09", "TC-10", "TC-11", 
                    "TC-12", "TC-13", "TC-14", "TC-15", "TC-16", "TC-17", "TC-18", "TC-19", "TC-20", 
                    "TC-21", "TC-22", "TC-23", "TC-24", "TC-25", "TC-29", "TC-30", "TC-31", "TC-33", 
                    "TC-34"
                ];
                foreach ($tc_rotas as $rota) {
                    $href = ($rota === "TC-03") ? "tc03/tc03.html" : "#";
                    echo "<a href='$href'><button>$rota</button></a>";
                }
                ?>
            </div>
        </section>
        
        <section id="minas-n5">
            <h2>Rotas minas de N5</h2>
            <div class="botoes-container">
                <?php
                $n5_rotas = ["N5-01", "N5-02", "N5-03", "N5-05", "N5-06"];
                foreach ($n5_rotas as $rota) {
                    echo "<a href='#'><button>$rota</button></a>";
                }
                ?>
            </div>
        </section>
        
        <section id="minas-n4">
            <h2>Rotas minas de N4</h2>
            <div class="botoes-container">
                <?php
                $n4_rotas = ["N4-01", "N4-04", "N4-05", "N4-06", "N4-07", "N4-08"];
                foreach ($n4_rotas as $rota) {
                    echo "<a href='#'><button>$rota</button></a>";
                }
                ?>
            </div>
        </section>
        
        <section id="tsl">
            <h2>Rotas TSLs</h2>
            <div class="botoes-container">
                <?php
                $tsl_rotas = ["TSL-01", "TSL-02", "TSL-03", "TSL-04", "TSL-05", "TSL-06"];
                foreach ($tsl_rotas as $rota) {
                    echo "<a href='#'><button>$rota</button></a>";
                }
                ?>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 RCR. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
