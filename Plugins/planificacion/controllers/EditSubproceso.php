<?php
namespace FacturaScripts\Plugins\Planificacion\Controllers;

use FacturaScripts\Core\Lib\ExtendedController\EditController;

class EditSubproceso extends EditController
{
    public function getModelClassName(): string
    {
        return 'Subproceso';
    }

    public function getPageData(): array
    {
        $pageData = parent::getPageData();
        $pageData['menu'] = 'planificacion';
        $pageData['title'] = 'Subproceso';
        $pageData['icon'] = 'fas fa-sitemap';
        return $pageData;
    }
}