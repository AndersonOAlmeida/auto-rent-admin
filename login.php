<?php
$pageName = "Login";

include('src/components/head.php');
?>
</head>

<body class="bg-primary">
    <div>
        <div class="d-flex justify-content-between align-items-center w-100 h-100">
            <div class="w-50 login__page-bg"></div>
            <div class="w-50 w-50 h-100 bg-light d-flex justify-content-center align-items-center">
                <div class="d-flex flex-column rounded shadow p-5">
                    <h2 class="text-center">Bem-vindo ao <?= $siteName ?>!</h2>
                    <h4 class="text-center">Por favor, efetue seu login</h4>
                    <form class="form d-flex flex-column align-items-start justify-content-center">
                        <label for="email">E-mail:</label>
                        <input class="w-100" type="email" id="email" name="email" value="" />
                        <label for="senha">Senha:</label>
                        <input class="w-100" type="password" id="senha" name="senha" value="" />
                        <button type="submit" class="btn btn-primary m-3 align-self-center">Entrar</button>
                        <a class="align-self-center" href="<?= $url ?>esqueceu-senha" title="Esqueceu a senha?">Esqueceu a senha?</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>