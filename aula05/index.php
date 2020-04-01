<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8"> <meta name="viewport" content="width=device-width,initial-scale=1"/>
        <!-- <link href="css/bootstrap.css" rel="stylesheet"/> -->
        <link href="css/Estilos.css" rel="stylesheet"/>
        <title>Site Completo</title>
    </head>
    <body>
        <div class="container">
            <header>
                <a href="index.php">
                    <img src="img/banner.png"
                         alt="Imagem de cabeçalho de um computador e um tablet mostrando um grafico de desempenho"/>
                </a>
            </header>

            <nav class="menu">
                <a href="index.php"><i class="fas fa-home"></i>&ensp;Home</a>
                <a href="#">Empresa</a>
                <a href="#">Produtos</a>
                <a href="#">Serviços</a>
                <a href="#">Clientes</a>
                <a href="Contato2.php"><i class="fas fa-phone"></i>&ensp;Contatos</a>
            </nav>

            <section class="principal">
                <article class="texto">
                    <img src="img/empresa.png"/>
                    <p>  No entanto, não podemos esquecer que a constante divulgação das informações assume importantes posições no estabelecimento dos métodos utilizados na avaliação de resultados. O empenho em analisar o desafiador cenário globalizado é uma das consequências do processo de comunicação como um todo. O cuidado em identificar pontos críticos na expansão dos mercados mundiais representa uma abertura para a melhoria dos índices pretendidos. É importante questionar o quanto a determinação clara de objetivos promove a alavancagem do fluxo de informações. Do mesmo modo, a competitividade nas transações comerciais cumpre um papel essencial na formulação do orçamento setorial.
                        Ainda assim, existem dúvidas a respeito de como a complexidade dos estudos efetuados causa impacto indireto na reavaliação do retorno esperado a longo prazo. As experiências acumuladas demonstram que o comprometimento entre as equipes deve passar por modificações independentemente dos níveis de motivação departamental.
                    </p>
                    <img src="img/grafico.jpg"
                         <p>Caros amigos, o julgamento imparcial das eventualidades assume importantes posições no estabelecimento dos relacionamentos verticais entre as hierarquias. Gostaria de enfatizar que o desafiador cenário globalizado auxilia a preparação e a composição das novas proposições. O cuidado em identificar pontos críticos na contínua expansão de nossa atividade deve passar por modificações independentemente dos índices pretendidos. Todavia, a determinação clara de objetivos maximiza as possibilidades por conta das direções preferenciais no sentido do progresso. Acima de tudo, é fundamental ressaltar que a revolução dos costumes cumpre um papel essencial na formulação do orçamento setorial.
                        Podemos já vislumbrar o modo pelo qual o acompanhamento das preferências de consumo prepara-nos para enfrentar situações atípicas decorrentes das diversas correntes de pensamento. As experiências acumuladas demonstram que a hegemonia do ambiente político causa impacto indireto na reavaliação dos conhecimentos estratégicos para atingir a excelência. O empenho em analisar a competitividade nas transações comerciais afeta positivamente a correta previsão dos níveis de motivação departamental.
                    </p>

                </article>
                <aside class="propaganda">
                    <a href="https://www.subway.com/en-VI/MenuNutrition/Menu/Product?ProductId=5246&MenuCategoryId=444" target="_blank">
                        <img src="img/vertical.gif"/>
                    </a>
                    <a href="http://www.alternion.com/" target="_blank">
                        <img src="img/socialmedia.jpg"/>
                    </a>
                </aside>

            </section>
            <footer class="rodape">
                Desenvolvido por Michael Jr
                &copy;2018 - BergaTech Design - Todos os direitos reservados
            </footer>


        </div>


        <script src="js/jquery.min.js"></script>


        <script>
            /*  $ é utilizado para localizar algo em JQuery
             * $(Document) refere-se ao documento inteiro
             * .ready espera a pagina abrir
             * .Click serve para clicar kkkk
             * .toogle() se estiver escondido mostra e se estiver mostrando esconde
             */
            $(Document).ready(function () {
                $(".botao").click(function () {
                    $(".lista").toggle();
                });
            });

        </script>


    </body>
</html>
