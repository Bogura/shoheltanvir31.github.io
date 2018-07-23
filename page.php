<?php get_header() ?>
        <?php global $themesbazar ?>
		
  
  <!-- feature news section #################################-->  
		<section class="feature_section">
			<div class="row"> 
				<div class="col-md-12 featurecontent"> 
					<div class="col-md-8">
						
						<div class="single_details">
				
               <?php if(have_posts()) : ?>
               <?php while(have_posts()) : the_post(); ?>
                
                        
                         
					<h3 class="single_title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
					
					<p><?php the_content();?> </p> 
               
               
                 <?php endwhile;?>
                <?php endif;?>
                

               
           </div> 
		   
					</div>
					
				<!-- ################### -->
				
					<div class="col-md-4">
						<div>
								<!-- Nav tabs -->
								<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active" ><a href="#home" aria-controls="home" role="tab" data-toggle="tab" id="last"><?php echo $themesbazar['last'] ?></a></li>
						<li role="presentation" id="popular"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><?php echo $themesbazar['popular'] ?></a></li>
					</ul>

							<!-- Tab panes -->
								
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane active" id="home">
									<?php 
                    $lastnews = new WP_Query(array(
                    'post_type' => 'post',
                    'posts_per_page' => $themesbazar['lastpost'],
                    ));
                    while($lastnews->have_posts()) : $lastnews->the_post();?>
										<div class="images_title-02">
										<?php the_post_thumbnail() ?>
											<h3 class="heading_03"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
										</div>
									<?php endwhile;?>	
									</div>
								
								
									<div role="tabpanel" class="tab-pane" id="profile">
									<?php
								query_posts('meta_key=post_views_count&orderby=meta_value_num&order=DESC');
								if (have_posts()) : while (have_posts()) : the_post();
									?>
										<div class="images_title-02">
										<?php the_post_thumbnail() ?>
											<h3 class="heading_03"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
										</div>
									 <?php
								endwhile; endif;
								wp_reset_query();
									?>						
									</div>
								</div>
							</div>
							
							<?php dynamic_sidebar('single_widget')?>
							
					</div>
				</div>
			</div>
			
		
	
			<?php get_footer(); ?>