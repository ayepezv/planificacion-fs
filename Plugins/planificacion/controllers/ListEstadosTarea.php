<?php
namespace FacturaScripts\Plugins\Planificacion\Controllers;

use FacturaScripts\Core\Lib\ExtendedController\ListController;

class ListEstadosTarea extends ListController
{
    public function getPageData(): array
    {
        $pageData = parent::getPageData();
        $pageData['menu'] = 'planificacion';
        $pageData['title'] = 'Estados de Tarea';
        $pageData['icon'] = 'fas fa-check-square';
        return $pageData;
    }

    protected function createViews()
    {
        $this->addView('ListEstadoTarea', 'EstadoTarea', 'estados_tarea', 'fas fa-check-square');
        $this->addSearchFields('ListEstadoTarea', ['nombre']);
        $this->addOrderBy('ListEstadoTarea', ['nombre'], 'nombre');
    }
}