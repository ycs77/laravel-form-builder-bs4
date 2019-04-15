<?php if ($options['wrapper'] !== false): ?>
<div <?= $options['wrapperAttrs'] ?> >
<div class="col-lg-10 offset-lg-2">
<?php endif; ?>

    <?= Form::button($options['label'], $options['attr']) ?>
    <?php include 'help_block.php' ?>

<?php if ($options['wrapper'] !== false): ?>
</div>
</div>
<?php endif; ?>
