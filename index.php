<?php get_header(); ?>
<div class="jumbotron">
  
  
  
  
  
</div>
<div class='container'>
    <div class="content mt-5">
    <h1>Travelling is a lifestyle</h1>
    <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>

            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p><?php the_time ('F j, Y g:i a');?></p>
            <div class="description"><?php the_content();?>
            </div>
            
        <?php endwhile; ?>
        <?php else :?>  
            <?php__('No Posts found'); ?>
        <?php endif; ?>
        <?php
      if(is_active_sidebar('sidebar')):
     dynamic_sidebar('sidebar');
     endif;  
?>
    </div>
    </div>

<?php get_footer(); ?>