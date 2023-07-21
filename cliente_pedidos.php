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
        <title>Galeria Ninuxe :: Área do Cliente :: Pedidos</title>
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
                                    <a href="cliente_pedidos.php" class="nav-link text-white">Logado como
                                        <b>Administrador</b>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="login.php" class="nav-link text-white">Sair</a>
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
                    <h1>Minha Conta</h1>
                    <div class="row gx-3">
                        <div class="col-4">
                            <div class="list-group">
                                <a href="cliente_dados.php" class="list-group-item list-group-item-action">
                                    <i class="bi-person fs-6"></i> Dados Pessoais
                                </a>
                                <a href="cliente_contatos.php" class="list-group-item list-group-item-action">
                                    <i class="bi-mailbox fs-6"></i> Contatos
                                </a>
                                <a href="cliente_endereco.php" class="list-group-item list-group-item-action">
                                    <i class="bi-house-door fs-6"></i> Endereço
                                </a>
                                <a href="cliente_pedidos.php"
                                    class="list-group-item list-group-item-action bg-danger text-light">
                                    <i class="bi-truck fs-6"></i> Pedidos
                                </a>
                                <a href="cliente_favoritos.php" class="list-group-item list-group-item-action">
                                    <i class="bi-heart fs-6"></i> Favoritos
                                </a>
                                <a href="cliente_senha.php" class="list-group-item list-group-item-action">
                                    <i class="bi-lock fs-6"></i> Alterar Senha
                                </a>
                                <a href="index.php" class="list-group-item list-group-item-action">
                                    <i class="bi-door-open fs-6"></i> Sair
                                </a>
                            </div>
                        </div>
                        <div class="col-8">
                            <form class="row mb-3">
                                <div class="col-12 col-md-6 mb-3">
                                    <div class="form-floating">
                                        <select class="form-select">
                                            <option value="30">Últimos 30 dias</option>
                                            <option value="60">Últimos 60 dias</option>
                                            <option value="90">Últimos 90 dias</option>
                                            <option value="180">Últimos 180 dias</option>
                                            <option value="360" selected>Últimos 360 dias</option>
                                            <option value="9999">Todo o período</option>
                                        </select>
                                        <label>Período</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select">
                                            <option value="1" selected>Mais novos primeiro</option>
                                            <option value="2">Mais antigos primeiro</option>
                                        </select>
                                        <label>Ordenação</label>
                                    </div>
                                </div>
                            </form>
                            <div class="accordion" id="divPedidos">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#pedido000010">
                                            <b>Pedido 000010</b>
                                            <span class="mx-1">(realizado em 11/10/2020)</span>
                                        </button>
                                    </h2>
                                    <div id="pedido000010" class="accordion-collapse collapse" data-bs-parent="#divPedidos">
                                        <div class="accordion-body">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Produto</th>
                                                        <th class="text-end">R$ Unit.</th>
                                                        <th class="text-center">Qtde.</th>
                                                        <th class="text-end">Subtotal</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Abacate Manteiga</td>
                                                        <td class="text-end">2,99</td>
                                                        <td class="text-center">3</td>
                                                        <td class="text-end">8,97</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Banana Prata</td>
                                                        <td class="text-end">2,99</td>
                                                        <td class="text-center">3</td>
                                                        <td class="text-end">8,97</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Mamão Papaya</td>
                                                        <td class="text-end">2,99</td>
                                                        <td class="text-center">3</td>
                                                        <td class="text-end">8,97</td>
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th class="text-end" colspan="3">Valor dos Produtos:</th>
                                                        <td class="text-end">26,91</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-end" colspan="3">Valor do Frete:</th>
                                                        <td class="text-end">7,50</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-end" colspan="3">Valor a Pagar:</th>
                                                        <td class="text-end">34,41</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-end" colspan="3">Forma de Pagamento:</th>
                                                        <td class="text-end">Crédito VISA 1x</td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#pedido000009">
                                            <b>Pedido 000009</b>
                                            <span class="mx-1">(realizado em 11/10/2020)</span>
                                        </button>
                                    </h2>
                                    <div id="pedido000009" class="accordion-collapse collapse" data-bs-parent="#divPedidos">
                                        <div class="accordion-body">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Produto</th>
                                                        <th class="text-end">R$ Unit.</th>
                                                        <th class="text-center">Qtde.</th>
                                                        <th class="text-end">Subtotal</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Abacate Manteiga</td>
                                                        <td class="text-end">2,99</td>
                                                        <td class="text-center">3</td>
                                                        <td class="text-end">8,97</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Banana Prata</td>
                                                        <td class="text-end">2,99</td>
                                                        <td class="text-center">3</td>
                                                        <td class="text-end">8,97</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Mamão Papaya</td>
                                                        <td class="text-end">2,99</td>
                                                        <td class="text-center">3</td>
                                                        <td class="text-end">8,97</td>
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th class="text-end" colspan="3">Valor dos Produtos:</th>
                                                        <td class="text-end">26,91</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-end" colspan="3">Valor do Frete:</th>
                                                        <td class="text-end">7,50</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-end" colspan="3">Valor a Pagar:</th>
                                                        <td class="text-end">34,41</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-end" colspan="3">Forma de Pagamento:</th>
                                                        <td class="text-end">Crédito VISA 1x</td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#pedido000008">
                                            <b>Pedido 000008</b>
                                            <span class="mx-1">(realizado em 11/10/2020)</span>
                                        </button>
                                    </h2>
                                    <div id="pedido000008" class="accordion-collapse collapse" data-bs-parent="#divPedidos">
                                        <div class="accordion-body">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Produto</th>
                                                        <th class="text-end">R$ Unit.</th>
                                                        <th class="text-center">Qtde.</th>
                                                        <th class="text-end">Subtotal</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Abacate Manteiga</td>
                                                        <td class="text-end">2,99</td>
                                                        <td class="text-center">3</td>
                                                        <td class="text-end">8,97</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Banana Prata</td>
                                                        <td class="text-end">2,99</td>
                                                        <td class="text-center">3</td>
                                                        <td class="text-end">8,97</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Mamão Papaya</td>
                                                        <td class="text-end">2,99</td>
                                                        <td class="text-center">3</td>
                                                        <td class="text-end">8,97</td>
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th class="text-end" colspan="3">Valor dos Produtos:</th>
                                                        <td class="text-end">26,91</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-end" colspan="3">Valor do Frete:</th>
                                                        <td class="text-end">7,50</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-end" colspan="3">Valor a Pagar:</th>
                                                        <td class="text-end">34,41</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-end" colspan="3">Forma de Pagamento:</th>
                                                        <td class="text-end">Crédito VISA 1x</td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#pedido000007">
                                            <b>Pedido 000007</b>
                                            <span class="mx-1">(realizado em 11/10/2020)</span>
                                        </button>
                                    </h2>
                                    <div id="pedido000007" class="accordion-collapse collapse" data-bs-parent="#divPedidos">
                                        <div class="accordion-body">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Produto</th>
                                                        <th class="text-end">R$ Unit.</th>
                                                        <th class="text-center">Qtde.</th>
                                                        <th class="text-end">Subtotal</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Abacate Manteiga</td>
                                                        <td class="text-end">2,99</td>
                                                        <td class="text-center">3</td>
                                                        <td class="text-end">8,97</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Banana Prata</td>
                                                        <td class="text-end">2,99</td>
                                                        <td class="text-center">3</td>
                                                        <td class="text-end">8,97</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Mamão Papaya</td>
                                                        <td class="text-end">2,99</td>
                                                        <td class="text-center">3</td>
                                                        <td class="text-end">8,97</td>
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th class="text-end" colspan="3">Valor dos Produtos:</th>
                                                        <td class="text-end">26,91</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-end" colspan="3">Valor do Frete:</th>
                                                        <td class="text-end">7,50</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-end" colspan="3">Valor a Pagar:</th>
                                                        <td class="text-end">34,41</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-end" colspan="3">Forma de Pagamento:</th>
                                                        <td class="text-end">Crédito VISA 1x</td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#pedido000006">
                                            <b>Pedido 000006</b>
                                            <span class="mx-1">(realizado em 11/10/2020)</span>
                                        </button>
                                    </h2>
                                    <div id="pedido000006" class="accordion-collapse collapse" data-bs-parent="#divPedidos">
                                        <div class="accordion-body">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Produto</th>
                                                        <th class="text-end">R$ Unit.</th>
                                                        <th class="text-center">Qtde.</th>
                                                        <th class="text-end">Subtotal</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Abacate Manteiga</td>
                                                        <td class="text-end">2,99</td>
                                                        <td class="text-center">3</td>
                                                        <td class="text-end">8,97</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Banana Prata</td>
                                                        <td class="text-end">2,99</td>
                                                        <td class="text-center">3</td>
                                                        <td class="text-end">8,97</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Mamão Papaya</td>
                                                        <td class="text-end">2,99</td>
                                                        <td class="text-center">3</td>
                                                        <td class="text-end">8,97</td>
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th class="text-end" colspan="3">Valor dos Produtos:</th>
                                                        <td class="text-end">26,91</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-end" colspan="3">Valor do Frete:</th>
                                                        <td class="text-end">7,50</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-end" colspan="3">Valor a Pagar:</th>
                                                        <td class="text-end">34,41</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-end" colspan="3">Forma de Pagamento:</th>
                                                        <td class="text-end">Crédito VISA 1x</td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
        <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
