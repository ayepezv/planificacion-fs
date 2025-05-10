<?php
namespace FacturaScripts\Plugins\Planificacion\Controllers;

use FacturaScripts\Core\Lib\ExtendedController\EditController;

class EditAdjuntos extends EditController
{
    public function getModelClassName(): string
    {
        return 'Adjunto';
    }

    public function getPageData(): array
    {
        $pageData = parent::getPageData();
        $pageData['menu'] = 'planificacion';
        $pageData['title'] = 'Adjunto';
        $pageData['icon'] = 'fas fa-paperclip';
        return $pageData;
    }
}