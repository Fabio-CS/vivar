<?php $menu_franquias_ativo = 'active'; ?>
<?php include 'header.php' ?>

<div class="imagem_banner mb-10">
    <img alt="banner" src="assets/images/empresa_banner.jpg">
</div>

<div class="container-fluid mb-30">
    <div class="row">
        <div class="col-sm-12">
            <p id="breadcrumbs"> <a href="index.php">Home</a> > Franquias </p>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row mb-20">
        <div class="col-sm-12 title_page">
            <h3><span>FRANQUIAS</span></h3>
        </div>
    </div>
    <div class="row mb-35">
        <div class="col-sm-6 texto_esquerda">
            <p>Pioneira na comercialização do segmento da linha Premium de colchões no sul do Brasil, a Vivar Sleep Center concebeu um DNA mercantil próprio de alta performance e eficiente no suprimento das necessidades do mercado consumidor de alto padrão.</p>
            <p>Uma rede de lojas com projeto arquitetônico que encanta e cria uma experiência de compra única, onde entregamos ao mercado soluções em conforto, ergonomia e em qualidade de vida através de um mix de produtos inteligente e eficaz.</p>
            <p>Faça parte da fatia de mercado que mais cresce.</p>
        </div>
        <div class="col-sm-6 text_center">
            <img src="assets/images/filiais_foto.jpg">
        </div>
    </div>
    <div class="row mb-20">
        <div class="col-sm-12 text_center">
            <img src="assets/images/mapa_franquias.jpg">
        </div>
    </div>
    <div class="row mb-40">
        <div class="col-sm-10 col-sm-offset-1 text_center">
            <p> Com sede em Porto Alegre/RS, Novo Hamburgo/RS e Salvador/BA </p>
        </div>
    </div>
    <div class="row mb-55">
        <div class="row mb-20">
        <div class="col-sm-12 title_page">
            <h3><span>IDENTIFICAÇÃO PESSOAL</span></h3>
        </div>
    </div>
        <div class="col-sm-6">
            <form action="#" id="form_franquia">
                <label for="nome">NOME:</label> <input type="text" name="nome" id="nome" /> <br>
                <label for="cpf">CPF:</label> <input type="text" name="cpf" id="cpf" /> <br>
                <label for="rg">RG:</label> <input type="text" name="rg" id="rg" /> <br>
                <label for="endereco">ENDEREÇO:</label> <input type="text" name="endereco" id="endereco" /> <br>
                <label for="bairro">BAIRRO:</label> <input type="text" name="bairro" id="bairro" /> <br>
                <label for="cidade">CIDADE:</label> <input type="text" name="cidade" id="cidade" /> <br>
                <label for="cep">CEP:</label> <input type="text" name="cep" id="cep" /> <br>
                <label for="estado">ESTADO:</label> <input type="text" name="estado" id="estado" /> <br>
                <label for="pais">PAÍS:</label> <input type="text" name="pais" id="pais" /> <br>
                <label for="telefone">TELEFONE:</label> <input type="text" name="telefone" id="telefone" /> <br>
                <label for="email">E-MAIL:</label> <input type="text" name="email" id="email" /> <br>
                <p class="text_left">
                    <button type="submit">ENVIAR INTERESSE</button>
                </p>
                
            </form>
        </div>
    </div>
</div>

    <?php include 'footer.php' ?>

</body>
</html>