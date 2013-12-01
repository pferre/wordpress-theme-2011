<?php get_header(); ?>
<div id="content">
    <div class="container">
        <?php the_post(); ?>
        <article>
            <h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            <span class="entry-date"><?php the_date(); ?> @ <?php the_time('G:i'); ?></span>
            <span class="entry-content"><?php the_content($more_link_text, true, ''); ?></span>
            <div class="entry-comments"><?php comment_form(); ?></div>
            <?php comments_template(); ?>
        </article>
    </div>
</div>
<aside class="side_bar"><?php get_sidebar(); ?></aside>
<?php get_footer(); ?>