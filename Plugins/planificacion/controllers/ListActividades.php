<?php
namespace FacturaScripts\Plugins\Planificacion\Controllers;

use FacturaScripts\Core\Lib\ExtendedController\ListController;
use FacturaScripts\Plugins\Planificacion\Model\Proceso;
use FacturaScripts\Plugins\Planificacion\Model\Subproceso;
use FacturaScripts\Plugins\Planificacion\Model\Procedimiento;

class ListActividades extends ListController
{
    public function getPageData(): array
    {
        $pageData = parent::getPageData();
        $pageData['menu'] = 'planificacion';
        $pageData['title'] = 'Actividades';
        $pageData['icon'] = 'fas fa-tasks';
        return $pageData;
    }

    protected function createViews()
    {
        $this->addView('ListActividad', 'Actividad', 'actividades', 'fas fa-tasks');
        
        // Campos de búsqueda
        $this->addSearchFields('ListActividad', ['nombre', 'descripcion']);
        
        // Ordenación
        $this->addOrderBy('ListActividad', ['nombre'], 'nombre');
        $this->addOrderBy('ListActividad', ['procedimiento_id'], 'procedimiento');
        $this->addOrderBy('ListActividad', ['id'], 'id');

        // Filtros
        $this->addFilterSelect('ListActividad', 'procedimiento_id', 'procedimiento', 'procedimiento_id', $this->getProcedimientos());
        $this->addFilterSelect('ListActividad', 'subproceso_id', 'subproceso', 'subproceso_id', $this->getSubprocesos());
        $this->addFilterSelect('ListActividad', 'proceso_id', 'proceso', 'proceso_id', $this->getProcesos());

        // Columnas personalizadas
        $this->views['ListActividad']->addOrderBy(['nombre'], 'nombre', 1);
        $this->views['ListActividad']->addOrderBy(['procedimiento_id'], 'procedimiento');
    }

    private function getProcedimientos(): array
    {
        $procedimientos = [];
        $procedimientoModel = new Procedimiento();
        foreach ($procedimientoModel->all([], ['nombre' => 'ASC']) as $procedimiento) {
            $procedimientos[$procedimiento->id] = $procedimiento->nombre;
        }
        return $procedimientos;
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