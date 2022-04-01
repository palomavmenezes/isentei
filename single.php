<?php
	/* SINGLE TEMPLATE */
	get_header();
?>

<main id="single-post">
	<section id="banner-pages">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php the_breadcrumb(); ?>
				</div>

				<div class="col-md-12 title">
					<h4>Blog</h4>
				</div>
			</div>
		</div>
	</section>

	<section id="single-post-content">
		<div class="container">
			<div class="row">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="col-md-1"></div>

				<div class="col-md-10 content-align-center text-align-center">
					<div class="all-content-post">
						<h2><?php the_title(); ?></h2>
						<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="img-fluid">
						<div class="content-right">
							<div class="icones-de-compartilhamento">
							<hr>
								<li style="margin-right: 5px;">Compartilhe: </li> 
								<li><i class="fa fa-facebook" aria-hidden="true"></i></li>
								<li><i class="fa fa-twitter" aria-hidden="true"></i></li>
								<li><i class="fa fa-google-plus" aria-hidden="true"></i></li>
								<li><i class="fa fa-whatsapp" aria-hidden="true"></i></li>
							<hr>
							</div> <h6 class="date"><?php echo date("d/m/Y"); ?></h6> <div class="txt-post"><?php echo get_the_content(); ?></div>
						</div>
					</div>

					<div class="tags">
						<div class="btn-tags">
							<hr>
							<p>Tags: <a href="" class="btn-tag">Nome do evento</a></p>
							<hr>
						</div>

						<div class="row btn-next-and-prev">
							<div class="col-md-2 btn-fotos"><a href="" class="btn-gray">Anterior</a></div>
							<div class="col-md-8"></div>
							<div class="col-md-2 btn-fotos"><a href="" class="btn-gray">Próximo</a></div>
						</div>
					</div>
				</div>
				<div class="col-md-1"></div>
				<?php
				endwhile;
				endif;
				wp_reset_query(); ?>
			</div>
		</div>
	</section>

	<?php get_template_part('template_parts/cadastre-se'); ?>
    <?php get_template_part('template_parts/instagram'); ?>
</main>

<?php get_footer(); ?>
