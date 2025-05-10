<?php
namespace FacturaScripts\Plugins\Planificacion\Controllers;

use FacturaScripts\Core\Lib\ExtendedController\ListController;

class ListProcesos extends ListController
{
    public function getPageData(): array
    {
        $pageData = parent::getPageData();
        $pageData['menu'] = 'planificacion';
        $pageData['title'] = 'Procesos';
        $pageData['icon'] = 'fas fa-project-diagram';
        return $pageData;
    }

    protected function createViews()
    {
        $this->addView('ListProceso', 'Proceso', 'procesos', 'fas fa-project-diagram');
        $this->addSearchFields('ListProceso', ['nombre', 'descripcion']);
        $this->addOrderBy('ListProceso', ['nombre'], 'nombre');
        $this->addOrderBy('ListProceso', ['id'], 'id');
    }
}