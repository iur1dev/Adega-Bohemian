<!-- ( ͡° ͜ʖ ͡°) -->
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
        </div>
    </nav>

    <main>
        <div class="container">
            <div class="row text-center">
                <button class="btn btn-light fw-bold fs-1 col-8 mx-auto espacao" onclick="location.href='registrar.php'"><i class="fa-solid fa-sack-dollar"></i> Registrar</button>
                <button class="btn btn-light fw-bold fs-1 col-8 mx-auto espacao" onclick="location.href='relatorios.php'"><i class="fa-solid fa-copy"></i> Relatórios</button>
                <button class="btn btn-light fw-bold fs-1 col-8 mx-auto espacao" onclick="location.href='estoque.php'"><i class="fa-solid fa-arrow-trend-up"></i> Estoque</button>
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