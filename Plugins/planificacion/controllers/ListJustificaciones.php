<?php
namespace FacturaScripts\Plugins\Planificacion\Controllers;

use FacturaScripts\Core\Lib\ExtendedController\ListController;

class ListJustificaciones extends ListController
{
    public function getPageData(): array
    {
        $pageData = parent::getPageData();
        $pageData['menu'] = 'planificacion';
        $pageData['title'] = 'Justificaciones';
        $pageData['icon'] = 'fas fa-exclamation-triangle';
        return $pageData;
    }

    protected function createViews()
    {
        $this->addView('ListJustificacion', 'Justificacion', 'justificaciones', 'fas fa-exclamation-triangle');
        $this->addSearchFields('ListJustificacion', ['motivo']);
        $this->addOrderBy('ListJustificacion', ['fecha_solicitud'], 'fecha');
    }
}