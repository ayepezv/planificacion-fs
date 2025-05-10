<?php
namespace FacturaScripts\Plugins\Planificacion\Controllers;

use FacturaScripts\Core\Lib\ExtendedController\ListController;
use FacturaScripts\Plugins\Planificacion\Model\Proceso;
use FacturaScripts\Plugins\Planificacion\Model\Subproceso;

class ListProcedimientos extends ListController
{
    public function getPageData(): array
    {
        $pageData = parent::getPageData();
        $pageData['menu'] = 'planificacion';
        $pageData['title'] = 'Procedimientos';
        $pageData['icon'] = 'fas fa-file-alt';
        return $pageData;
    }

    protected function createViews()
    {
        $this->addView('ListProcedimiento', 'Procedimiento', 'procedimientos', 'fas fa-file-alt');
        
        // Campos de búsqueda
        $this->addSearchFields('ListProcedimiento', ['nombre', 'descripcion']);
        
        // Ordenación
        $this->addOrderBy('ListProcedimiento', ['nombre'], 'nombre');
        $this->addOrderBy('ListProcedimiento', ['subproceso_id'], 'subproceso');
        $this->addOrderBy('ListProcedimiento', ['id'], 'id');

        // Filtros
        $this->addFilterSelect('ListProcedimiento', 'subproceso_id', 'subproceso', 'subproceso_id', $this->getSubprocesos());
        $this->addFilterSelect('ListProcedimiento', 'proceso_id', 'proceso', 'proceso_id', $this->getProcesos());

        // Columnas
        $this->views['ListProcedimiento']->addOrderBy(['nombre'], 'nombre', 1);
        $this->views['ListProcedimiento']->addOrderBy(['subproceso_id'], 'subproceso');
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

    private function getProcesos(): array
    {
        $procesos = [];
        $procesoModel = new Proceso();
        foreach ($procesoModel->all([], ['nombre' => 'ASC']) as $proceso) {
            $procesos[$proceso->id] = $proceso->nombre;
        }
        return $procesos;
    }
}