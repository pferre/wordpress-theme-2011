<?php get_header(); ?>
<div id="content">
    <div class="container">
        <?php if (have_posts()) : the_post(); ?>
        <article>
            <h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            <div class="entry-content"><?php the_content(); ?></div>
        </article>
        <?php endif; ?>
    </div>
</div>
<aside class="side_bar"><?php get_sidebar(); ?></aside>
<?php get_footer(); ?>