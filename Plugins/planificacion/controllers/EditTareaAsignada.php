<?php
namespace FacturaScripts\Plugins\Planificacion\Controllers;

use FacturaScripts\Core\Lib\ExtendedController\EditController;

class EditTareaAsignada extends EditController
{
    public function getModelClassName(): string
    {
        return 'TareaAsignada';
    }

    public function getPageData(): array
    {
        $pageData = parent::getPageData();
        $pageData['menu'] = 'planificacion';
        $pageData['title'] = 'Tarea Asignada';
        $pageData['icon'] = 'fas fa-tasks';
        return $pageData;
    }

    protected function createViews()
    {
        parent::createViews();
        
        // Vista para adjuntos
        $this->addListView('ListAdjunto', 'Adjunto', 'adjuntos', 'fas fa-paperclip');
        $this->views['ListAdjunto']->addSearchFields(['nombre_archivo']);
        $this->views['ListAdjunto']->addOrderBy(['fecha_subida'], 'fecha', 2);
        
        // Vista para justificaciones
        $this->addListView('ListJustificacion', 'Justificacion', 'justificaciones', 'fas fa-exclamation-circle');
        $this->views['ListJustificacion']->addSearchFields(['motivo']);
        $this->views['ListJustificacion']->addOrderBy(['fecha_solicitud'], 'fecha', 2);
    }
}