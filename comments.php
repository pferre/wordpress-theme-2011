<div class="comments">
    <?php if (have_comments()) : ?>
    <h3 id="comments-title"><?php no_of_comments(); ?></h3>
    <ul class="commentlist">
        <?php wp_list_comments(); ?>
    </ul>
    <?php endif; ?>
</div>
