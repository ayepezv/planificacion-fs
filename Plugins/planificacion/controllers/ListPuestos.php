<?php
namespace FacturaScripts\Plugins\Planificacion\Controllers;

use FacturaScripts\Core\Lib\ExtendedController\ListController;

class ListPuestos extends ListController
{
    public function getPageData(): array
    {
        $pageData = parent::getPageData();
        $pageData['menu'] = 'planificacion';
        $pageData['title'] = 'Puestos';
        $pageData['icon'] = 'fas fa-user-tie';
        return $pageData;
    }

    protected function createViews()
    {
        $this->addView('ListPuesto', 'Puesto', 'puestos', 'fas fa-user-tie');
        $this->addSearchFields('ListPuesto', ['nombre', 'descripcion']);
        $this->addOrderBy('ListPuesto', ['nombre'], 'nombre');
        $this->addOrderBy('ListPuesto', ['id'], 'id');
    }
}