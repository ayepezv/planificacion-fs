<?php
namespace FacturaScripts\Plugins\Planificacion\Controllers;

use FacturaScripts\Core\Lib\ExtendedController\EditController;

class EditPartidaPresupuestaria extends EditController
{
    public function getModelClassName(): string
    {
        return 'PartidaPresupuestaria';
    }

    public function getPageData(): array
    {
        $pageData = parent::getPageData();
        $pageData['menu'] = 'planificacion';
        $pageData['title'] = 'Partida Presupuestaria';
        $pageData['icon'] = 'fas fa-money-bill';
        return $pageData;
    }
}