<?php
namespace Concrete\Package\Bootstrap4;

use Concrete\Core\Package\Package;
use Concrete\Core\Page\Theme\Theme as PageTheme;
use Concrete\Core\Support\Facade\Facade;
use Concrete\Package\Bootstrap4\Src\Bootstrap4GridFramework;

defined('C5_EXECUTE') or die("Access Denied.");

class Controller extends Package
{
    protected $pkgHandle = 'bootstrap4';
    protected $appVersionRequired = '8.2';
    protected $pkgVersion = '1.0.0';
    protected $pkgAutoloaderRegistries = array(
        'src' => '\Concrete\Package\Bootstrap4\Src'
    );

    public function getPackageName()
    {
        return t("Bootstrap4 Website Theme");
    }

    public function getPackageDescription()
    {
        return t("Bootstrap4 Website Theme");
    }

    public function install()
    {
        $pkg = parent::install();
        $this->installThemes($pkg);
    }

    public function upgrade()
    {
        parent::upgrade();
        $pkg = Package::getByHandle($this->pkgHandle);
        $this->installThemes($pkg);
    }

    private function installThemes($pkg)
    {
        $theme = PageTheme::getByHandle('bootstrap4');
        if (!$theme || !is_object($theme)) {
            PageTheme::add('bootstrap4', $pkg)->applyToSite();
        }
    }

    public function on_start()
    {
        $app = Facade::getFacadeApplication();
        $manager = $app->make('manager/grid_framework');
        $manager->extend('bootstrap4', function($app) {
            return new Bootstrap4GridFramework();
        });
    }
}
