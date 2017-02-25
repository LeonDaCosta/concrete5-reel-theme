<?php
namespace Concrete\Package\Reel;

use Package;

defined('C5_EXECUTE') or die(_("Access Denied."));

class Controller extends Package
{
	protected $pkgHandle = 'reel';
	protected $appVersionRequired = '5.7.1';
	protected $pkgVersion = '0.0.1';
	protected $pkgAllowsFullContentSwap = true;

	public function getPackageDescription()
	{
    	return t("A simple magazine theme based on the Bootstrap framework.");
	}

	public function getPackageName()
	{
    	return t("Reel");
	}
}
?>
