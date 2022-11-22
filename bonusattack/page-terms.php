<?php /* Template Name: Terms */ ?>
<?php headerBlock(); ?>
<div class="page-container">
    <div class="description-container">
        <?php $description = get_field('description_block'); ?>
        <?php if (!empty($description)) : ?>
            <div class="description-content page-terms">
                <?php echo $description; ?>
            </div>
        <?php endif; ?>
    </div>
</div>
<?php get_footer(); ?>

