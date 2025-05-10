<?php
namespace FacturaScripts\Plugins\Planificacion\Controllers;

use FacturaScripts\Core\Lib\ExtendedController\EditController;

class EditProceso extends EditController
{
    public function getModelClassName(): string
    {
        return 'Proceso';
    }

    public function getPageData(): array
    {
        $pageData = parent::getPageData();
        $pageData['menu'] = 'planificacion';
        $pageData['title'] = 'Proceso';
        $pageData['icon'] = 'fas fa-project-diagram';
        return $pageData;
    }
}