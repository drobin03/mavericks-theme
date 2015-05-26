<?php use Roots\Sage\Titles; ?>

<?php if (Titles\title() != false) : ?>
  <div class="page-header">
    <h1><?= Titles\title(); ?></h1>
  </div>
<?php endif; ?>