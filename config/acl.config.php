<?php
return array(
    'AD' => array(
        'Application\\Controller\\Index' => array(
            'index' => 'allow',
        ),
        'Application\\Controller\\Config' => array(
            'index' => 'deny',
            'edit' => 'deny',
        ),
        'Application\\Controller\\Facility' => array(
            'index' => 'allow',
            'add' => 'allow',
            'edit' => 'allow',
            'get-facility-name' => 'allow',
        ),
        'Application\\Controller\\Roles' => array(
            'index' => 'allow',
            'add' => 'allow',
            'edit' => 'allow',
        ),
        'Application\\Controller\\SpiV3' => array(
            'index' => 'allow',
            'approve-status' => 'allow',
            'download-pdf' => 'allow',
            'edit' => 'allow',
        ),
        'Application\\Controller\\Users' => array(
            'index' => 'allow',
            'add' => 'allow',
            'edit' => 'allow',
        ),
    ),
    'SA' => array(
        'Application\\Controller\\Index' => array(
            'index' => 'allow',
        ),
        'Application\\Controller\\Config' => array(
            'index' => 'allow',
            'edit-global' => 'allow',
        ),
        'Application\\Controller\\Email' => array(
            'index' => 'allow',
        ),
        'Application\\Controller\\Facility' => array(
            'index' => 'allow',
            'add' => 'allow',
            'edit' => 'allow',
            'get-facility-name' => 'allow',
        ),
        'Application\\Controller\\Roles' => array(
            'index' => 'allow',
            'add' => 'allow',
            'edit' => 'allow',
        ),
        'Application\\Controller\\SpiV3' => array(
            'index' => 'allow',
            'manage-facility' => 'allow',
            'approve-status' => 'allow',
            'corrective-action-pdf' => 'allow',
            'download-pdf' => 'allow',
            'edit' => 'allow',
        ),
        'Application\\Controller\\Users' => array(
            'index' => 'allow',
            'add' => 'allow',
            'edit' => 'allow',
        ),
    ),
    'US' => array(
        'Application\\Controller\\Index' => array(
            'index' => 'deny',
        ),
        'Application\\Controller\\Config' => array(
            'index' => 'deny',
            'edit-global' => 'deny',
        ),
        'Application\\Controller\\Facility' => array(
            'index' => 'deny',
            'add' => 'deny',
            'edit' => 'deny',
            'get-facility-name' => 'deny',
        ),
        'Application\\Controller\\Roles' => array(
            'index' => 'deny',
            'add' => 'deny',
            'edit' => 'deny',
        ),
        'Application\\Controller\\SpiV3' => array(
            'index' => 'allow',
            'manage-facility' => 'deny',
            'approve-status' => 'deny',
            'download-pdf' => 'allow',
            'edit' => 'deny',
        ),
        'Application\\Controller\\Users' => array(
            'index' => 'deny',
            'add' => 'deny',
            'edit' => 'deny',
        ),
    ),
);