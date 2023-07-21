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
        <title>Galeria Ninuxe :: Detalhes do Produto</title>
    </head>
    <body>
        <div class="d-flex flex-column wrapper">
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

            <main class="flex-fill">
                <div class="container">
                    <div class="row g-3">
                        <div class="col-12 col-sm-6">
                            <img src="img/produtos/000001.jpg" class="img-thumbnail" id="imgProduto">
                            <br class="clearfix">
                            <div class="row my-3 gx-3">
                                <div class="col-3">
                                    <img src="img/produtos/000002.jpg" class="img-thumbnail" onclick="trocarImagem(this)">
                                </div>
                                <div class="col-3">
                                    <img src="img/produtos/000003.jpg" class="img-thumbnail" onclick="trocarImagem(this)">
                                </div>
                                <div class="col-3">
                                    <img src="img/produtos/000004.jpg" class="img-thumbnail" onclick="trocarImagem(this)">
                                </div>
                                <div class="col-3">
                                    <img src="img/produtos/000002.jpg" class="img-thumbnail" onclick="trocarImagem(this)">
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <h1>Banana Prata</h1>
                            <p>
                                Quis officia irure deserunt reprehenderit sunt non ut amet. Sunt veniam cillum aliqua. Elit
                                labore duis laboris reprehenderit laborum magna velit dolor veniam sint.
                            </p>
                            <p>
                                Do ut ad quis et qui qui tempor do irure laborum ullamco excepteur. Adipisicing ipsum ad
                                excepteur sit ipsum adipisicing. Ut ut elit proident fugiat. Ad deserunt et consequat
                                aliquip nisi ut dolore sit ut veniam fugiat culpa nulla. Consequat eiusmod ad deserunt ad
                                sunt adipisicing deserunt nulla est cupidatat commodo do. Minim aliquip dolor in deserunt
                                elit officia. Anim duis ullamco cillum nulla voluptate dolore velit ad Lorem adipisicing.
                            </p>
                            <p>
                                <button class="btn btn-lg btn-danger mb-3 mb-xl-0 me-2">
                                    <i class="bi-cart"></i> Adicionar ao Carrinho
                                </button>
                                <button class="btn btn-lg btn-outline-danger">
                                    <i class="bi-heart"></i> Adicionar aos Favoritos
                                </button>
                            </p>
                        </div>
                    </div>
                </div>
            </main>

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
        </div>
        <script src="/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            function trocarImagem(el) {
                var imgProduto = document.getElementById("imgProduto");
                imgProduto.src = el.src;
            }
        </script>
    </body>
</html>
