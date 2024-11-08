<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <title>Portfólio</title>
    <style>
        .container-xxl {
            min-height: 100vh;
            font-family: 'Courier New', Courier, monospace;
            background-color: #1C1C1C;
            color: white;
        }

        .principal-content {
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            height: 100vh;
            background-image: url('assets/foto-header.png');
            background-size: cover;
            background-position: center;
            overflow: hidden;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.9);
        }

        .secundary-content {
            max-width: 90%;
            text-align: center;
            z-index: 2;
        }

        .image img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
        }

        .icons {
            display: flex;
            justify-content: center;
            gap: 20px;
            font-size: 25px;
            margin-top: 15px;
        }

        .section .sgrid .card {
            background-color: #363636;
            border-radius: 8px;
            overflow: hidden;
        }

        .footer .card {
            background-color: #363636;
            color: white;
        }
    </style>
</head>

<body>
    <div class="container-xxl">
        <!-- Header -->
        <header class="container-fluid principal-content">
            <div class="overlay"></div>
            <div class="secundary-content">
                <div class="image mb-4">
                    <img src="assets/goku.png" alt="goku-foto">
                </div>
                <div class="desc mb-4">
                    <p>Oi, eu sou Goku, sou um</p>
                    <h1>Desenvolvedor PHP</h1>
                    <p>Transformo necessidades em aplicações reais, evolventes e funcionais. Desenvolvo sistemas através da minha paixão pela tecnologia, contribuindo com soluções inovadoras e eficazes para desafios complexos.</p>
                </div>
                <div class="icons">
                    <i class="fab fa-html5 fa-2x" title="HTML5"></i>
                    <i class="fab fa-css3-alt fa-2x" title="CSS3"></i>
                    <i class="fab fa-git-alt fa-2x" title="Git"></i>
                    <i class="fab fa-github fa-2x" title="GitHub"></i>
                    <i class="fab fa-php fa-2x" title="PHP"></i>
                </div>
            </div>
        </header>
        <!-- Fim Header -->

        <!-- Section -->

        <?php

        $datas = [
            [
                "title" => "O Senhor dos Aneis",
                "image" => "assets/senhor.png",
                "desc" => "uma pagina de tributos feita a epica historia de O Senhor dos Aneis ",
                "url" => "https://lord-of-rings-sepia.vercel.app/"
            ],
            [
                "title" => "Otica vida",
                "image" => "assets/otica2.png",
                "desc" => "Pagina ficticia de uma loja de oculos, onde site pode ser usado em uma loja verdadeira",
                "url" => "https://otica-com-chakra.vercel.app/"
            ],
            [
                "title" => "O Senhor dos Aneis",
                "image" => "assets/senhor.png",
                "desc" => "uma pagina de tributos feita a epica historia de O Senhor dos Aneis ",
                "url" => "https://lord-of-rings-sepia.vercel.app/"
            ],
            [
                "title" => "Otica vida",
                "image" => "assets/otica2.png",
                "desc" => "Pagina ficticia de uma loja de oculos, onde site pode ser usado em uma loja verdadeira",
                "url" => "https://otica-com-chakra.vercel.app/"
            ]
        ]
        ?>
        <section class="container section mt-5">
            <div class="text-center mb-4">
                <h2>Meus Trabalhos</h2>
                <p>Veja meus trabalhos em destaque</p>
            </div>

            <div class="row g-3 sgrid">
                <?php foreach ($datas as $data): ?>
                    <div class="col-12 col-md-6">
                        <div class="card h-100" style="padding: 10px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="<?php echo $data['image']; ?>" class="img-fluid rounded-start" alt="<?php echo $data['title']; ?>">
                                </div>
                                <div class="col-md-8 d-flex flex-column justify-content-center align-items-center" style="padding: 10px;">
                                    <h4 class="card-title mt-3"><strong><?php echo $data['title']; ?></strong></h4>
                                    <p style="text-align: center;" class="card-text"><?php echo $data['desc']; ?></p>
                                    <a class="btn btn-link mt-auto" href="<?php echo $data['url']; ?>">Ver site</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
        <!-- Fim Section -->

        <!-- Footer -->
        <!-- Footer -->
        <footer class="container footer" style="height: 700px;">
            <div class="container" style="text-align: center; margin-top: 60px;">
                <p style="color: purple;">Contato</p>
                <h5 style="font-size: 25px;">Gostou do meu trabalho?</h5>
                <p>Entre em contato pelas minhas redes sociais</p>
            </div>
            <div class="container" style="width: 370px; gap: 20px; margin-right:auto; margin-left:auto; margin-top: 60px;">
                <a style="text-decoration: none;" href="https://www.linkedin.com/in/owesleymauricio/">
                    <div class="card" style="display:flex; margin-top: 20px; font-size: 25px; align-items:center; justify-content:center; flex-direction:row; background-color: #363636;">
                        <div class="card-body">
                            LinkedIn
                        </div>
                        <i style="margin-right: 10px; color:blue;" class="fab fa-linkedin fa-2x" title="LinkedIn"></i>
                    </div>
                </a>

                <a style="text-decoration: none;" href="https://github.com/owesleymauricio">
                    <div class="card" style="display:flex; margin-top: 20px; font-size: 25px; align-items:center; justify-content:center; flex-direction:row; background-color: #363636;">
                        <div class="card-body">
                            GitHub
                        </div>
                        <i style="margin-right: 10px; color:#1C1C1C;" class="fab fa-github fa-2x" title="GitHub"></i>
                    </div>
                </a>
            </div>
        </footer>
        <!-- Fim Footer -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>