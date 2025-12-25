<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/custom.css">
    <title>Finax</title>
</head>

<body>
    <div class="d-flex w-100 container-login">
        <div id="bg-img" class="banner-login">

        </div>
        <div class="form-login d-flex flex-column">
            <div class="h-25 text-center">
                <img id="img-logo" src="./assets/img/logo-blue.png" />
            </div>
            <form method="post" class="d-flex flex-column align-items-center gap-4">
                <input placeholder="Email" class="mb-2 w-75 form-control" type="email" id="email" name="nome" />
                <input placeholder="Senha" class="mb-2 w-75 form-control" type="password" id="pass" name="email" />
                <div class="w-75 d-flex justify-content-between">
                    <button type="button" class="btn btn-primary"><span class="me-2"><i class="fab fa-google"></i></span><span class="mx-3">Login com o Google</span></button>
                    <button class="btn btn-primary" type="button" id="btn_gravar">Entrar</button>
                </div>
            </form>
            <div class="copyright" style="text-align:center; font-size:0.85rem; color:#9CA3AF;">
                © 2025 <a href="#" style="color:#4F83FF; text-decoration:none;">CyberTech</a>.
                Todos os direitos reservados.
            </div>

        </div>
    </div>

    <div id="resposta"></div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="./assets/js/main.js"></script>
</body>

</html>