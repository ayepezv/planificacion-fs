<?php
namespace FacturaScripts\Plugins\Planificacion\Controllers;

use FacturaScripts\Core\Lib\ExtendedController\EditController;

class EditPuesto extends EditController
{
    public function getModelClassName(): string
    {
        return 'Puesto';
    }

    public function getPageData(): array
    {
        $pageData = parent::getPageData();
        $pageData['menu'] = 'planificacion';
        $pageData['title'] = 'Puesto';
        $pageData['icon'] = 'fas fa-user-tie';
        return $pageData;
    }

    protected function createViews()
    {
        parent::createViews();

        // Añadimos una pestaña para ver las actividades relacionadas
        $this->addListView('ListPuestoActividad', 'PuestoActividad', 'puesto_actividad', 'fas fa-tasks');
        $this->views['ListPuestoActividad']->addSearchFields(['actividad_id']);
        $this->views['ListPuestoActividad']->addOrderBy(['actividad_id'], 'actividad');
    }
}