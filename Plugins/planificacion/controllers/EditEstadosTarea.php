<?php
namespace FacturaScripts\Plugins\Planificacion\Controllers;

use FacturaScripts\Core\Lib\ExtendedController\EditController;

class EditEstadosTarea extends EditController
{
    public function getModelClassName(): string
    {
        return 'EstadoTarea';
    }

    public function getPageData(): array
    {
        $pageData = parent::getPageData();
        $pageData['menu'] = 'planificacion';
        $pageData['title'] = 'Estado de Tarea';
        $pageData['icon'] = 'fas fa-check-square';
        return $pageData;
    }
}