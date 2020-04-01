<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
       if(isset($_REQUEST['txNome'])){
           $nome = $_GET['txNome']
           if($nome !=""){
           echo "Dados enviados com sucesso";
        }else{
            echo "Nenhum dado recebido"
        }
       }
       }
        ?>
    </body>
</html>
