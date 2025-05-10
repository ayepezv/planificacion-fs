<?php
namespace FacturaScripts\Plugins\Planificacion\Controllers;

use FacturaScripts\Core\Lib\ExtendedController\ListController;

class ListAdjuntos extends ListController
{
    public function getPageData(): array
    {
        $pageData = parent::getPageData();
        $pageData['menu'] = 'planificacion';
        $pageData['title'] = 'Adjuntos';
        $pageData['icon'] = 'fas fa-paperclip';
        return $pageData;
    }

    protected function createViews()
    {
        $this->addView('ListAdjunto', 'Adjunto', 'adjuntos', 'fas fa-paperclip');
        $this->addSearchFields('ListAdjunto', ['nombre_archivo']);
        $this->addOrderBy('ListAdjunto', ['fecha_subida'], 'fecha');
    }
}