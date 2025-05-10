<?php
namespace FacturaScripts\Plugins\Planificacion\Controllers;

use FacturaScripts\Core\Lib\ExtendedController\ListController;
use FacturaScripts\Plugins\Planificacion\Model\Subproceso;

class ListPartidasPresupuestarias extends ListController
{
    public function getPageData(): array
    {
        $pageData = parent::getPageData();
        $pageData['menu'] = 'planificacion';
        $pageData['title'] = 'Partidas Presupuestarias';
        $pageData['icon'] = 'fas fa-money-bill';
        return $pageData;
    }

    protected function createViews()
    {
        $this->addView('ListPartidaPresupuestaria', 'PartidaPresupuestaria', 'partidas_presupuestarias', 'fas fa-money-bill');
        $this->addSearchFields('ListPartidaPresupuestaria', ['codigo', 'nombre']);
        $this->addOrderBy('ListPartidaPresupuestaria', ['codigo'], 'código');
        $this->addOrderBy('ListPartidaPresupuestaria', ['nombre'], 'nombre');
        $this->addOrderBy('ListPartidaPresupuestaria', ['anio'], 'año');

        // Filtros
        $this->addFilterSelect('ListPartidaPresupuestaria', 'subproceso_id', 'subproceso', 'subproceso_id', $this->getSubprocesos());
    }

    private function getSubprocesos(): array
    {
        $subprocesos = [];
        $subprocesoModel = new Subproceso();
        foreach ($subprocesoModel->all([], ['nombre' => 'ASC']) as $subproceso) {
            $subprocesos[$subproceso->id] = $subproceso->nombre;
        }
        return $subprocesos;
    }
}