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
    <title>Quitanda Online :: Cadastro</title>
</head>

<body style="min-width:372px;">
    <div class="d-flex flex-column wrapper">
        <nav class="navbar navbar-expand-lg navbar-dark bg-danger border-bottom shadow-sm mb-3">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <strong>Quitanda Online</strong>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target=".navbar-collapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav flex-grow-1">
                        <li class="nav-item">
                            <a href="/index.html" class="nav-link text-white">Principal</a>
                        </li>
                        <li class="nav-item">
                            <a href="/contato.html" class="nav-link text-white">Contato</a>
                        </li>
                    </ul>
                    <div class="align-self-end">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="/cadastro.html" class="nav-link text-white">Quero Me Cadastrar</a>
                            </li>
                            <li class="nav-item">
                                <a href="/login.html" class="nav-link text-white">Entrar</a>
                            </li>
                            <li class="nav-item">
                                <span class="badge rounded-pill bg-light text-danger position-absolute ms-4 mt-0"
                                    title="5 produto(s) no carrinho"><small>5</small></span>
                                <a href="/carrinho.html" class="nav-link text-white">
                                    <svg class="bi" width="24" height="24" fill="currentColor">
                                        <use xlink:href="/bi.svg#cart3" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <main class="flex-fill">
            <div class="container">
                <h1>Informe seus dados, por favor</h1>
                <hr>
                <form class="mt-3">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <fieldset class="row gx-3">
                                <legend>Dados Pessoais</legend>
                                <div class="form-floating mb-3">
                                    <input class="form-control" type="text" id="txtNome" placeholder=" " autofocus />
                                    <label for="txtNome">Nome</label>
                                </div>
                                <div class="form-floating mb-3 col-md-6 col-xl-4">
                                    <input class="form-control" type="text" id="txtCPF" placeholder=" " />
                                    <label for="txtCPF">CPF</label>
                                </div>
                                <div class="form-floating mb-3 col-md-6 col-xl-4">
                                    <input class="form-control" type="date" id="txtDataNascimento" placeholder=" " />
                                    <label for="txtDataNascimento" class="d-inline d-sm-none d-md-inline d-lg-none">Data
                                        Nascimento</label>
                                    <label for="txtDataNascimento" class="d-none d-sm-inline d-md-none d-lg-inline">Data
                                        de Nascimento</label>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>Contatos</legend>
                                <div class="form-floating mb-3 col-md-8">
                                    <input class="form-control" type="email" id="txtEmail" placeholder=" " />
                                    <label for="txtEmail">E-mail</label>
                                </div>
                                <div class="form-floating mb-3 col-md-6">
                                    <input class="form-control" placeholder=" " type="text" id="txtTelefone" />
                                    <label for="txtTelefone">Telefone</label>
                                </div>
                            </fieldset>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <fieldset class="row gx-3">
                                <legend>Endereço</legend>
                                <div class="form-floating mb-3 col-md-6 col-lg-4">
                                    <input class="form-control" type="text" id="txtCEP" placeholder=" " />
                                    <label for="txtCEP">CEP</label>
                                </div>
                                <div class="mb-3 col-md-6 col-lg-8 align-self-end">
                                    <textarea class="form-control text-muted bg-light"
                                        style="height: 58px; font-size: 14px;"
                                        disabled>Digite o CEP para buscarmos o endereço.</textarea>
                                </div>
                                <div class="clearfix"></div>
                                <div class="form-floating mb-3 col-md-4">
                                    <input class="form-control" type="text" id="txtNumero" placeholder=" " />
                                    <label for="txtNumero">Número</label>
                                </div>
                                
                                <div class="form-floating mb-3">
                                    <input class="form-control" type="text" id="txtReferencia" placeholder=" " />
                                    <label for="txtReferencia">Referência</label>
                                </div>
                            </fieldset>
                            <fieldset class="row gx-3">
                                <legend>Senha de Acesso</legend>
                                <div class="form-floating mb-3 col-lg-6">
                                    <input class="form-control" type="password" id="txtSenha" placeholder=" " />
                                    <label for="txtSenha">Senha</label>
                                </div>
                                <div class="form-floating mb-3 col-lg-6">
                                    <input class="form-control" id="txtConfirmacaoSenha" placeholder=" " />
                                    <label class="form-label" for="txtConfirmacaoSenha">Confirmação da Senha</label>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                    <hr />
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Desejo receber informações sobre promoções.
                        </label>
                    </div>
                    <div class="mb-3 text-left">
                        <a class="btn btn-lg btn-light btn-outline-danger" href="/">Cancelar</a>
                        <input type="button" value="Criar meu cadastro" class="btn btn-lg btn-danger"
                            onclick="window.location.href='/confirmarcadastro.html'" />
                    </div>
                </form>
            </div>
        </main>

        <footer class="border-top text-muted bg-light">
            <div class="container">
                <div class="row py-3">
                    <div class="col-12 col-md-4 text-center text-md-left">
                        &copy; 2020 - Quitanda Online Ltda ME<br>
                        Rua Virtual Inexistente, 171, Compulândia/PC <br>
                        CPNJ 99.999.999/0001-99
                    </div>
                    <div class="col-12 col-md-4 text-center">
                        <a href="/privacidade.html" class="text-decoration-none text-dark">Política de
                            Privacidade</a><br>
                        <a href="/termos.html" class="text-decoration-none text-dark">Termos de Uso</a><br>
                        <a href="/quemsomos.html" class="text-decoration-none text-dark">Quem Somos</a><br>
                        <a href="/trocas.html" class="text-decoration-none text-dark">Trocas e Devoluções</a>
                    </div>
                    <div class="col-12 col-md-4 text-center text-md-right">
                        <a href="/contato.html" class="text-decoration-none text-dark">Contato pelo site</a><br>
                        E-mail: <a href="mailto:email@dominio.com"
                            class="text-decoration-none text-dark">email@dominio.com</a><br>
                        Telefone: <a href="phone:28999990000" class="text-decoration-none text-dark">(28) 99999-0000</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="/node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
</body>

</html>