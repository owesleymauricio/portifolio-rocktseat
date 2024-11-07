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
            border: 2px solid red;
            min-height: 100vh;
            box-sizing: border-box;
            font-family: 'Courier New', Courier, monospace;
            background-color: #1C1C1C;
            color: white;
        }

        .principal-content {
            display: flex;
            height: 682px;
            justify-content: center;
            align-items: center;
            position: relative;
            background-image: url('assets/foto-header.png');

            background-size: cover; /* Ajusta a imagem para caber dentro do container sem distorcer */
            background-position: center;
            overflow: hidden;
            z-index: 1; /* Certifica-se de que o conteúdo está abaixo */
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.9);
            /* Ajuste a cor e a opacidade do overlay */
            z-index: 0;
            /* Coloca o overlay atrás do conteúdo */
        }


        .secundary-content {
            width: 1040px;
            height: 434px;
            z-index: 2;
        }

        .third-content {
            width: 680px;
            height: 327px;
        }

        .image {
            display: flex;
            justify-content: center;
            margin-bottom: 30px;

        }

        .image img {
            width: 120px;
            height: 120px;
            border-radius: 50px;
        }

        .desc {
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
            height: 159px;
        }

        .icons {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
            font-size: 25px;
        }

        .header,
        .section,
        .footer {
            border: 2px solid red;
            padding: 20px;
        }

        .section {
            height: 921px;
        }

        .footer {
            height: 787px;
        }
    </style>
</head>

<body>
    <div class="container-xxl">
        <!-- Header -->
        <header class="container principal-content">
            
            <div class="overlay"></div> <!-- Filtro opaco adicionado -->
            <div class="secundary-content">
                <div class="container third-content">
                    <div class="image">
                        <img src="assets/goku.png" alt="goku-foto">
                    </div>
                    <div class="desc">
                        <div>
                            <p>Oi , eu sou goku , sou um </p>
                            <h1>Desenvolvedor PHP</h1>
                        </div>
                        <div>
                            <p>Transformo necessidades em aplicações reais, evolventes e funcionais.
                                Desenvolvo sistemas através da minha paixão pela tecnologia, contribuindo com soluções
                                inovadoras e eficazes para desafios complexos.</p>
                        </div>
                    </div>
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
        <section class="container section">
            <div class="row">
                <div class="col-12 col-md-6">
                    <p>Conteúdo da coluna 1</p>
                </div>
                <div class="col-12 col-md-6">
                    <p>Conteúdo da coluna 2</p>
                </div>
            </div>
        </section>
        <!-- Fim Section -->

        <!-- Footer -->
        <footer class="container footer">
            <p class="text-center m-0">Rodapé</p>
        </footer>
        <!-- Fim Footer -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>