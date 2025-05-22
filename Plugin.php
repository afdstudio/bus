<?php namespace Avic\Autocarros;

use Backend;
use System\Classes\PluginBase;

/**
 * Plugin Information File
 *
 * @link https://docs.octobercms.com/3.x/extend/system/plugins.html
 */
class Plugin extends PluginBase
{
    /**
     * pluginDetails about this plugin.
     */
    public function pluginDetails()
    {
        return [
            'name' => 'Autocarros',
            'description' => 'Plugin para gestão de horários e rotas de autocarros.',
            'author' => 'Avic',
            'icon' => 'icon-bus'
        ];
    }

    /**
     * register method, called when the plugin is first registered.
     */
    public function register()
    {
        //
    }

    /**
     * boot method, called right before the request route.
     */
    public function boot()
    {
        //
    }

    /**
     * registerComponents used by the frontend.
     */
    public function registerComponents()
    {

        return [
        \Avic\Autocarros\Components\CategoriaList::class => 'categoriaList',
        \Avic\Autocarros\Components\CategoriaDetail::class => 'categoriaDetail',
        \Avic\Autocarros\Components\RotaDetail::class => 'rotaDetail',
        \Avic\Autocarros\Components\CategoriaRegioes::class => 'categoriaRegioes',
        \Avic\Autocarros\Components\RegiaoRotas::class => 'regiaoRotas',

        ];
    }

    /**
     * registerPermissions used by the backend.
     */
    public function registerPermissions()
    {

        return [
            'avic.autocarros.access_autocarros' => [
                'tab'   => 'Autocarros',
                'label' => 'Aceder ao menu Autocarros'
            ],
            'avic.autocarros.manage_rotas' => [
                'tab'   => 'Autocarros',
                'label' => 'Gerir rotas'
            ],
            'avic.autocarros.manage_regioes' => [
                'tab'   => 'Autocarros',
                'label' => 'Gerir regiões'
            ],
        ];
    }

    /**
     * registerNavigation used by the backend.
     */
    public function registerNavigation()
    {
        return [
            'autocarros' => [
                'label'       => 'Autocarros',
                'url'         => Backend::url('avic/autocarros/categoria'),
                'icon'        => 'icon-bus',
                'permissions' => ['avic.autocarros.access_autocarros'],
                'order'       => 500,

                'sideMenu' => [
                    'categorias' => [
                        'label'       => 'Categorias',
                        'icon'        => 'icon-tag',
                        'url'         => Backend::url('avic/autocarros/categoria'),
                    ],
                    'regiao' => [
                        'label'       => 'Regiao',
                        'icon'        => 'icon-map-marker',
                        'url'         => Backend::url('avic/autocarros/regiao'),
                    ],
                    'rotas' => [
                        'label'       => 'Rotas',
                        'icon'        => 'icon-road',
                        'url'         => Backend::url('avic/autocarros/rotas'),
                    ],
                    'horarios' => [
                        'label'       => 'Horários',
                        'icon'        => 'icon-clock-o',
                        'url'         => Backend::url('avic/autocarros/horarios'),
                    ],
                    'stops' => [
                        'label'       => 'Stops',
                        'icon'        => 'icon-clock-o',
                        'url'         => Backend::url('avic/autocarros/stops'),
                    ],
                ],
            ]
        ];
    }


}
