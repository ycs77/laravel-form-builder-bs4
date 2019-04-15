<?php if ($showError && isset($errors) && $errors->has($nameKey)): ?>
    <div <?= $options['errorAttrs'] ?>><?= $errors->first($nameKey) ?></div>
<?php endif; ?>
