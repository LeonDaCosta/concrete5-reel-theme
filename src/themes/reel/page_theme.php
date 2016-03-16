<?php

namespace Application\Theme\Reel;

use Concrete\Core\Page\Theme\Theme;

class PageTheme extends Theme {

  protected $pThemeGridFrameworkHandle = "bootstrap3";

  public function registerAssets()
  {
    $this->providesAsset('javascript', 'bootstrap/*');
    $this->providesAsset('css', 'bootstrap/*');

    $this->requireAsset('css', 'font-awesome');
    $this->requireAsset('javascript', 'jquery');
    $this->requireAsset('javascript', 'picturefill');
    $this->requireAsset('javascript-conditional', 'html5-shiv');
    $this->requireAsset('javascript-conditional', 'respond');
  }

  public function getThemeName()
  {
      return t("Reel");
  }

  public function getThemeDescription()
  {
      return t("A simple magazine theme based on the Bootstrap framework.");
  }

}
?>
