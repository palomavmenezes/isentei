<?php get_header(); ?>

<main id="page-portfolio">

    <?php get_template_part('template_parts/banner-pages'); ?>

    <section id="eventos">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-align-center">
                    <h6>veja abaixo nossos</h6>
                    <h2>Eventos já realizados</h2>
                </div>
            </div>

            <div class="row portfolio-cat">
                <div class="col">
                    <a href="" class="catorias-portfolio active">Categoria 1</a>
                </div>

                <div class="col">
                    <a href="" class="catorias-portfolio">Categoria 2</a>
                </div>

                <div class="col">
                    <a href="" class="catorias-portfolio">Categoria 3</a>
                </div>
                
                <div class="col">
                    <a href="" class="catorias-portfolio">Categoria 4</a>
                </div>

                <div class="col">
                    <a href="" class="catorias-portfolio">Categoria 5</a>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 wow fadeInLeft">
                    <div  class="bg-gradiente"  style="background-image: linear-gradient(to bottom, transparent 0%, #000000eb 80%), url(<?php echo get_template_directory_uri(); ?>/img/bg-evento-1.jpg);">
                        <div class="categoria">Categoria</div>
                        <div class="txt">O melhor evento que proporcionou uma experiência incrível para todos!</div>
                    </div>
                </div>

                <div class="col-md-6 wow fadeInRight">
                    <div  class="bg-gradiente"  style="background-image: linear-gradient(to bottom, transparent 0%, #000000eb 80%), url(<?php echo get_template_directory_uri(); ?>/img/bg-evento-1.jpg);">
                        <div class="categoria">Categoria</div>
                        <div class="txt">O melhor evento que proporcionou uma experiência incrível para todos!</div>
                    </div>
                </div>

                <div class="col-md-6 wow fadeInLeft">
                    <div  class="bg-gradiente"  style="background-image: linear-gradient(to bottom, transparent 0%, #000000eb 80%), url(<?php echo get_template_directory_uri(); ?>/img/bg-evento-1.jpg);">
                        <div class="categoria">Categoria</div>
                        <div class="txt">O melhor evento que proporcionou uma experiência incrível para todos!</div>
                    </div>
                </div>

                <div class="col-md-6 wow fadeInRight">
                    <div  class="bg-gradiente"  style="background-image: linear-gradient(to bottom, transparent 0%, #000000eb 80%), url(<?php echo get_template_directory_uri(); ?>/img/bg-evento-1.jpg);">
                        <div class="categoria">Categoria</div>
                        <div class="txt">O melhor evento que proporcionou uma experiência incrível para todos!</div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 content-align-mid">
                    <div class="ver-mais">
                        <a href="" class="btn-ver-mais">Ver mais</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part('template_parts/cadastre-se'); ?>
    <?php get_template_part('template_parts/instagram'); ?>

</main>

<?php get_footer(); ?>