<?php

return [
    /**
     * Order Settings
     */
    [
        'key'  => 'sales.orderSettings',
        'name' => 'admin::app.admin.system.order-settings',
        'sort' => 3,
    ], [
        'key'    => 'sales.orderSettings.order_number',
        'name'   => 'admin::app.admin.system.orderNumber',
        'sort'   => 0,
        'fields' => [
            [
                'name'          => 'order_number_prefix',
                'title'         => 'admin::app.admin.system.order-number-prefix',
                'type'          => 'text',
                'validation'    => false,
                'channel_based' => true,
                'locale_based'  => true,
            ],
            [
                'name'          => 'order_number_length',
                'title'         => 'admin::app.admin.system.order-number-length',
                'type'          => 'text',
                'validation'    => 'numeric',
                'channel_based' => true,
                'locale_based'  => true,
            ],
            [
                'name'          => 'order_number_suffix',
                'title'         => 'admin::app.admin.system.order-number-suffix',
                'type'          => 'text',
                'validation'    => false,
                'channel_based' => true,
                'locale_based'  => true,
            ],
            [
                'name'          => 'order_number_generator_class',
                'title'         => 'admin::app.admin.system.order-number-generator-class',
                'type'          => 'text',
                'validation'    => false,
                'channel_based' => true,
                'locale_based'  => true,
            ],
        ]
    ], [
        'key'    => 'sales.orderSettings.minimum-order',
        'name'   => 'admin::app.admin.system.minimum-order',
        'sort'   => 1,
        'fields' => [
            [
                'name'          => 'minimum_order_amount',
                'title'         => 'admin::app.admin.system.minimum-order-amount',
                'type'          => 'text',
                'validation'    => 'decimal',
                'channel_based' => true,
                'locale_based'  => true,
            ],
        ]
    ],

    /**
     * Invoice Settings
     */
    [
        'key'  => 'sales.invoice_setttings',
        'name' => 'admin::app.admin.system.invoice-settings',
        'sort' => 4,
    ], [
        'key'    => 'sales.invoice_setttings.invoice_number',
        'name'   => 'admin::app.admin.system.invoice-number',
        'sort'   => 0,
        'fields' => [
            [
                'name'          => 'invoice_number_prefix',
                'title'         => 'admin::app.admin.system.invoice-number-prefix',
                'type'          => 'text',
                'validation'    => false,
                'channel_based' => true,
                'locale_based'  => true,
            ],
            [
                'name'          => 'invoice_number_length',
                'title'         => 'admin::app.admin.system.invoice-number-length',
                'type'          => 'text',
                'validation'    => 'numeric',
                'channel_based' => true,
                'locale_based'  => true,
            ],
            [
                'name'          => 'invoice_number_suffix',
                'title'         => 'admin::app.admin.system.invoice-number-suffix',
                'type'          => 'text',
                'validation'    => false,
                'channel_based' => true,
                'locale_based'  => true,
            ],
            [
                'name'          => 'invoice_number_generator_class',
                'title'         => 'admin::app.admin.system.invoice-number-generator-class',
                'type'          => 'text',
                'validation'    => false,
                'channel_based' => true,
                'locale_based'  => true,
            ],
        ]
    ], [
        'key'    => 'sales.invoice_setttings.payment_terms',
        'name'   => 'admin::app.admin.system.payment-terms',
        'sort'   => 1,
        'fields' => [
            [
                'name'          => 'due_duration',
                'title'         => 'admin::app.admin.system.due-duration',
                'type'          => 'text',
                'validation'    => 'numeric',
                'channel_based' => true,
            ],
        ]
    ], [
        'key'    => 'sales.invoice_setttings.invoice_slip_design',
        'name'   => 'admin::app.admin.system.invoice-slip-design',
        'sort'   => 2,
        'fields' => [
            [
                'name'          => 'logo',
                'title'         => 'admin::app.admin.system.logo',
                'type'          => 'image',
                'validation'    => 'mimes:bmp,jpeg,jpg,png,webp',
                'channel_based' => true,
            ],
        ]
    ],
];
