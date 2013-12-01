<div class="sidebar">
    <?php if (!function_exists('dynamic_sidebar')) : ?>
        <?php dynamic_sidebar(); ?>
    <?php endif; ?>
    <ul id="left"><?php dynamic_sidebar('leftcol'); ?></ul>
    <ul id="right"><?php dynamic_sidebar('rightcol'); ?></ul>
</div>