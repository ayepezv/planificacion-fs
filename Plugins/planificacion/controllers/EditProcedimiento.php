<?php
namespace FacturaScripts\Plugins\Planificacion\Controllers;

use FacturaScripts\Core\Lib\ExtendedController\EditController;

class EditProcedimiento extends EditController
{
    public function getModelClassName(): string
    {
        return 'Procedimiento';
    }

    public function getPageData(): array
    {
        $pageData = parent::getPageData();
        $pageData['menu'] = 'planificacion';
        $pageData['title'] = 'Procedimiento';
        $pageData['icon'] = 'fas fa-file-alt';
        return $pageData;
    }

    protected function createViews()
    {
        parent::createViews();

        // Añadimos una pestaña para ver las actividades relacionadas
        $this->addListView('ListActividad', 'Actividad', 'actividades', 'fas fa-tasks');
        $this->views['ListActividad']->addSearchFields(['nombre', 'descripcion']);
        $this->views['ListActividad']->addOrderBy(['nombre'], 'nombre');
    }
}