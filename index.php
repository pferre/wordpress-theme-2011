<?php get_header(); ?>
<div id="content">
    <div class="container">
        <?php while (have_posts()) : the_post(); ?>
        <article>
            <h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            <span class="entry-author">Posted by <strong><?php the_author_link(); ?></strong></span>
            <span class="entry-date"><?php the_date(); ?> @ <?php the_time('G:i'); ?></span>
            <div class="entry-content"><?php the_content(); ?></div>
        </article>
        <?php endwhile; ?>
    </div>
</div>
<aside class="side_bar"><?php get_sidebar(); ?></aside>
<?php get_footer(); ?>
