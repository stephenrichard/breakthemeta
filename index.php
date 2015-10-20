<?php get_header(); ?>
    
<<<<<<< HEAD
	<div class="container home-container">

		<div class="aside">

			<div class="filters">
				<p>Filtres</p>
				<div class="filter-button red">Azir</div>
				<div class="filter-button yellow">Tank</div>
				<div class="filter-button blue">Mid</div>
			</div>

			<div class="aside-list-items">
				<div class="champions">
					<div class="title">Champions</div>
					<div class="search-champion">
						<form action=""><input type="search" class="search-field" name="search-champ" id="search-champ" placeholder="Search champion"><button type="submit"><i class="fa fa-search"></i></button></form>
					</div>
					<div class="champ-list">
						<ul>
							<li class="champ-list-item"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/champion/Aatrox.png" alt=""><span>Aatrox</span></a></li>
							<li class="champ-list-item"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/champion/Ahri.png" alt=""><span>Ahri</span></a></li>
							<li class="champ-list-item"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/champion/Akali.png" alt=""><span>Akali</span></a></li>
							<li class="champ-list-item"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/champion/Alistar.png" alt=""><span>Alistar</span></a></li>
							<li class="champ-list-item"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/champion/Amumu.png" alt=""><span>Amumu</span></a></li>
							<li class="champ-list-item"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/champion/Anivia.png" alt=""><span>Anivia</span></a></li>
							<li class="champ-list-item"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/champion/Annie.png" alt=""><span>Annie</span></a></li>
							<li class="champ-list-item"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/champion/Ashe.png" alt=""><span>Ashe</span></a></li>
							<li class="champ-list-item active"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/champion/Azir.png" alt=""><span>Azir</span></a></li>
							<li class="champ-list-item"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/champion/Blitzcrank.png" alt=""><span>Blitzcrank</span></a></li>
							<li class="champ-list-item"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/champion/Brand.png" alt=""><span>Brand</span></a></li>
							<li class="champ-list-item"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/champion/Braum.png" alt=""><span>Braum</span></a></li>
							<li class="champ-list-item"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/champion/Caitlyn.png" alt=""><span>Caitlyn</span></a></li>
							<li class="champ-list-item"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/champion/Corki.png" alt=""><span>Corki</span></a></li>
							<li class="champ-list-item"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/champion/Darius.png" alt=""><span>Darius</span></a></li>
							<li class="champ-list-item"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/champion/Diana.png" alt=""><span>Diana</span></a></li>
							<li class="champ-list-item"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/champion/Draven.png" alt=""><span>Draven</span></a></li>
							<li class="champ-list-item"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/champion/DrMundo.png" alt=""><span>Mundo</span></a></li>
							<li class="champ-list-item"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/champion/Elise.png" alt=""><span>Elise</span></a></li>
							<li class="champ-list-item"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/champion/Evelynn.png" alt=""><span>Evelynn</span></a></li>
							<li class="champ-list-item"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/champion/Ezreal.png" alt=""><span>Ezreal</span></a></li>
							<li class="champ-list-item"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/champion/Fiora.png" alt=""><span>Fiora</span></a></li>
						</ul>
					</div>
				</div>
				<div class="lanes">
					<a class="title" href="">Lanes<i class="fa fa-plus"></i></a>
					<div class="filter-list">
						<ul>
							<li><a href="">Toplane</a></li>
							<li><a href="">Jungle</a></li>
							<li><a href="">Mid</a></li>
							<li><a href="">Bottom</a></li>
						</ul>
					</div>
				</div>
				<div class="roles">
					<a class="title" href="">Roles<i class="fa fa-plus"></i></a>
					<div class="filter-list">
						<ul>
							<li><a href="">Jungler</a></li>
							<li><a href="">Carry AP</a></li>
							<li><a href="">Carry AD</a></li>
							<li><a href="">Tank</a></li>
							<li><a href="">Support</a></li>
						</ul>
					</div>
				</div>
			</div>
			
		</div>
		
	</div>
	
=======
    <?php if (have_posts()) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<!-- Si j'ai des posts, j'affiche cette partie -->
				<h3><?php the_title(); ?></h3>
				<?php 
					the_post_thumbnail();
					the_content();
				 ?>
			<?php endwhile; ?>

	<?php else :  ?>
			<!-- Si pas de posts, j'affiche cette partie -->
			<p>Je n'ai rien à afficher</p>
	<?php endif; ?>
>>>>>>> 88872c55652f48ad22d638eddf52f17ec4438e0d

 <?php get_footer(); ?>