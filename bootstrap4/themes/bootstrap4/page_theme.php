<?php
namespace Concrete\Package\Bootstrap4\Theme\Bootstrap4;

use Concrete\Core\Page\Theme\Theme;

defined('C5_EXECUTE') or die("Access Denied.");

class PageTheme extends Theme
{
    protected $pThemeGridFrameworkHandle = 'bootstrap4';

    public function registerAssets()
    {
        $this->requireAsset('javascript', 'jquery');
        $this->providesAsset('javascript', 'bootstrap/*');
    }

    public function getThemeResponsiveImageMap()
    {
        return array(
            'lg' => '1600px',
            'md' => '1200px',
            'sm' => '768px',
            'xs' => '0',
        );
    }
}
