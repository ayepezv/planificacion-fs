<?php
namespace FacturaScripts\Plugins\Planificacion\Controllers;

use FacturaScripts\Core\Lib\ExtendedController\ListController;

class ListSubprocesos extends ListController
{
    public function getPageData(): array
    {
        $pageData = parent::getPageData();
        $pageData['menu'] = 'planificacion';
        $pageData['title'] = 'Subprocesos';
        $pageData['icon'] = 'fas fa-sitemap';
        return $pageData;
    }

    protected function createViews()
    {
        $this->addView('ListSubproceso', 'Subproceso', 'subprocesos', 'fas fa-sitemap');
        $this->addSearchFields('ListSubproceso', ['nombre', 'descripcion']);
        $this->addOrderBy('ListSubproceso', ['nombre'], 'nombre');
        $this->addOrderBy('ListSubproceso', ['proceso_id'], 'proceso');
        
        // Añadimos filtros
        $this->addFilterSelect('ListSubproceso', 'proceso_id', 'proceso', 'proceso_id', $this->getProcesos());
    }

    private function getProcesos(): array
    {
        $procesos = [];
        $procesoModel = new Proceso();
        foreach ($procesoModel->all() as $proceso) {
            $procesos[$proceso->id] = $proceso->nombre;
        }
        return $procesos;
    }
}