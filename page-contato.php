<?php get_header(); ?>

<main id="page-portfolio">

    <?php get_template_part('template_parts/banner-pages'); ?>

    <section id="contato">
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>

                <div class="col-md-8 text-align-center title-contact">
                    <h5>Envie um e-mail ou agende uma visita!</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor<br>
                    incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices.</p>
                </div>

                <div class="col-md-2"></div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="box-contact-page">
                        <div class="row">
                            <div class="col-md-6 info-contact">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <h5>Agende uma avaliação</h5>
                                <h4>(11) 3101-9874</h4>
                            </div>

                            <div class="col-md-6 info-contact border-left">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <h5>Envie um e-mail</h5>
                                <h4>contato@isentei.com.br</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2"></div>

                <div class="col-md-8 text-align-center title-contact">
                    <?php echo do_shortcode('[contact-form-7 id="51" title="Contato"]'); ?>
                </div>

                <div class="col-md-2"></div>
            </div>

            <div class="row">
                <div class="col-md-2"></div>

                <div class="col-md-8 text-align-center title-contact">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.8393657718066!2d-46.591626484386765!3d-23.538279266626827!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5ed3e9d8a221%3A0x4f953da76b70cd47!2sAv.%20%C3%81lvaro%20Ramos%2C%2020%20-%20Belenzinho%2C%20S%C3%A3o%20Paulo%20-%20SP!5e0!3m2!1spt-BR!2sbr!4v1600735147963!5m2!1spt-BR!2sbr" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    <div class="box-endereco">
                        <div class="row">
                            <div class="col-md-8">
                                <h5>Av. Alvaro Ramos, 20 - Belenzinho São Paulo - CEP: 997-799</h5>
                            </div>

                            <div class="col-md-4 como-chegar">
                                <a href="https://www.google.com/maps/place/Av.+%C3%81lvaro+Ramos,+20+-+Belenzinho,+S%C3%A3o+Paulo+-+SP/@-23.5382793,-46.5916265,17z/data=!3m1!4b1!4m5!3m4!1s0x94ce5ed3e9d8a221:0x4f953da76b70cd47!8m2!3d-23.5382842!4d-46.5894378" class="btn-como-chegar">
                                    Como Chegar
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-2"></div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>