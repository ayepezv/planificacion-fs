<?php
namespace FacturaScripts\Plugins\Planificacion\Controllers;

use FacturaScripts\Core\Lib\ExtendedController\ListController;

class ListPacItems extends ListController
{
    public function getPageData(): array
    {
        $pageData = parent::getPageData();
        $pageData['menu'] = 'planificacion';
        $pageData['title'] = 'PAC - Ítems';
        $pageData['icon'] = 'fas fa-list-alt';
        return $pageData;
    }

    protected function createViews()
    {
        $this->addView('ListPacItem', 'PacItem', 'pac_items', 'fas fa-list-alt');
        $this->addSearchFields('ListPacItem', ['codigo', 'descripcion']);
        $this->addOrderBy('ListPacItem', ['codigo'], 'código');
        $this->addOrderBy('ListPacItem', ['descripcion'], 'descripción');
    }
}