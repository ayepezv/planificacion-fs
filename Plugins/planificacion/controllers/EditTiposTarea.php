<?php
namespace FacturaScripts\Plugins\Planificacion\Controllers;

use FacturaScripts\Core\Lib\ExtendedController\EditController;

class EditTiposTarea extends EditController
{
    public function getModelClassName(): string
    {
        return 'TipoTarea';
    }

    public function getPageData(): array
    {
        $pageData = parent::getPageData();
        $pageData['menu'] = 'planificacion';
        $pageData['title'] = 'Tipo de Tarea';
        $pageData['icon'] = 'fas fa-cogs';
        return $pageData;
    }
}