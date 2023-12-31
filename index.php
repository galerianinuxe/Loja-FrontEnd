<?php 
	session_start();
?>
<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-icon-180x180.png">
        <link
            rel="icon"
            type="image/png"
            sizes="192x192"
            href="img/favicon/android-icon-192x192.png"
        >
        <link
            rel="icon"
            type="image/png"
            sizes="32x32"
            href="img/favicon/favicon-32x32.png"
        >
        <link
            rel="icon"
            type="image/png"
            sizes="96x96"
            href="img/favicon/favicon-96x96.png"
        >
        <link
            rel="icon"
            type="image/png"
            sizes="16x16"
            href="img/favicon/favicon-16x16.png"
        >
        <link rel="manifest" href="img/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="img/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">
        <link rel="stylesheet" href="css/estilos.css">
        <title>Galeria Ninuxe :: Página Principal</title>
    </head>
    <body>
    <?php 
	include 'conexao.php';
	?>
        <div class="d-flex flex-column wrapper">
            <!-- MEU NAVBAR -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-danger border-bottom shadow-sm mb-3">
                <div class="container">
                    <a class="navbar-brand" href="">
                        <b>Galeria Ninuxe</b>
                    </a>
                    <button
                        class="navbar-toggler"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target=".navbar-collapse"
                    >
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav flex-grow-1">
                            <li class="nav-item">
                                <a class="nav-link text-white active" href="index.php">Principal</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="contato.php">Contato</a>
                            </li>
                        </ul>
                        <div class="align-self-end">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="cadastro.php" class="nav-link text-white">Quero Me Cadastrar</a>
                                </li>
                                <li class="nav-item">
                                    <a href="login.php" class="nav-link text-white">Entrar</a>
                                </li>
                                <li class="nav-item">
                                    <span class="badge rounded-pill bg-light text-danger position-absolute ms-4 mt-0" title="5 produto(s) no carrinho">
                                        <small>5</small>
                                    </span>
                                    <a href="carrinho.php" class="nav-link text-white">
                                        <i class="bi-cart" style="font-size: 24px;line-height: 24px;"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- FIM DO NAVBAR -->
            <!-- MEU HEADER -->
            <div class="container">
                <div id="carouselMain" class="carousel slide carousel-dark" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button
                            type="button"
                            data-bs-target="#carouselMain"
                            data-bs-slide-to="0"
                            class="active"
                        ></button>
                        <button type="button" data-bs-target="#carouselMain" data-bs-slide-to="1"></button>
                        <button type="button" data-bs-target="#carouselMain" data-bs-slide-to="2"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="3000">
                            <img src="https://via.placeholder.com/1200x320" class="d-none d-md-block w-100" alt="">
                            <img src="https://via.placeholder.com/600x160" class="d-block d-md-none w-100" alt="">
                        </div>
                        <div class="carousel-item" data-bs-interval="3000">
                            <img src="https://via.placeholder.com/1200x320" class="d-none d-md-block w-100" alt="">
                            <img src="https://via.placeholder.com/600x160" class="d-block d-md-none w-100" alt="">
                        </div>
                        <div class="carousel-item" data-bs-interval="3000">
                            <img src="https://via.placeholder.com/1200x320" class="d-none d-md-block w-100" alt="">
                            <img src="https://via.placeholder.com/600x160" class="d-block d-md-none w-100" alt="">
                        </div>
                    </div>
                    <button
                        class="carousel-control-prev"
                        type="button"
                        data-bs-target="#carouselMain"
                        data-bs-slide="prev"
                    >
                        <span class="carousel-control-prev-icon"></span>
                        <span class="visually-hidden">Anterior</span>
                    </button>
                    <button
                        class="carousel-control-next"
                        type="button"
                        data-bs-target="#carouselMain"
                        data-bs-slide="next"
                    >
                        <span class="carousel-control-next-icon"></span>
                        <span class="visually-hidden">Próximo</span>
                    </button>
                </div>
                <hr class="mt-3">
            </div>
            <!-- FIM DO HEADER -->
            <!-- CONTEÚDO PRINCIPAL -->
            <main class="flex-fill">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-5">
                            <form class="justify-content-center justify-content-md-start mb-3 mb-md-0">
                                <div class="input-group input-group-sm">
                                    <input type="text" class="form-control" placeholder="Digite aqui o que procura">
                                    <button class="btn btn-danger">Buscar</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-12 col-md-7">
                            <div class="d-flex flex-row-reverse justify-content-center justify-content-md-start">
                                <form class="d-inline-block">
                                    <select class="form-select form-select-sm">
                                        <option>Ordenar pelo nome</option>
                                        <option>Ordenar pelo menor preço</option>
                                        <option>Ordenar pelo maior preço</option>
                                    </select>
                                </form>
                                <nav class="d-inline-block me-3">
                                    <ul class="pagination pagination-sm my-0">
                                        <li class="page-item">
                                            <a class="page-link disabled" href="#">1</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">2</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">3</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">4</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>

                    <hr class="mt-3">

                    <div class="row g-3">
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                            <div class="card text-center bg-light">
                                <a href="#" class="position-absolute end-0 p-2 text-danger">
                                    <i class="bi-suit-heart" style="font-size:24px;line-height: 24px;"></i>
                                </a>
                                <a href="produto.php">
                                <img src="img/produtos/000001.jpg" class="card-img-top">
                                </a>
                                <div class="card-header">
                                    R$ 4,50
                                </div>
                                <div class="card-body">
                                  <h5 class="card-title">Nome do produto</h5>
                                  <p class="card-text truncar-3l">Descrição do item completo semmuito detalheDescrição do item completo semmuito</p>
                                </div>
                                <div class="card-footer">
                                    <a href="#" class="btn btn-light disabled mt-2 d-block">
                                        <small>Reabastecendo Estoque</small>
                                    </a>
                                    <small class="text-danger"><b>Produto Esgotado</b></small>
                                </div>
                              </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                            <div class="card text-center bg-light">
                                <a href="#" class="position-absolute end-0 p-2 text-danger">
                                    <i class="bi-suit-heart" style="font-size:24px;line-height: 24px;"></i>
                                </a>
                                <a href="produto.php">
                                <img src="img/produtos/000003.jpg" class="card-img-top">
                                </a>
                                <div class="card-header">
                                    R$ 4,50
                                </div>
                                <div class="card-body">
                                  <h5 class="card-title">Nome do produto</h5>
                                  <p class="card-text truncar-3l">Descrição do item completo semmuito detalhe</p>
                                </div>
                                <div class="card-footer">
                                    <a href="carrinho.php" class="btn btn-primary">
                                        Adicionar ao carrinho
                                    </a>
                                    <small class="text-success">32 unid. em estoque</small>
                                </div>
                              </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                            <div class="card text-center bg-light">
                                <a href="#" class="position-absolute end-0 p-2 text-danger">
                                    <i class="bi-suit-heart-fill" style="font-size:24px;line-height: 24px;"></i>
                                </a>
                                <img src="https://via.placeholder.com/300x250" class="card-img-top">
                                <div class="card-header">
                                    R$ 4,50
                                </div>
                                <div class="card-body">
                                  <h5 class="card-title">Nome do produto</h5>
                                  <p class="card-text truncar-3l">Descrição do item completo semmuito detalhe</p>
                                </div>
                                <div class="card-footer">
                                    <a href="carrinho.php" class="btn btn-primary">
                                        Adicionar ao carrinho
                                    </a>
                                    <small class="text-success">32 unid. em estoque</small>
                                </div>
                              </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                            <div class="card text-center bg-light">
                                <a href="#" class="position-absolute end-0 p-2 text-danger">
                                    <i class="bi-suit-heart" style="font-size:24px;line-height: 24px;"></i>
                                </a>
                                <img src="https://via.placeholder.com/300x250" class="card-img-top">
                                <div class="card-header">
                                    R$ 4,50
                                </div>
                                <div class="card-body">
                                  <h5 class="card-title">Nome do produto</h5>
                                  <p class="card-text truncar-3l">Descrição do item completo semmuito detalhe</p>
                                </div>
                                <div class="card-footer">
                                    <a href="carrinho.php" class="btn btn-primary">
                                        Adicionar ao carrinho
                                    </a>
                                    <small class="text-success">32 unid. em estoque</small>
                                </div>
                              </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                            <div class="card text-center bg-light">
                                <a href="#" class="position-absolute end-0 p-2 text-danger">
                                    <i class="bi-suit-heart" style="font-size:24px;line-height: 24px;"></i>
                                </a>
                                <img src="https://via.placeholder.com/300x250" class="card-img-top">
                                <div class="card-header">
                                    R$ 4,50
                                </div>
                                <div class="card-body">
                                  <h5 class="card-title">Nome do produto</h5>
                                  <p class="card-text truncar-3l">Descrição do item completo semmuito detalhe</p>
                                </div>
                                <div class="card-footer">
                                    <a href="carrinho.php" class="btn btn-primary">
                                        Adicionar ao carrinho
                                    </a>
                                    <small class="text-success">32 unid. em estoque</small>
                                </div>
                              </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                            <div class="card text-center bg-light">
                                <a href="#" class="position-absolute end-0 p-2 text-danger">
                                    <i class="bi-suit-heart-fill" style="font-size:24px;line-height: 24px;"></i>
                                </a>
                                <img src="https://via.placeholder.com/300x250" class="card-img-top">
                                <div class="card-header">
                                    R$ 4,50
                                </div>
                                <div class="card-body">
                                  <h5 class="card-title">Nome do produto</h5>
                                  <p class="card-text truncar-3l">Descrição do item completo semmuito detalhe</p>
                                </div>
                                <div class="card-footer">
                                    <a href="carrinho.php" class="btn btn-primary">
                                        Adicionar ao carrinho
                                    </a>
                                    <small class="text-success">32 unid. em estoque</small>
                                </div>
                              </div>
                        </div>
                    </div>

                    <hr class="mt-3 ">
                    <div class="row pb-3">
                        <div class="col-12">
                            <div class="d-flex flex-row-reverse justify-content-center justify-content-md-start">
                                <form class="d-inline-block">
                                    <select class="form-select form-select-sm">
                                        <option>Ordenar pelo nome</option>
                                        <option>Ordenar pelo menor preço</option>
                                        <option>Ordenar pelo maior preço</option>
                                    </select>
                                </form>
                                <nav class="d-inline-block me-3">
                                    <ul class="pagination pagination-sm my-0">
                                        <li class="page-item">
                                            <a class="page-link disabled" href="#">1</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">2</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">3</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">4</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <!-- FIM DO CONTEÚDO -->
            <!-- MEU RODAPÉ -->
            <footer class="border-top text-muted bg-light">
                <div class="container">
                    <div class="row py-3">
                        <div class="col-12 col-md-4 text-center">
                            &copy; 2022 - Galeria Ninuxe Solução Digital Ltda.
                            <br>
                            Rua da loja se necessário, 222 - Nome do Bairro/SP
                            <br>
                            CNPJ: 99.999.999/0001-99
                        </div>
                        <div class="col-12 col-md-4 text-center">
                            <a href="privacidade.php" class="text-decoration-none text-dark">
                                Política de Privacidade
                            </a>
                            <br>
                            <a href="termos.php" class="text-decoration-none text-dark">
                                Termos de Uso
                            </a>
                            <br>
                            <a href="quemsomos.php" class="text-decoration-none text-dark">
                                Quem Somos
                            </a>
                            <br>
                            <a href="trocas.php" class="text-decoration-none text-dark">
                                Trocas e Devoluções
                            </a>
                        </div>
                        <div class="col-12 col-md-4 text-center">
                            <a href="contato.php" class="text-decoration-none text-dark">
                                Contato pelo Site
                            </a>
                            <br>
                            E-mail:
                            <a href="emailto:email@dominio.com" class="text-decoration-none text-dark">
                                E-mailcontato@dominio.com
                            </a>
                            <br>
                            Telefone:
                            <a href="phone:11955554444" class="text-decoration-none text-dark">
                                (00) 95555-4444
                            </a>
                            <br>
                            <a href="trocas.php" class="text-decoration-none text-dark">
                                Trocas e Devoluções
                            </a>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- FIM DO RODAPÉ -->
        </div>
        <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
