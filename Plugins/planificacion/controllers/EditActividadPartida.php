<?php
namespace FacturaScripts\Plugins\Planificacion\Controllers;

use FacturaScripts\Core\Lib\ExtendedController\EditController;

class EditActividadPartida extends EditController
{
    public function getModelClassName(): string
    {
        return 'ActividadPartida';
    }

    public function getPageData(): array
    {
        $pageData = parent::getPageData();
        $pageData['menu'] = 'planificacion';
        $pageData['title'] = 'Actividad y Partida';
        $pageData['icon'] = 'fas fa-link';
        return $pageData;
    }
}