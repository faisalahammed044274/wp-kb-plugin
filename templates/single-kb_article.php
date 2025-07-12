<?php get_header(); ?>

<main>
    <h1><?php the_title(); ?></h1>
    <div class="content"><?php the_content(); ?></div>
    <p><strong>Category:</strong> <?php echo get_the_term_list(get_the_ID(), 'kb_category'); ?></p>
</main>

<?php get_footer(); ?>
