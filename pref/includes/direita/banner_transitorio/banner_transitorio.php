	<script type="text/javascript">
            $(document).ready(function(){
                    $("#controls li a").hover(function(){
                            shuffle();
                            var rel = $(this).attr("rel");
                            if ( $("#" + rel).hasClass("current") ){
                                    return false;
                            }
                            $("#" + rel).show();
                            $(".current").fadeOut().removeClass("current");
                            $("#" + rel).addClass("current");
                            $(".active").removeClass("active");
                            $(this).parents("li").addClass("active");
                            set_new_interval(7000);
                            return false;
                    });
            });
            function banner_switch(){
                    shuffle();
                    var next =  $('.banner.current').next('.banner').length ? $('.banner.current').next('.banner') : $('#banners .banner:first');
                    $(next).show();
                    $(".current").fadeOut(3000).removeClass("current");
                    $(next).addClass("current");
                    var next_link = $(".active").next("li").length ? $('.active').next('li') : $('#controls li:first');
                    $(".active").removeClass("active");
                    $(next_link).addClass('active');
            }

            $(function() {
                slide = setInterval( "banner_switch()", 5000 );
            });

            function set_new_interval(interval){
                    clearInterval(slide);
                    slide = setInterval("banner_switch()", interval);
            }

            function shuffle(){
                    $(".banner").css("z-index", 1).hide();
                    $(".current").css("z-index", 2).show();
            }
    </script>

    <div id="banners">
    
        <ul id="controls">
        
	        <li><a href="<?=URL?>/processo-seletivo/processo-seletivo.php" rel="banner-1">1</a></li>
            <li><a href="<?=URL?>/censo2010/censo2010.php" rel="banner-2">2</a></li>
            <li><a href="<?=URL?>/campanha_agasalho/2010/campanha_agasalho.php" rel="banner-3">3</a></li>            
            <li><a href="<?=URL?>/coleta_seletiva/coleta_seletiva.php" rel="banner-4">4</a></li>
            <li><a href="http://eiss.conam.com.br/eiss/eiss_apresentacao.php?cod_ibge=3522208" target="_blank" rel="banner-5">5</a></li>
            <li><a href="http://www.gcm.itapecerica.com/" target="_blank" rel="banner-6">6</a></li>           
            <li><a href="<?=URL?>/arquivo_banner/jovem_cidadao/jovem_cidadao.pdf" target="_blank" rel="banner-7">7</a></li>
            <li><a href="<?=URL?>/minha_casa_minha_vida/minha_casa.php" rel="banner-8">8</a></li>
            <li><a href="http://www.mj.gov.br/pronasci/" target="_blank" rel="banner-9">9</a></li>
            <li><a href="<?=URL?>/acessibilidade/acessibilidade.php" rel="banner-10" class="last_ctr">10</a></li>
            <li><a href="<?=URL?>/cipa/cipa.php" rel="banner-11" class="last_ctr">11</a></li>
        </ul>
    
        <div style="z-index: 1; display: none;" class="banner" id="banner-1">
            <a href="<?=URL?>/processo-seletivo/processo-seletivo.php"><img src="<?=URL?>/img/banner_transitorio/banner_PS_Saude.jpg"/></a>
        </div>

        <div style="z-index: 2; display: none;" class="banner" id="banner-2">
            <a href="<?=URL?>/censo2010/censo2010.php"><img src="<?=URL?>/img/banner_transitorio/banner_censo2010.jpg "/></a>
        </div>
        <div style="z-index: 3; display: none;" class="banner" id="banner-3">
            <a href="<?=URL?>/campanha_agasalho/2010/campanha_agasalho.php"><img src="<?=URL?>/img/banner_transitorio/banner_campanha_agasalho_2010.jpg"/></a>
        </div>        
        <div style="z-index: 4; display: none;" class="banner" id="banner-4">
            <a href="<?=URL?>/coleta_seletiva/coleta_seletiva.php"><img src="<?=URL?>/img/banner_transitorio/banner_coleta_seletiva.jpg"/></a>
        </div>
        <div style="z-index: 5; display: none;" class="banner" id="banner-5">
            <a href="http://eiss.conam.com.br/eiss/eiss_apresentacao.php?cod_ibge=3522208" target="_blank"><img src="<?=URL?>/img/banner_transitorio/banner_e_iss.jpg"/></a>
        </div>
        <div style="z-index: 6; display: none;" class="banner" id="banner-6">
            <a href="http://www.gcm.itapecerica.com/" target="_blank"><img src="<?=URL?>/img/banner_transitorio/banner_gcm.jpg"/></a>
        </div>
        <div style="z-index: 7; display: none;" class="banner" id="banner-7">
            <a href="<?=URL?>/arquivo_banner/jovem_cidadao/jovem_cidadao.pdf" target="_blank"><img src="<?=URL?>/img/banner_transitorio/banner_jovem_cidadao.jpg"/></a>
        </div>
        <div style="z-index: 8; display: none;" class="banner" id="banner-8">
            <a href="<?=URL?>/minha_casa_minha_vida/minha_casa.php"><img src="<?=URL?>/img/banner_transitorio/banner_minha_casa.jpg"/></a>
        </div>
        <div style="z-index: 9; display: none;" class="banner" id="banner-9">
            <a href="http://www.mj.gov.br/pronasci/" target="_blank"><img src="<?=URL?>/img/banner_transitorio/banner_pronasci.jpg"/></a>
        </div>
        <div style="z-index: 10; display: none;" class="banner" id="banner-10">
            <a href="<?=URL?>/acessibilidade/acessibilidade.php"><img src="<?=URL?>/img/banner_transitorio/banner_acessibilidade.jpg"/></a>
        </div>
        <div style="z-index: 11; display: none;" class="banner" id="banner-11">
            <a href="<?=URL?>/cipa/cipa.php"><img src="<?=URL?>/img/banner_transitorio/banner_cipa.jpg"/></a>

        </div>


    </div>
