<!-- invisivel apenas no mobile xs -->
<div class="d-none d-sm-block navbar-padding-bottom">
    <ul class="jsMenu nav d-flex justify-content-between align-items-center fixed-top menu-topo-navegacao menu-bg">
        <div class="col-md-4 px-0">
            <img src="<?php echo $url ?>/images/logotipo/svg/logotipo-unoesc-cinza.svg" alt="Logotipo Unoesc" class="logotipo opacity-4">
        </div>
        <div class="col-md-4 text-center px-0">
          <a class="nav-link text-dark font-weight-bold titulo animacao-texto" href="">
            Smart Campus
          </a>
        </div>
        <div class="col-md-4 px-0">
            <div class="d-flex inline float-right">
                <a class="nav-link login opacity-4 mr-2" href="<?php echo $url ?>/meu-link">
                    Opção 1
                </a>
                <a class="nav-link login opacity-4" href="<?php echo $url ?>">
                    Início
                </a>
            </div>
        </div>
    </ul>
</div>


<!-- apenas visivel no mobile xs -->
<div class="d-block d-sm-none navbar-padding-bottom">
    <ul class="jsMenu nav justify-content-around align-items-center fixed-top menu-topo-navegacao menu-bg">
        <li class="nav-item">
            <a href="">
                <img src="<?php echo $url ?>/images/icones-menu/svg/icone-logotipo-cinza.svg" alt="Início" class="logotipo">
            </a>
        </li>

        <li class="nav-item">
            <a href="<?php echo $url ?>">
                <i class="fas fa-home fa-lg text-secondary opacity-5"></i>
            </a>
        </li>
        
        <li class="nav-item">
            <a href="<?php echo $url ?>/minha-url">
                <i class="fas fa-chart-pie fa-lg text-secondary opacity-5"></i>
            </a>
        </li>
        
        <li class="nav-item">
            <a target="_blank" href="">
                <i class="fas fa-user fa-lg text-secondary opacity-5"></i>
            </a>
        </li>
        
    </ul>
</div>