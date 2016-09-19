<?php $menu_produtos_ativo = 'active'; ?>
<?php include 'header.php' ?>

<div class="imagem_banner mb-20">
    <img alt="banner" src="assets/images/banner_royal.jpg">
</div>

<div class="_nav-products page_produtos">
    <ul class="nav-products">
        <li class="np1">
            <div>
                <img alt="" title="" src="assets/images/nav-products/poltronas.jpg">
            </div>
        </li>
        <li class="np2 active">
            <div>
                <a href="#">
                    <img alt="" title="" src="assets/images/nav-products/colchoes.jpg">
                    <div class="np-label"><span>Colchões</span></div>
                </a>
            </div>
        </li>
        <li class="np3">
            <div>
                <a href="#">
                    <img alt="" title="" src="assets/images/nav-products/camas.jpg">
                    <div class="np-label"><span>Camas</span></div>
                </a>
            </div>
        </li>
        <li class="np4">
            <div>
                <a href="#">
                    <img alt="" title="" src="assets/images/nav-products/poltronas.jpg">
                    <div class="np-label"><span>Poltronas</span></div>
                </a>
            </div>
        </li>
        <li class="np5">
            <div>
                <a href="#">
                    <img alt="" title="" src="assets/images/nav-products/acessorios.jpg">
                    <div class="np-label"><span>Acessórios</span></div>
                </a>
            </div>
        </li>
        <li class="np6">
            <div>
                <img alt="" title="" src="assets/images/nav-products/camas.jpg">
            </div>
        </li>
    </ul>
</div>

<div class="container-fluid mb-30">
    <div class="row">
        <div class="col-sm-12">
            <p id="breadcrumbs"> <a href="index.php">Home</a> > Produtos > Camas </p>
        </div>
    </div>
</div>

<div class="container-fluid mb-30">
    <div class="row">
        <div class="col-sm-12">
            <div class="logo_produto">
                <img src="assets/images/royal_logo.png" />
            </div>
        </div>
    </div>
</div>
<div class="container-fluid mb-30">
    <div class="row">
        <div class="col-sm-4">
            <p class="produto_desc">
                <strong>Linha:</strong> Royal <br />
                <strong>Nível de Conforto:</strong> Macio <br />
                <strong>Espessura do Colchão:</strong> 38cm <br />
                <strong>Limite de carga por pessoa:</strong> 150kg 
            </p>
        </div>
        <div class="col-sm-8">
            <div class="produto_imagem">
                <img src="assets/images/colchao_royal.png" />
                <div class="orcamento">
                    <div class="dados_orcamento collapse" id="dados_orcamento">
                        <form action="#" method="post" id="orcamento">
                            <label for="nome">Nome:</label> <input type="text" name="nome" id="nome" /> <br>
                            <label for="tamanho">Tamanho:</label>
                            <select name="tamanho" id="tamanho" class="selectpicker" data-width="20%">
                                <option value="casal"> Casal </option>
                            </select>
                            <label for="telefone" class="lb_tel">Telefone:</label> <input type="text" name="telefone" id="telefone" /> <br>
                            <label for="email">E-mail:</label> <input type="text" name="email" id="email" /> <br>
                            <button type="submit" id="enviar">ENVIAR</button>
                            <div style="clear: both"></div>
                        </form>
                    </div>
                    <button type="button" class="btn_orcamento" id="peca_orcamento" data-toggle="collapse" data-target="#dados_orcamento" >PEÇA UM ORÇAMENTO</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 mb-55">
            <div class="caracteristicas_produto">
                <div class="caracteristica">
                    <img src="assets/images/mao_icon.png">
                    <p> <strong>Macio.</strong> <br>
                        <span>Nível de Conforto</span>
                    </p>
                </div>
                <div class="caracteristica">
                    <img src="assets/images/regua_icon.png">
                    <p> <strong>38cm.</strong> <br>
                        <span>Espessura</span>
                    </p>
                </div>
                <div class="caracteristica">
                    <img src="assets/images/balanca_icon.png">
                    <p> <strong>150kg.</strong> <br>
                        <span>Limite por pessoa</span>
                    </p>
                </div>
                <div class="caracteristica">
                    <img src="assets/images/garantia_icon.png">
                    <p> <strong>Garantia.</strong> <br>
                        <span>Vivar</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="selos">
                <p><img src="assets/images/restonic_selo.png"></p>
                <p>
                    <img src="assets/images/best_buy_selo.png">
                    <img src="assets/images/wca_selo.png">
                    <img src="assets/images/abnt_selo_prod.png">
                    <img src="assets/images/top_mind_selo.png">
                </p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="recomendacao">
                <p>Confira também os colchões das linhas:</p>
                <div class="imagens_recomendacao">
                    <a href="#">
                        <img src="assets/images/cushiony_reco.png">
                    </a>
                    <a href="#">
                        <img src="assets/images/hybrid_reco.png">
                    </a>
                    <a href="#">
                        <img src="assets/images/stiff_reco.png">
                    </a>
                    <a href="#">
                        <img src="assets/images/access_reco.png">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php' ?>

</body>
</html>