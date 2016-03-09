<?php

return array(
    'service_manager' => array(
        'abstract_factories' => array(
            'T4web\Paginator\ViewModelAbstractFactory',
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            't4web-paginator' => __DIR__ . '/../view',
        ),
    ),
);
