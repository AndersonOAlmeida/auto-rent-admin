<?php
$pageName = "Cadastro";

include('src/components/head.php');
?>
</head>

<body class="bg-primary">
    <div>
        <div class="justify-content-between align-items-center w-100 h-100">
            <div class="h-100 bg-light d-flex justify-content-center align-items-center">
                <div class="d-flex flex-column rounded shadow p-5">
                    <h2 class="text-center">Cadastre-se no <?= $siteName ?>!</h2>
                    <form action="cadastro_script.php" method="POST" class="form d-flex flex-column align-items-start justify-content-center">
                        <label for="nome">Nome: *</label>
                        <input class="w-100" type="text" id="email" name="email" value="" />

                        <label for="email">E-mail:</label>
                        <input class="w-100" type="email" id="email" name="email" value="" />

                        <label for="senha">Senha:</label>
                        <input class="w-100" type="password" id="senha" name="senha" value="" />

                        <label for="role">Nível de Acesso: *</label>
                        <div class="d-flex">
                            <input type="radio" id="role" name="role" value="adm"> Administrador
                        </div>
                        <div class="d-flex">
                            <input type="radio" id="role" name="role" value="func"> Funcionário
                        </div>

                        <input type="hidden" id="date" name="date" value="">

                        <input type="submit" class="btn btn-primary m-3 align-self-center">
                        <a class="align-self-center" href="<?= $url ?>esqueceu-senha" title="Esqueceu a senha?">Esqueceu a senha?</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>