<?php if ($showLabel && $showField): ?>
    <?php if ($options['wrapper'] !== false): ?>
    <div <?= $options['wrapperAttrs'] ?> >
    <?php endif; ?>
<?php endif; ?>

<?php if ($showLabel && $options['label'] !== false && $options['label_show']): ?>
    <?= Form::customLabel($name, $options['label'], $options['label_attr']) ?>
<?php endif; ?>

<?php if ($showField): ?>
    <?php if ($options['innerWrapper'] ?? true): ?>
        <?php if ($showLabel && $options['label'] !== false && $options['label_show']): ?>
            <div class="col-lg-10">
        <?php else: ?>
            <div class="col">
        <?php endif; ?>
    <?php endif; ?>

    <?= Form::input($type, $name, $options['value'], $options['attr']) ?>

    <?php include 'errors.php' ?>
    <?php include 'help_block.php' ?>

    <?php if ($options['innerWrapper'] ?? true): ?>
    </div>
    <?php endif; ?>
<?php endif; ?>

<?php if ($showLabel && $showField): ?>
    <?php if ($options['wrapper'] !== false): ?>
    </div>
    <?php endif; ?>
<?php endif; ?>
