<?php
namespace FacturaScripts\Plugins\Planificacion\Controllers;

use FacturaScripts\Core\Lib\ExtendedController\EditController;

class EditPrioridades extends EditController
{
    public function getModelClassName(): string
    {
        return 'Prioridad';
    }

    public function getPageData(): array
    {
        $pageData = parent::getPageData();
        $pageData['menu'] = 'planificacion';
        $pageData['title'] = 'Prioridad';
        $pageData['icon'] = 'fas fa-sort-amount-down';
        return $pageData;
    }
}