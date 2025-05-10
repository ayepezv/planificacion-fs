<?php
namespace FacturaScripts\Plugins\Planificacion\Controllers;

use FacturaScripts\Core\Lib\ExtendedController\ListController;

class ListTareasAsignadas extends ListController
{
    public function getPageData(): array
    {
        $pageData = parent::getPageData();
        $pageData['menu'] = 'planificacion';
        $pageData['title'] = 'Tareas Asignadas';
        $pageData['icon'] = 'fas fa-tasks';
        return $pageData;
    }

    protected function createViews()
    {
        $this->addView('ListTareaAsignada', 'TareaAsignada', 'tareas', 'fas fa-tasks');
        $this->addSearchFields('ListTareaAsignada', ['descripcion']);
        $this->addOrderBy('ListTareaAsignada', ['fecha_asignacion'], 'fecha', 2);
        $this->addOrderBy('ListTareaAsignada', ['fecha_limite'], 'fecha límite');
        $this->addOrderBy('ListTareaAsignada', ['estado_id'], 'estado');
        
        // Añadimos filtros
        $this->addFilterSelect('ListTareaAsignada', 'estado_id', 'estado', 'estado_id', $this->getEstados());
        $this->addFilterSelect('ListTareaAsignada', 'prioridad_id', 'prioridad', 'prioridad_id', $this->getPrioridades());
        $this->addFilterSelect('ListTareaAsignada', 'usuario_id', 'usuario', 'usuario_id', $this->getUsuarios());
    }

    private function getEstados(): array
    {
        $estados = [];
        $estadoModel = new EstadoTarea();
        foreach ($estadoModel->all() as $estado) {
            $estados[$estado->id] = $estado->nombre;
        }
        return $estados;
    }

    private function getPrioridades(): array
    {
        $prioridades = [];
        $prioridadModel = new Prioridad();
        foreach ($prioridadModel->all() as $prioridad) {
            $prioridades[$prioridad->id] = $prioridad->nombre;
        }
        return $prioridades;
    }

    private function getUsuarios(): array
    {
        $usuarios = [];
        $usuarioModel = new User();
        foreach ($usuarioModel->all() as $usuario) {
            $usuarios[$usuario->id] = $usuario->nick;
        }
        return $usuarios;
    }
}