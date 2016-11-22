<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <?php
// Define static var.
define('DRUPAL_ROOT', getcwd());
// Include bootstrap.
include_once('includes/bootstrap.inc');
// Initialize stuff.
drupal_bootstrap(DRUPAL_BOOTSTRAP_FULL);
// Clear cache.
drupal_flush_all_caches();
?>

Lorem ipsum dolor sit amet, consectetur adipisicing elit. At quaerat facere ducimus voluptatibus quis, quam aliquid odio praesentium! Aspernatur consectetur et sequi laboriosam similique, autem fugit, adipisci ipsum. Quod, repellat!

</body>
</html>

