<?php
include("conn.php");
// select categoria
$sql = "SELECT * FROM categoria;";
$tabela = mysqli_query($conn, $sql);
?>
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

<body class="bg-dark" onload="att()">

    <nav class="navbar">
        <div class="container-fluid">
            <img src="img/logo.jpg" onclick="location.href='principal.php'" class="rounded" alt="logo bohemian" width="80px">
            <span onclick="location.href='registrar.php'" class="fw-bold fs-4 text-light"><i class="fa-solid fa-sack-dollar"></i> Registrar</span>
            <span onclick="location.href='relatorios.php'" class="fw-bold fs-4 text-light"><i class="fa-solid fa-copy"></i> Relatórios</span>
        </div>
    </nav>

    <main>
        <div class="container espacao">
            <div class="row mt-5">
                <div class="col-lg-3"></div>
                <input class="btn btn-light col-6 mx-auto col-lg-3" type="text" placeholder="Nome" id="nome">
                <input class="btn btn-light money col-3 mx-auto col-lg-1" type="text" placeholder="Valor" id="valor">
                <input class="btn btn-light col-2 mx-auto col-lg-1" type="text" placeholder="Qnt" id="qnt">
                <div class="col-lg-3"></div>
                <div class="col-12 col-lg-6 mx-auto">
                    <select class="form-select mt-4" name="categ" id="categ">
                        <option selected></option>
                        <!-- select categoria -->
                        <?php while ($linha = mysqli_fetch_assoc($tabela)) { ?>
                            <option value="<?php echo $linha['CATEGORIA_ID']; ?>"><?php echo $linha['NOME']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="row text-center mt-4">
                    <div class="col-lg-3"></div>
                    <button class="btn btn-primary fw-bold col-3 col-lg-1 mx-auto" id="cadastrar">Cadastrar</button>
                    <button class="btn btn-success fw-bold col-3 col-lg-1 mx-auto" type="button" data-bs-toggle="modal" data-bs-target="#atualizar">Atualizar</button>
                    <button class="btn btn-danger fw-bold col-3 col-lg-1 mx-auto" type="button" data-bs-toggle="modal" data-bs-target="#deletar">Deletar</button>
                    <div class="col-lg-3"></div>
                </div>
                <div id="receba"></div>
            </div>
            <table class="table text-light espacinho table-hover table-dark">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Qnt</th>
                    </tr>
                </thead>
                <tbody id="att_sel">
                </tbody>
            </table>
        </div>
    </main>

    <footer>
        <p class="fixed-bottom text-light fw-bold ms-2">By yuR1dev</p>
    </footer>

    <!-- Modal atualizar -->
    <div class="modal fade" id="atualizar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Atualizar</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="reset()"></button>
                </div>
                <div class="modal-body">
                    Deseja mesmo atualizar ???
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal" onclick="reset()">Sair</button>
                    <button type="button" class="btn btn-success" onclick="atualizar()">Atualizar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal deletar -->
    <div class="modal fade" id="deletar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Deletar</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="reset()"></button>
                </div>
                <div class="modal-body">
                    Deseja mesmo deletar ???
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal" onclick="reset()">Sair</button>
                    <button type="button" class="btn btn-danger" onclick="deletar()">Deletar</button>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/estoque.js"></script>
    <script src="js/jquery.mask.js"></script>
    <script src="js/mask.js"></script>

</body>

</html>