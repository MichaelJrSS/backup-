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
    <body>  <!--   action acao para onde vai// method a forma que eh enviado GET sem seguranca no endereço
            POST com seguranca em backgroud

        -->
        <form id="frmpessoa" action="frmenviado.php" method="POST">
            <label>Nome</label>
            <input type="text"
                   id="txNome"
                   name="txNome"
                   required
                   maxlength="50"
                   minlength="10"/></br>

            <label>Telefone</label>
            <input type="tel"
                   id="txtelefone"
                   name="txtelefone"
                   pattern="^\([1-9])"
                   placeholder="informe o telefone"
                   autofocus/></br>

            <label>E-mail</label>
            <input type="email"
                   id="txemail"
                   name="txemail"/></br>

            <label>Data de nascimento</label>
            <input type="date"
                   id="txdata"
                   name="txdata"/></br>

            <label>Foto</label>
            <input type="file"
                   id="txfoto"
                   name="txfoto"/></br>
            <label>cor preferida</label>
            <input type="color"
                   id="txcor"
                   name="txcor"/></br>

            <label>SEXO:</label></br>
            <label>Feminino</label><input type="radio"
                                          id="rdsexo"
                                          name="rdsexo"
                                          value="Feminino"/></br>
            <label>Masculino</label><input type="radio"
                                           id="rdsexo"
                                           name="rdsexo"
                                           value="Masculino"/></br></br>


            <label>Li os termos do contrato</label>
            <input type="checkbox"
                   name="chkLi"
                   id="chkLi"
                   value="Li"
                   checked/>


            <label>Aceito os termos do contrato</label>
            <input type="checkbox"
                   name="chkaceito"
                   id="chkaceito"
                   value="Aceito"/></br></br>

            <label>LISTA DE ESTADOS DO BRASIL</label>
            <select name="estados-brasil">



                <option value="AC">Acre</option>
                <option value="AL">Alagoas</option>
                <option value="AP">Amapá</option>
                <option value="AM">Amazonas</option>
                <option value="BA">Bahia</option>
                <option value="CE">Ceará</option>
                <option value="DF">Distrito Federal</option>
                <option value="ES">Espírito Santo</option>
                <option value="GO">Goiás</option>
                <option value="MA">Maranhão</option>
                <option value="MT">Mato Grosso</option>
                <option value="MS">Mato Grosso do Sul</option>
                <option value="MG">Minas Gerais</option>
                <option value="PA">Pará</option>
                <option value="PB">Paraíba</option>
                <option value="PR">Paraná</option>
                <option value="PE">Pernambuco</option>
                <option value="PI">Piauí</option>
                <option value="RJ">Rio de Janeiro</option>
                <option value="RN">Rio Grande do Norte</option>
                <option value="RS">Rio Grande do Sul</option>
                <option value="RO">Rondônia</option>
                <option value="RR">Roraima</option>
                <option value="SC">Santa Catarina</option>
                <option value="SP">São Paulo</option>
                <option value="SE">Sergipe</option>
                <option value="TO">Tocantins</option>
            </select></br>

            <input type="submit"
                   id="btnenviar"
                   name="bntenviar"
                   value="enviar"/>


            <input type="reset"
                   id="bntcancelar"
                   value="cancelar"/>

        </form>
    </body>
</html>
