<?php
namespace FacturaScripts\Plugins\Planificacion\Controllers;

use FacturaScripts\Core\Lib\ExtendedController\EditController;

class EditPacItems extends EditController
{
    public function getModelClassName(): string
    {
        return 'PacItem';
    }

    public function getPageData(): array
    {
        $pageData = parent::getPageData();
        $pageData['menu'] = 'planificacion';
        $pageData['title'] = 'PAC - Ítem';
        $pageData['icon'] = 'fas fa-list-alt';
        return $pageData;
    }
}