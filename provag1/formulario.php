<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

    <head>
        <meta charset="UTF-8">
        <title>formulario</title>
    </head>

    <body>
        <nav>
            <ul>
                <a href="index.php"<li>Texto</li></a></br>
                <a href="formulario.php"<li>Formulario</li></a>
            </ul>
        </nav>

        <form>
            <label> Nome:<input type=text name=nome required></label></br>
            <label>E-mail<input type=email name=email required></label></br>
            <label>Data Nascimento: <input type=date name=data></label></br>
            <label>Cidade:<input type=text name=nome></label></br>
            <label>Sexo:<label><input type=radio name=sexo>Feminino</label>
                <label><input type=radio name=sexo> Masculino</label></label></br>
            <label> Selecionar Arquivo:<input type=file name=arquivo></label></br>
            <label>Nascido no Brasil<input type=checkbox name=Nacionalidade></label></br>
            <label>Confirmar Envio?<input type=button name=Enviar></label></br>
        </form>

    </body>
</html>
