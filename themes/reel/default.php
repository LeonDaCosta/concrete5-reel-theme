<?php
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('inc/header.php'); ?>

<section style="background-color:blue">
<?php
$a = new Area('Main');
$a->enableGridContainer();
$a->display($c);
?>

<?php
$a = new Area('Page Footer');
$a->enableGridContainer();
$a->display($c);
?>

</section>

<?php  $this->inc('inc/footer.php'); ?>
