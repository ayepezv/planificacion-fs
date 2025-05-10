<?php
namespace FacturaScripts\Plugins\Planificacion\Controllers;

use FacturaScripts\Core\Lib\ExtendedController\ListController;
use FacturaScripts\Plugins\Planificacion\Model\Actividad;
use FacturaScripts\Plugins\Planificacion\Model\Puesto;

class ListPuestoActividad extends ListController
{
    public function getPageData(): array
    {
        $pageData = parent::getPageData();
        $pageData['menu'] = 'planificacion';
        $pageData['title'] = 'Puestos y Actividades';
        $pageData['icon'] = 'fas fa-users';
        return $pageData;
    }

    protected function createViews()
    {
        $this->addView('ListPuestoActividad', 'PuestoActividad', 'puesto_actividad', 'fas fa-users');
        $this->addSearchFields('ListPuestoActividad', ['puesto_id', 'actividad_id']);
        $this->addOrderBy('ListPuestoActividad', ['puesto_id'], 'puesto');
        $this->addOrderBy('ListPuestoActividad', ['actividad_id'], 'actividad');

        // Filtros
        $this->addFilterSelect('ListPuestoActividad', 'puesto_id', 'puesto', 'puesto_id', $this->getPuestos());
        $this->addFilterSelect('ListPuestoActividad', 'actividad_id', 'actividad', 'actividad_id', $this->getActividades());
    }

    private function getPuestos(): array
    {
        $puestos = [];
        $puestoModel = new Puesto();
        foreach ($puestoModel->all([], ['nombre' => 'ASC']) as $puesto) {
            $puestos[$puesto->id] = $puesto->nombre;
        }
        return $puestos;
    }

    private function getActividades(): array
    {
        $actividades = [];
        $actividadModel = new Actividad();
        foreach ($actividadModel->all([], ['nombre' => 'ASC']) as $actividad) {
            $actividades[$actividad->id] = $actividad->nombre;
        }
        return $actividades;
    }
}