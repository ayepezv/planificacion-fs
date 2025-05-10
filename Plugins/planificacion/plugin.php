<?php
namespace FacturaScripts\Plugins\Planificacion;

use FacturaScripts\Core\Base\MenuManager;
use FacturaScripts\Core\Plugin;

class Planificacion extends Plugin
{
    public function init()
    {
        parent::init();
        $this->loadRoutes();
    }

    private function loadRoutes()
    {
        // Menú principal de Planificación
        $this->addMenu('planificacion', [
            'name' => 'Planificación',
            'icon' => 'fas fa-project-diagram'
        ]);

        // Submenú: Estructura Organizacional
        $this->addSubmenu('planificacion', [
            'name' => 'Estructura',
            'icon' => 'fas fa-sitemap',
            'submenu' => [
                [
                    'name' => 'Procesos',
                    'url' => 'ListProcesos',
                ],
                [
                    'name' => 'Subprocesos',
                    'url' => 'ListSubprocesos',
                ],
                [
                    'name' => 'Procedimientos',
                    'url' => 'ListProcedimientos',
                ],
                [
                    'name' => 'Actividades',
                    'url' => 'ListActividades',
                ]
            ]
        ]);

        // Submenú: Recursos Humanos
        $this->addSubmenu('planificacion', [
            'name' => 'Recursos Humanos',
            'icon' => 'fas fa-users',
            'submenu' => [
                [
                    'name' => 'Puestos',
                    'url' => 'ListPuestos',
                ],
                [
                    'name' => 'Asignación de Actividades',
                    'url' => 'ListPuestoActividad',
                ]
            ]
        ]);

        // Submenú: Presupuesto
        $this->addSubmenu('planificacion', [
            'name' => 'Presupuesto',
            'icon' => 'fas fa-money-bill',
            'submenu' => [
                [
                    'name' => 'Partidas Presupuestarias',
                    'url' => 'ListPartidasPresupuestarias',
                ],
                [
                    'name' => 'Actividades y Partidas',
                    'url' => 'ListActividadPartida',
                ],
                [
                    'name' => 'PAC',
                    'url' => 'ListPacItems',
                ]
            ]
        ]);

        // Submenú: Gestión de Tareas
        $this->addSubmenu('planificacion', [
            'name' => 'Tareas',
            'icon' => 'fas fa-tasks',
            'submenu' => [
                [
                    'name' => 'Tipos de Tarea',
                    'url' => 'ListTiposTarea',
                ],
                [
                    'name' => 'Tareas Asignadas',
                    'url' => 'ListTareasAsignadas',
                ],
                [
                    'name' => 'Estados de Tarea',
                    'url' => 'ListEstadosTarea',
                ],
                [
                    'name' => 'Prioridades',
                    'url' => 'ListPrioridades',
                ]
            ]
        ]);

        // Submenú: Documentación
        $this->addSubmenu('planificacion', [
            'name' => 'Documentación',
            'icon' => 'fas fa-file-alt',
            'submenu' => [
                [
                    'name' => 'Adjuntos',
                    'url' => 'ListAdjuntos',
                ],
                [
                    'name' => 'Justificaciones',
                    'url' => 'ListJustificaciones',
                ]
            ]
        ]);
    }

    private function addMenu(string $name, array $params)
    {
        MenuManager::addMenu($name, $params['name'], $params['url'] ?? '', $params['icon'] ?? '');
    }

    private function addSubmenu(string $parent, array $params)
    {
        if (isset($params['submenu'])) {
            foreach ($params['submenu'] as $item) {
                MenuManager::addSubMenu(
                    $parent,
                    $params['name'],
                    $item['name'],
                    $item['url'],
                    $item['icon'] ?? ''
                );
            }
        } else {
            MenuManager::addSubMenu(
                $parent,
                $params['name'],
                $params['name'],
                $params['url'],
                $params['icon'] ?? ''
            );
        }
    }

    public function update()
    {
        parent::update();
    }
}