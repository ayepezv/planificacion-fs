<?php
namespace FacturaScripts\Plugins\Planificacion\Controllers;

use FacturaScripts\Core\Lib\ExtendedController\ListController;

class ListPrioridades extends ListController
{
    public function getPageData(): array
    {
        $pageData = parent::getPageData();
        $pageData['menu'] = 'planificacion';
        $pageData['title'] = 'Prioridades';
        $pageData['icon'] = 'fas fa-sort-amount-down';
        return $pageData;
    }

    protected function createViews()
    {
        $this->addView('ListPrioridad', 'Prioridad', 'prioridades', 'fas fa-sort-amount-down');
        $this->addSearchFields('ListPrioridad', ['nombre']);
        $this->addOrderBy('ListPrioridad', ['nombre'], 'nombre');
        $this->addOrderBy('ListPrioridad', ['nivel'], 'nivel');
    }
}