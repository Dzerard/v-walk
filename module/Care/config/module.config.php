<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'Care\Controller\Care' => 'Care\Controller\CareController',
        ),
    ),

    // The following section is new and should be added to your file
    'router' => array(
        'routes' => array(
            'care' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/care[/:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Care\Controller\Care',
                        'action'     => 'index',
                    ),
                ),
            ),
        ),
    ),

    'view_manager' => array(
        'template_path_stack' => array(
            'care' => __DIR__ .'/../view',
        ),
    ),
);