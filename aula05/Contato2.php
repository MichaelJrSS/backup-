<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1"/>
        <link href="css/bootstrap.css" rel="stylesheet"/>
        <link href="css/Estilos.css" rel="stylesheet"/>
        <!--Icones-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

        <title>Site Completo</title>
    </head>
    <body>
        <div class="container">
            <header>
                <a href="index.php">
                    <img src="img/banner.png"
                         alt="Imagem de cabeçalho de um computador e um tablet mostrando um grafico de desempenho"/>
                </a>
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <a class="navbar-brand" href="#">Menu</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Contato2.php">Contados</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Clientes.php">Clientes</a>
                            </li>

                        </ul>
                    </div>
                </nav>
                <section id="contact">
                    <div class="container">
                        <div class="well well-sm">
                            <h3><strong>Entre em Contato</strong></h3>
                        </div>

                        <div class="row" >
                            <div>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2012.1626257356656!2d-51.18094804118209!3d-29.917829787290447!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95196fff834e79d3%3A0x68b6a444890257c5!2sUniversidade+La+Salle!5e0!3m2!1spt-BR!2sbr!4v1537570802349" width="100%" height="315" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>

                            <div>
                                <h4><strong>Suas Informações AQUI!</strong></h4>
                                <form>
                                    <div class="form-group">
                                        <label>Nome</label>
                                        <input type="text" class="form-control" placeholder="Digite seu Nome" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Data Nascimento</label>
                                        <input type="date" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Foto</label>
                                        <label>Escolher uma Foto</label>
                                        <input type="file" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>E-mail</label>
                                        <input type="email" class="form-control" placeholder="Digite seu E-mail">
                                    </div>
                                    <div class="form-group">
                                        <input type="tel" class="form-control" placeholder="Digite seu Telefone"required>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" rows="5" placeholder="Escreva sua mensagem!"></textarea>
                                    </div>
                                    <button class="btn btn-default" type="submit" name="button">
                                        <i class="fa fa-paper-plane-o" aria-hidden="true"></i> Enviar
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>

                <footer class="rodape">
                    Desenvolvido por Michael Jr
                    &copy;2018 - BergaTech Design - Todos os direitos reservados
                </footer>


        </div>

    </body>
</html>
