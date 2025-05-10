<?php
namespace FacturaScripts\Plugins\Planificacion\Controllers;

use FacturaScripts\Core\Lib\ExtendedController\ListController;

class ListTiposTarea extends ListController
{
    public function getPageData(): array
    {
        $pageData = parent::getPageData();
        $pageData['menu'] = 'planificacion';
        $pageData['title'] = 'Tipos de Tarea';
        $pageData['icon'] = 'fas fa-cogs';
        return $pageData;
    }

    protected function createViews()
    {
        $this->addView('ListTipoTarea', 'TipoTarea', 'tipos_tarea', 'fas fa-cogs');
        $this->addSearchFields('ListTipoTarea', ['nombre', 'descripcion']);
        $this->addOrderBy('ListTipoTarea', ['nombre'], 'nombre');
    }
}