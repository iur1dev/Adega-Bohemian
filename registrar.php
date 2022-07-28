<!-- ᕦ( ͡° ͜ʖ ͡°)ᕤ -->
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/logo.jpg" type="image/x-icon">
    <title>Bohemian</title>
    <meta name="author" content="yuR1dev">
    <meta name="description" content="sistema da adega bohemian">
    <meta name="keywords" content="adega, bohemian">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-dark">

    <nav class="navbar">
        <div class="container-fluid">
            <img src="img/logo.jpg" onclick="location.href='principal.php'" class="rounded" alt="logo adega bohemian" width="80px">
            <span onclick="location.href='relatorios.php'" class="fw-bold fs-4 text-light text-decoration-none"><i class="fa-solid fa-copy"></i> Relatórios</span>
            <span onclick="location.href='estoque.php'" class="fw-bold fs-4 text-light text-decoration-none"><i class="fa-solid fa-arrow-trend-up"></i> Estoque</span>
        </div>
    </nav>

    <main>
        <div class="container espacao">
            <div class="col-lg-6 mx-auto text-center">
                <button id="chamar_cerveja" class="btn btn-light fw-bold m-1">Cerveja</button>
                <button id="chamar_copao" class="btn btn-light fw-bold m-1">Copão</button>
                <button id="chamar_refrigerante" class="btn btn-light fw-bold m-1">Refrigerante</button>
                <button id="chamar_combo" class="btn btn-light fw-bold m-1">Combo</button>
                <button id="chamar_outros" class="btn btn-light fw-bold m-1">Outros</button>
            </div>
            <div class="col-md-6 mx-auto">
                <table class="table text-light espacinho table-hover table-dark">
                    <thead>
                        <tr>
                            <th class="col-4">Nome</th>
                            <th class="col-4 text-center">Quantidade</th>
                            <th class="col-4 text-end">Valor</th>
                        </tr>
                    </thead>
                    <tbody id="receba_registro">
                    </tbody>
                </table>
            </div>
            <div class="text-center espacinho">
                <button class="btn btn-primary btn-lg mt-4 fw-bold" id="enviar">Enviar</button>
            </div>
        </div>
    </main>

    <footer>
        <p class="fixed-bottom text-light fw-bold ms-2">By yuR1dev</p>
    </footer>

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/registrar.js"></script>
    <script src="js/jquery.mask.js"></script>
    <script src="js/mask.js"></script>

</body>

</html>