<?php $menu_contato_ativo = 'active'; ?>
<?php include 'header.php' ?>

<div class="imagem_banner mb-10">
    <img alt="banner" src="assets/images/lojas_banner.jpg">
</div>

<div class="container-fluid mb-30">
    <div class="row">
        <div class="col-sm-12">
            <p id="breadcrumbs"> <a href="index.php">Home</a> > Contato </p>
        </div>
    </div>
</div>
<form action="#" method="post" id="form_contato">
    <div class="container-fluid">
        <div class="row mb-20">
            <div class="col-sm-12 title_page">
                <h3><span>CONTATO</span></h3>
            </div>
        </div>
        <div class="row mb-35">
            <div class="col-sm-6 texto_esquerda">
                <p>Bem vindo à central de atendimento Vivar.</p>
                <p>Entre em contato conosco através do formulário abaixo.</p>
                <label for="assunto">ASSUNTO:</label>
                <select name="assunto" id="assunto" class="selectpicker" data-width="72%">
                    <option value="duvida">Dúvida</option>
                    <option value="sugestao">Sugestão</option>
                    <option value="elogio">Elogio</option>
                    <option value="reclamacao">Reclamação</option>
                    <option value="orcamento">Orçamento</option>
                </select>
            </div>
        </div>
        <div class="row mb-55">
            <div class="row mb-20">
            <div class="col-sm-12 title_page">
                <h3><span>DADOS DO CLIENTE</span></h3>
            </div>
        </div>
            <div class="col-sm-6">
                    <label for="nome">NOME:</label> <input type="text" name="nome" id="nome" /> <br>
                    <label for="email">E-MAIL:</label> <input type="text" name="email" id="email" /> <br>
                    <label for="endereco">ENDEREÇO:</label> <input type="text" name="endereco" id="endereco" /> <br>
                    <label for="bairro">BAIRRO:</label> <input type="text" name="bairro" id="bairro" /> <br>
                    <label for="cidade">CIDADE:</label> <input type="text" name="cidade" id="cidade" /> <br>
                    <label for="estado">ESTADO:</label> <input type="text" name="estado" id="estado" /> <br>
                    <label for="cep">CEP:</label> <input type="text" name="cep" id="cep" /> <br>
                    <label for="cpf">CPF:</label> <input type="text" name="cpf" id="cpf" /> <br>
                    <label for="telefone">TELEFONE:</label> <input type="text" name="telefone" id="telefone" /> <br>
                    <label for="mensagem" class="align_top">MENSAGEM:</label> <textarea name="mensagem" id="mensagem"></textarea> <br>
                    <label for="local_compra">LOCAL DE COMPRA:</label>
                    <select name="local_compra" id="local_compra" class="selectpicker" data-width="72%">
                        <option value="Não comprei">Não comprei</option>
                        <option value="Desejo comprar">Desejo comprar</option>
                        <option value="Porto Alegre/RS - Sertório 1407">Porto Alegre/RS - Sertório 1407</option>
                        <option value="Porto Alegre/RS - Olavo Barreto Viana 69">Porto Alegre/RS - Olavo Barreto Viana 69</option>
                        <option value="Porto Alegre/RS - Casemiro de Abreu 1216">Porto Alegre/RS - Casemiro de Abreu 1216</option>
                        <option value="Porto Alegre/RS - Shopping Iguatemi">Porto Alegre/RS - Shopping Iguatemi</option>
                        <option value="Porto Alegre/RS - Shopping Bourbon Country">Porto Alegre/RS - Shopping Bourbon Country</option>
                        <option value="Novo Hamburgo/RS - José do Patrocínio 609">Novo Hamburgo/RS - José do Patrocínio 609</option>
                        <option value="Salvador/BA - Alameda das Espatódeas 231">Salvador/BA - Alameda das Espatódeas 231</option>
                        <option value="Salvador/BA - Shopping Salvador">Salvador/BA - Shopping Salvador</option>
                    </select>
                    <br>
                    <br>
                    <p class="text_left"><label>&nbsp;</label> sac@vivar.com.br &nbsp;&nbsp;&nbsp;&nbsp; 51 3029 8855</p>
                    <p class="text_left">
                        <label>&nbsp;</label><button type="submit">ENVIAR</button>
                    </p>


            </div>
        </div>
    </div>
</form>

    <?php include 'footer.php' ?>

</body>
</html>