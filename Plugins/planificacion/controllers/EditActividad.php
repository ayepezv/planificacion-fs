<?php
namespace FacturaScripts\Plugins\Planificacion\Controllers;

use FacturaScripts\Core\Lib\ExtendedController\EditController;

class EditActividad extends EditController
{
    public function getModelClassName(): string
    {
        return 'Actividad';
    }

    public function getPageData(): array
    {
        $pageData = parent::getPageData();
        $pageData['menu'] = 'planificacion';
        $pageData['title'] = 'Actividad';
        $pageData['icon'] = 'fas fa-tasks';
        return $pageData;
    }

    protected function createViews()
    {
        parent::createViews();

        // Añadimos una pestaña para ver los puestos relacionados
        $this->addListView('ListPuestoActividad', 'PuestoActividad', 'puestos-asignados', 'fas fa-users');
        $this->views['ListPuestoActividad']->addSearchFields(['puesto_id']);
        $this->views['ListPuestoActividad']->addOrderBy(['puesto_id'], 'puesto');

        // Añadimos una pestaña para ver las partidas presupuestarias relacionadas
        $this->addListView('ListActividadPartida', 'ActividadPartida', 'partidas-presupuestarias', 'fas fa-money-bill');
        $this->views['ListActividadPartida']->addSearchFields(['partida_id']);
        $this->views['ListActividadPartida']->addOrderBy(['partida_id'], 'partida');
    }
}