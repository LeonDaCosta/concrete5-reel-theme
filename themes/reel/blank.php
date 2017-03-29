<?php
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('inc/header_top.php'); ?>

<main>
<?php
$a = new Area('Main');
$a->enableGridContainer();
$a->display($c);
?>
</main>

<?php  $this->inc('inc/footer_bottom.php'); ?>
