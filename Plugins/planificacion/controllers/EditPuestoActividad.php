<?php
namespace FacturaScripts\Plugins\Planificacion\Controllers;

use FacturaScripts\Core\Lib\ExtendedController\EditController;

class EditPuestoActividad extends EditController
{
    public function getModelClassName(): string
    {
        return 'PuestoActividad';
    }

    public function getPageData(): array
    {
        $pageData = parent::getPageData();
        $pageData['menu'] = 'planificacion';
        $pageData['title'] = 'Puesto y Actividad';
        $pageData['icon'] = 'fas fa-users';
        return $pageData;
    }
}