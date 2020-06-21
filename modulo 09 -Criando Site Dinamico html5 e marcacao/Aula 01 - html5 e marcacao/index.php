<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Projeto 01</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="html5, php, css">
    <meta name="description" content="Descrição do meu site">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <header>
        <div class="center">
            <div class="logo left">Logomarca</div><!--logo-->
            <nav class="desktop right">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Sobre</a></li>
                    <li><a href="">Serviços</a></li>
                    <li><a href="">Contato</a></li>
                </ul>
            </nav><!--desktop-->
            <nav class="mobile right">
                <div class="botao-menu-mobile">
                <i class="fa fa-bars" aria-hidden="true"></i>
                </div>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Sobre</a></li>
                    <li><a href="">Serviços</a></li>
                    <li><a href="">Contato</a></li>
                </ul>
            </nav><!--mobile-->
        <div class="clear"></div>
        </div><!--center-->
    </header>
    <section class="banner-principal">
    <div class="overlay"></div><!--overlay-->
        <div class="center">
            <form>
                <h2>Qual o seu e-mail</h2>
                <input type="email" name="email" require />
                <input type="submit" name="acao" value="Cadastrar!">
            </form>
        </div><!--center-->
    </section><!--banner-principal-->
    <section class="descricao-autor">
        <div class="center">
            <div class="w50 left">
                <h2>Antonio Carlos De Oliveira</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,</p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,</p>
            </div><!--w50-->
            <div class="w50 left">
                <!--Pegar imagem depois-->
                <img class="right" src="images/img1.jpg" />
            </div><!--w50-->
            <div class="clear"></div><!--clear-->
        </div><!--center-->
    </section><!--descricao-autor-->

    <section class="especialidades">
        <div class="center">
            <h2 class="title">Especialidades</h2>
            <div class="w33 left box-especialidade">
                <h3><i class="fa fa-css3" aria-hidden="true"></i></h3>
                <h4>CSS3</h4>
                <p>O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão. O Lorem Ipsum tem vindo a ser o texto padrão usado por estas indústrias desde o ano de 1500,</p>
            </div><!--box-especialidade-->

            <div class="w33 left box-especialidade">
                <h3><i class="fa fa-html5" aria-hidden="true"></i></h3>
                <h4>HTML5</h4>
                <p>O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão. O Lorem Ipsum tem vindo a ser o texto padrão usado por estas indústrias desde o ano de 1500,</p>
            </div><!--box-especialidade-->

            <div class="w33 left box-especialidade">
                <h3><i class="fa fa-coffee" aria-hidden="true"></i></h3>
                <h4>JavaScript</h4>
                <p>O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão. O Lorem Ipsum tem vindo a ser o texto padrão usado por estas indústrias desde o ano de 1500,</p>
            </div><!--box-especialidade-->
            <div class="clear"></div>
        </div><!--center-->
    </section>
    <section class="extras">
    
        <div class="center">
            <div class="w50 left depoimentos-container">
                <h2 class="title">Depoimentos dos nossos clientes</h2>
                <div class="depoimento-single">
                    <p class="depoimento-descricao">"É um facto estabelecido de que um leitor é distraído pelo conteúdo legível de uma página quando analisa a sua mancha gráfica. Logo, o uso de Lorem Ipsum leva a uma distribuição mais ou menos normal de letras, ao contrário do uso de "Conteúdo aqui, conteúdo aqui", tornando-o texto legível..." </p>
                    <p class="nome-autor">Lorem Ipsum</p>
                </div><!--depoimento-single-->

                <div class="depoimento-single">
                    <p class="depoimento-descricao">"É um facto estabelecido de que um leitor é distraído pelo conteúdo legível de uma página quando analisa a sua mancha gráfica. Logo, o uso de Lorem Ipsum leva a uma distribuição mais ou menos normal de letras, ao contrário do uso de "Conteúdo aqui, conteúdo aqui", tornando-o texto legível..." </p>
                    <p class="nome-autor">Lorem Ipsum</p>
                </div><!--depoimento-single-->
                
                <div class="depoimento-single">
                    <p class="depoimento-descricao">"É um facto estabelecido de que um leitor é distraído pelo conteúdo legível de uma página quando analisa a sua mancha gráfica. Logo, o uso de Lorem Ipsum leva a uma distribuição mais ou menos normal de letras, ao contrário do uso de "Conteúdo aqui, conteúdo aqui", tornando-o texto legível..." </p>
                    <p class="nome-autor">Lorem Ipsum</p>
                </div><!--depoimento-single-->
            </div><!--w50-->
            <div class="w50 left servicos-container">
                <h2 class="title">Serviços</h2>
                <div class="servicos">
                    <ul>
                        <li>É um facto estabelecido de que um leitor é distraído pelo conteúdo legível de uma página quando analisa a sua mancha gráfica. Logo, o uso de Lorem Ipsum leva a uma distribuição mais ou menos normal de letras, ao contrário do uso de "Conteúdo aqui, conteúdo aqui", tornando-o texto legível.</li>

                        <li>É um facto estabelecido de que um leitor é distraído pelo conteúdo legível de uma página quando analisa a sua mancha gráfica. Logo, o uso de Lorem Ipsum leva a uma distribuição mais ou menos normal de letras, ao contrário do uso de "Conteúdo aqui, conteúdo aqui", tornando-o texto legível.</li>

                        <li>É um facto estabelecido de que um leitor é distraído pelo conteúdo legível de uma página quando analisa a sua mancha gráfica. Logo, o uso de Lorem Ipsum leva a uma distribuição mais ou menos normal de letras, ao contrário do uso de "Conteúdo aqui, conteúdo aqui", tornando-o texto legível.</li>
                    </ul>
                </div>

            </div><!--w50-->
            <div class="clear"></div><!--clear-->
        </div><!--center-->
    </section><!--extras-->

    <footer>
        <div class="center">
            <p>LiveCode - Todos os direitos reservados</p>
        </div><!--center-->
    </footer>
</body>
</html>