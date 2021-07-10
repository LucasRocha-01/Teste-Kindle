<div class="body-container">
<? get_header(); ?>

<?php while ( have_posts() ) :	the_post(); ?>

				<div class="wrapper-container">
					<div id="destinos">
						<div class="txt-destinos">
							<img class="single-Img-Post" src=<?php the_post_thumbnail(); ?> 
							<h2><?php the_title(); ?></h2>
							<P><?php the_content(); ?></P>
						</div>
					</div>
				</div>


	<?php if ( comments_open() || get_comments_number() ): ?>  
		

		<div class="wrapper-container">
			<div class="comentarios">
				<h3 class="txt-destinos">Deixe o seu comentarios</h3>
				<?php comments_template();; ?>
			</div>
		</div>

	<?php endif; ?>
<?
endwhile; // End of the loop.

get_footer();?>
</div>
