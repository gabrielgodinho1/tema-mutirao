    <footer>
        <div class="container_12 footer">
            <div class="resumo-sobre grid_6">
                <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/logo-rodape.png" alt="" /></a>
                <p><?php the_field('resumo_quem_somos', 'option'); ?></p>
            </div>
            <div class="menu-apoio grid_3">
                <div class="bloco-rodape">
                    <h3>Conheça</h3>
                    <ul>
                        <li><a href="">Início</a></li>
                        <li><a href="">Sobre</a></li>
                        <li><a href="">Localização</a></li>
                    </ul>
                </div>
                <div class="bloco-rodape">
                    <h3>Departamentos</h3>
                    <ul>
                        <li><a href="">Projetos Bertolini</a></li>
                        <li><a href="">Móveis</a></li>
                        <li><a href="">Eletro</a></li>
                        <li><a href="">Utilidade</a></li>
                        <li><a href="">Roupas</a></li>
                        <li><a href="">Cama, mesa & banho</a></li>
                    </ul>
                </div>
            </div>
            <div class="menu-apoio grid_3">
                <div class="bloco-rodape">
                    <h3>Atendimento</h3>
                    <ul>
                        <li><a href="">Chat</a></li>
                        <li><a href="">Ligue-me</a></li>
                    </ul>
                </div>
                <div class="bloco-rodape">
                    <h3>Lojas Mutirão</h3>
                    <a href="mailto:<?php the_sub_field('e-mail', 'option'); ?>"><?php the_field('e-mail', 'option'); ?></a>
                    <a href="tel:6232237007">(62)<?php the_field('telefone', 'option'); ?></a>
                    <br/><br/>
                    <address><?php the_field('endereco', 'option'); ?></address>
                </div>
            </div>
        </div>
    </footer>


</div> <!-- /wrap -->        
        

        <!-- ========== JS ============= -->

        <script src="<?php bloginfo('template_directory'); ?>/js/vendor/bootstrap.min.js"></script>

        <script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/js/jquery.lazyload.min.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/js/ad-gallery.js"></script>
        

        <!-- ========== ANALYTICS ============= -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>


        <!-- ========== FACEBOOK ============= -->
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&appId=302338833262843&version=v2.0";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>


    </body>
</html>