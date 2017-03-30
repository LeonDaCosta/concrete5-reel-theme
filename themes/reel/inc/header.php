<?php defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('inc/header_top.php');
?>
<header>
  <nav>
    <section class="container">
        <div class="row">
            <div class="col-sm-4 col-xs-6">

            </div>
            <div class="<?php if ($displayThirdColumn) { ?>col-sm-5 col-xs-6<?php } else { ?>col-sm-8 col-xs-6<?php } ?>">

            </div>
            <?php if ($displayThirdColumn) { ?>
                <div class="col-sm-3 col-xs-12"><?php $as->display(); ?></div>
            <?php } ?>
        </div>
    </section>
  </nav>
</header>
