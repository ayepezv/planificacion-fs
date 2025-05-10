<?php
namespace FacturaScripts\Plugins\Planificacion\Controllers;

use FacturaScripts\Core\Lib\ExtendedController\ListController;
use FacturaScripts\Plugins\Planificacion\Model\Actividad;
use FacturaScripts\Plugins\Planificacion\Model\PartidaPresupuestaria;

class ListActividadPartida extends ListController
{
    public function getPageData(): array
    {
        $pageData = parent::getPageData();
        $pageData['menu'] = 'planificacion';
        $pageData['title'] = 'Actividades y Partidas';
        $pageData['icon'] = 'fas fa-link';
        return $pageData;
    }

    protected function createViews()
    {
        $this->addView('ListActividadPartida', 'ActividadPartida', 'actividad_partida', 'fas fa-link');
        $this->addSearchFields('ListActividadPartida', ['actividad_id', 'partida_id']);
        $this->addOrderBy('ListActividadPartida', ['actividad_id'], 'actividad');
        $this->addOrderBy('ListActividadPartida', ['partida_id'], 'partida');

        // Filtros
        $this->addFilterSelect('ListActividadPartida', 'actividad_id', 'actividad', 'actividad_id', $this->getActividades());
        $this->addFilterSelect('ListActividadPartida', 'partida_id', 'partida', 'partida_id', $this->getPartidas());
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

    private function getPartidas(): array
    {
        $partidas = [];
        $partidaModel = new PartidaPresupuestaria();
        foreach ($partidaModel->all([], ['nombre' => 'ASC']) as $partida) {
            $partidas[$partida->id] = $partida->nombre;
        }
        return $partidas;
    }
}