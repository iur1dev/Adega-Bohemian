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

<body class="bg-dark text-white">

    <nav class="navbar">
        <div class="container-fluid">
            <img src="img/logo.jpg" onclick="location.href='principal.php'" class="rounded" alt="logo adega bohemian" width="80px">
            <span onclick="location.href='registrar.php'" class="fw-bold fs-4"><i class="fa-solid fa-sack-dollar"></i> Registrar</span>
            <span onclick="location.href='estoque.php'" class="fw-bold fs-4"><i class="fa-solid fa-arrow-trend-up"></i> Estoque</span>
        </div>
    </nav>

    <main>
        <div class="container">
            <div class="row espacao">
                <input class="col-auto btn btn-light mx-auto mt-2" type="date">
                <input class="col-auto btn btn-light mx-auto mt-2" type="date">
            </div>
            <table class="table table-hover table-dark espacinho">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Qnt</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Mark</td>
                        <td>Mark</td>
                        <td>Otto</td>
                    </tr>
                </tbody>
            </table>
            <div class="text-center espacinho">
                <div class="row">
                    <label for="formGroupExampleInput5" class="form-label text-center fw-bold">Valor Final :</label>
                    <input type="number" class="btn btn-light mx-auto" id="formGroupExampleInput5" style="width: 100px;" readonly>
                </div>
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