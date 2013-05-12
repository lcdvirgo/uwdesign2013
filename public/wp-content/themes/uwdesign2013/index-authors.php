<?php
/**
 * Template name: List authors
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>


<?php $programs = get_terms('program'); ?>

<?php foreach($programs as $program): ?>

  <h2><a href="<?php echo get_term_link( $program->slug, 'program' ); ?>"><?php echo $program->name ?></a></h2>
  
  <?php $users = get_objects_in_term($program->term_id, 'program' ); ?>
  
  <?php foreach( $users as $user_id): ?>

		<h2 class="user-title"><a href="<?php echo esc_url( get_author_posts_url( $user_id ) ); ?>"><?php the_author_meta( 'display_name', $user_id ); ?></a></h2>

  <?php endforeach; ?>  

<?php endforeach; ?>




<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>