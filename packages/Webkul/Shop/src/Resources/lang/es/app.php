<?php

return [
    'invalid_vat_format' => 'El ID de IVA tiene un formato incorrecto',
    'security-warning' => 'Actividad sospechosa detectada!!!',
    'nothing-to-delete' => 'Nada que eliminar',

    'layouts' => [
        'my-account' => 'Mi Cuenta',
        'profile' => 'Perfil',
        'address' => 'Dirección',
        'reviews' => 'Opiniones',
        'wishlist' => 'Lista de deseos',
        'orders' => 'Pedidos',
        'downloadable-products' => 'Productos descargables'
    ],

    'common' => [
        'error' => 'Algo ha ido mal, por favor prueba más tarde.',
        'image-upload-limit' => 'El tamaño máximo de carga de la imagen es de 2 MB',
        'no-result-found' => 'No pudimos encontrar ningún registro.'
    ],

    'home' => [
        'page-title' => config('app.name') . ' - Inicio',
        'featured-products' => 'Productos Destacados',
        'new-products' => 'Nuevos Productos',
        'verify-email' => 'Verifica tu cuenta de correo',
        'resend-verify-email' => 'Reenviar correo de verificación'
    ],

    'header' => [
        'title' => 'Cuenta',
        'dropdown-text' => 'Gestionar carrito, pedidos y lista de deseos',
        'sign-in' => 'Entrar',
        'sign-up' => 'Regístrate',
        'account' => 'Cuenta',
        'cart' => 'Carrito',
        'profile' => 'Perfil',
        'wishlist' => 'Lista de deseos',
        'logout' => 'Salir',
        'search-text' => 'Buscar productos'
    ],

    'minicart' => [
        'view-cart' => 'Ver Carrito',
        'checkout' => 'Hacer pedido',
        'cart' => 'Carrito',
        'zero' => '0'
    ],

    'footer' => [
        'subscribe-newsletter' => 'Suscribirse al Boletín Informativo',
        'subscribe' => 'Suscríbete',
        'locale' => 'Idioma',
        'currency' => 'Moneda',
    ],

    'subscription' => [
        'unsubscribe' => 'Darse de baja',
        'subscribe' => 'Suscríbete',
        'subscribed' => 'Te has suscrito al boletín',
        'not-subscribed' => 'No se pudo suscribir al boletín, inténtalo de nuevo más tarde',
        'already' => 'Ya estás suscrito a nuestra lista de suscripciones.',
        'unsubscribed' => 'Te has desuscrito',
        'already-unsub' => 'Ya estás desuscrito',
        'not-subscribed' => '¡Error! El correo no se puede enviar actualmente, inténtalo de nuevo más tarde'
    ],

    'search' => [
        'no-results' => 'No hay resultados',
        'page-title' => config('app.name') . ' - Buscar',
        'found-results' => 'Resultados de la Búsqueda',
        'found-result' => 'Resultado de la Búsqueda',
        'analysed-keywords' => 'Palabras claves Analizadas',
        'image-search-option' => 'Opción de Búsqueda de Imágenes'
    ],

    'reviews' => [
        'title' => 'Título',
        'add-review-page-title' => 'Añadir opinión',
        'write-review' => 'Escribir una opinión',
        'review-title' => 'Título de la opinión',
        'product-review-page-title' => 'Opinión del producto',
        'rating-reviews' => 'Calificación y opiniones',
        'submit' => 'ENVIAR',
        'delete-all' => 'Todas las opiniones se han eliminado con éxito',
        'ratingreviews' => ':rating calificaciones & :review opiniones',
        'star' => 'Inicio',
        'percentage' => ':percentage %',
        'id-star' => 'inicio',
        'name' => 'Nombre'
    ],

    'customer' => [
        'compare'           => [
            'text'                  => 'Comparar',
            'compare_similar_items' => 'Comparar artículos similares',
            'add-tooltip'           => 'Agregar producto para comparar lista',
            'added'                 => 'Elemento agregado con éxito a la lista de comparación',
            'already_added'         => 'Elemento ya agregado a la lista de comparación',
            'removed'               => 'Elemento eliminado con éxito de la lista de comparación',
            'removed-all'           => 'Todos los elementos eliminados correctamente de la lista de comparación',
            'empty-text'            => "No tienes ningún artículo en tu lista de comparación",
            'product_image'         => 'Imagen del Producto',
            'actions'               => 'Acciones',
        ],

        'signup-text' => [
            'account_exists' => 'Ya tienes una cuenta',
            'title' => 'Entrar'
        ],

        'signup-form' => [
            'page-title' => 'Cliente - Formulario de registro',
            'title' => 'Regístrate',
            'firstname' => 'Nombre',
            'lastname' => 'Apellido',
            'email' => 'Email',
            'password' => 'Contraseña',
            'confirm_pass' => 'Confirma la contraseña',
            'button_title' => 'Registro',
            'agree' => 'De acuerdo',
            'terms' => 'Términos',
            'conditions' => 'Condiciones',
            'using' => 'Mediante el uso de este sitio web',
            'agreement' => 'Acuerdo',
            'subscribe-to-newsletter' => 'Suscríbete al boletín',
            'success' => 'Cuenta creada exitosamente',
            'success-verify' => 'Cuenta creada con éxito, se ha enviado un correo electrónico para su verificación.',
            'success-verify-email-unsent' => 'Cuenta creada correctamente, pero no se envió el correo electrónico de verificación',
            'failed' => '¡Error! No se puede crear su cuenta, intente nuevamente más tarde',
            'already-verified' => 'Su cuenta ya está verificada o intente enviar un nuevo correo electrónico de verificación nuevamente',
            'verification-not-sent' => '¡Error! Problema al enviar el correo electrónico de verificación, intente nuevamente más tarde',
            'verification-sent' => 'El correo de verificación ha sido enviado',
            'verified' => 'Su cuenta ha sido verificada, intente iniciar sesión ahora',
            'verify-failed' => 'No podemos verificar su cuenta de correo',
            'dont-have-account' => 'No tienes cuenta con nosotros',
            'customer-registration' => 'Registrado con éxito'
        ],

        'login-text' => [
            'no_account' => 'No tienes una cuenta',
            'title' => 'Regístrate',
        ],

        'login-form' => [
            'page-title' => 'Cliente-Formulario de registro',
            'title' => 'Entrar',
            'email' => 'Correo electrónico',
            'password' => 'Contraseña',
            'forgot_pass' => '¿Has olvidado la contraseña?',
            'button_title' => 'Entrar',
            'remember' => 'Recuérdame',
            'footer' => '© Copyright :year Webkul Software, All rights reserved',
            'invalid-creds' => 'Por favor, verifica tus credenciales e intenta de nuevo',
            'verify-first' => 'Verifica tu correo electrónico primero',
            'not-activated' => 'La activación de la cuenta será aprovada por el administrador',
            'resend-verification' => 'Se ha reenviado un correo de verificación'
        ],

        'forgot-password' => [
            'title' => 'Recuperar contraseña',
            'email' => 'Correo electrónico',
            'submit' => 'ENVIAR',
            'page_title' => 'Cliente - Formulario de contraseña olvidada'
        ],

        'reset-password' => [
            'title' => 'Restablecer contraseña',
            'email' => 'Correo registrado',
            'password' => 'Contraseña',
            'confirm-password' => 'Confirma la contraseña',
            'back-link-title' => 'Reinicia sesión',
            'submit-btn-title' => 'Restablecer contraseña'
        ],

        'account' => [
            'dashboard' => 'Cliente - Editar perfil',
            'menu' => 'Menu',

            'general' => [
                'no' => 'No',
                'yes' => 'si',
            ],

            'profile' => [
                'index' => [
                    'page-title' => 'Cliente - Perfil',
                    'title' => 'Perfil',
                    'edit' => 'Editar',
                ],

                'edit-success' => 'Perfil actualizado exitosamente',
                'edit-fail' => '¡Error! El perfil no puede ser actualizado, por favor, inténtalo más tarde',
                'unmatch' => 'La anterior contraseña no coincide',

                'fname' => 'Nombre',
                'lname' => 'Apellido',
                'gender' => 'Género',
                'other' => 'Otro',
                'male' => 'Masculino',
                'female' => 'Hembra',
                'dob' => 'Fecha de nacimiento',
                'phone' => 'Móvil',
                'email' => 'Correo electrónico',
                'opassword' => 'Contraseña anterior',
                'password' => 'Contraseña',
                'cpassword' => 'Confirma la contraseña',
                'submit' => 'Perfil actualizado',

                'edit-profile' => [
                    'title' => 'Editar Perfil',
                    'page-title' => 'Cliente - Formulario de edición de perfil'
                ]
            ],

            'address' => [
                'index' => [
                    'page-title' => 'Cliente - Dirección',
                    'title' => 'Dirección',
                    'add' => 'Añadir Dirección',
                    'edit' => 'Editar',
                    'empty' => 'No tienes ninguna dirección guardada, por favor, crea una clicando en el enlace de abajo',
                    'create' => 'Crear Dirección',
                    'delete' => 'Eliminar',
                    'make-default' => 'Elegir por defecto',
                    'default' => 'Por defecto',
                    'contact' => 'Contacto',
                    'confirm-delete' =>  '¿Quieres eleminar esta dirección?',
                    'default-delete' => 'La dirección por defecto no puede ser cambiada',
                    'enter-password' => 'Ingresa tu contraseña.',
                ],

                'create' => [
                    'page-title' => 'Cliente - Formulario de dirección',
                    'company_name' => 'Nombre de la empresa',
                    'first_name' => 'Nombres',
                    'last_name' => 'Apellidos',
                    'vat_id' => 'ID de IVA',
                    'vat_help_note' => '[Nota: Utilice el Código de País con el ID de IVA Ej. INV01234567891]',
                    'title' => 'Añadir dirección',
                    'street-address' => 'Calle',
                    'country' => 'País',
                    'state' => 'Estado',
                    'select-state' => 'Selecciona una región, estado o provincia',
                    'city' => 'Ciudad',
                    'postcode' => 'Código postal',
                    'phone' => 'Teléfono',
                    'submit' => 'Guardar dirección',
                    'success' => 'La dirección se ha añadido correctamente.',
                    'error' => 'La dirección no se puede añadir.'
                ],

                'edit' => [
                    'page-title' => 'Cliente - Editar Dirección',
                    'company_name' => 'Nombre de la empresa',
                    'first_name' => 'Nombres',
                    'last_name' => 'Apellidos',
                    'vat_id' => 'ID de IVA',
                    'title' => 'Editar Dirección',
                    'street-address' => 'Calle',
                    'submit' => 'Guardar dirección',
                    'success' => 'Dirección actualizada exitosamente.',
                ],

                'delete' => [
                    'success' => 'Dirección eliminada correctamente',
                    'failure' => 'La dirección no puede ser eliminada',
                    'wrong-password' => 'Contraseña Incorrecta !'
                ],

                'default-address' => 'Default Address',
            ],

            'order' => [
                'index' => [
                    'page-title' => 'Cliente - Pedidos',
                    'title' => 'Pedidos',
                    'order_id' => 'ID Pedido',
                    'date' => 'Fecha',
                    'status' => 'Estado',
                    'total' => 'Total',
                    'order_number' => 'Número de pedido',
                    'processing' => 'Porcesando',
                    'completed' => 'Completado',
                    'canceled' => 'Cancelado',
                    'closed' => 'Cerrado',
                    'pending' => 'Pendiente',
                    'pending-payment' => 'Pago Pendiente',
                    'fraud' => 'Fraude'
                ],

                'view' => [
                    'page-tile' => 'Pedido #:order_id',
                    'info' => 'Información',
                    'placed-on' => 'Ubicación',
                    'products-ordered' => 'Productos pedidos',
                    'invoices' => 'Facturas',
                    'shipments' => 'Envíos',
                    'SKU' => 'SKU',
                    'product-name' => 'Nombre',
                    'qty' => 'Qty',
                    'item-status' => 'Estado Item',
                    'item-ordered' => 'Ordenado (:qty_ordered)',
                    'item-invoice' => 'Facturado (:qty_invoiced)',
                    'item-shipped' => 'Enviado (:qty_shipped)',
                    'item-canceled' => 'Cancelado (:qty_canceled)',
                    'item-refunded' => 'Reembolsado (:qty_refunded)',
                    'price' => 'Precio',
                    'total' => 'Total',
                    'subtotal' => 'Total parcial',
                    'shipping-handling' => 'Envío y Manipulación',
                    'tax' => 'Impuesto',
                    'discount' => 'Descuento',
                    'tax-percent' => 'Porcentaje de Impuestos',
                    'tax-amount' => 'Importe del Impuesto',
                    'discount-amount' => 'Cantidad descontada',
                    'grand-total' => 'Total',
                    'total-paid' => 'Total 	Pago',
                    'total-refunded' => 'Total Reembolsado',
                    'total-due' => 'Total',
                    'shipping-address' => 'Dirección de envío',
                    'billing-address' => 'Dirección de facturación',
                    'shipping-method' => 'Método de envío',
                    'payment-method' => 'Forma de pago',
                    'individual-invoice' => 'Factura #:invoice_id',
                    'individual-shipment' => 'Envío #:shipment_id',
                    'print' => 'Imprimir',
                    'invoice-id' => 'Factura Id',
                    'order-id' => 'Pedido Id',
                    'order-date' => 'Fecha pedido',
                    'invoice-date' => 'Fecha de la factura',
                    'payment-terms' => 'Términos de pago',
                    'bill-to' => 'Facturar a',
                    'ship-to' => 'Envío a',
                    'contact' => 'Contacto',
                    'refunds' => 'Reembolsos',
                    'individual-refund' => 'Reembolso #:refund_id',
                    'adjustment-refund' => 'Reembolso de Ajuste',
                    'adjustment-fee' => 'Tarifa de Ajuste',
                    'cancel-btn-title' => 'Cancelar',
                    'tracking-number' => 'Número de Rastreo',
                    'cancel-confirm-msg' => 'Estás segura de que deseas cancelar este pedido ?'
                ]
            ],

            'wishlist' => [
                'page-title' => 'Cliente - Lista de deseos',
                'title' => 'Lista de deseos',
                'deleteall' => 'Eliminar todo',
                'moveall' => 'Mover todos los productos al carrito',
                'move-to-cart' => 'Mover al carrito',
                'error' => 'No se puede agregar el producto a la lista de deseos por problemas desconocidos, inténtelo más tarde.',
                'add' => 'Artículo añadido a la lista de deseos',
                'remove' => 'Artículo eliminado de la lista de deseos',
                'add-wishlist-text'     => 'Añadir producto a la lista de deseos',
                'remove-wishlist-text'  => 'Eliminar producto de la lista de deseos',
                'moved' => 'Artículo movido al carrito exitosamente',
                'option-missing' => 'Faltan opciones del producto, por lo que el artículo no se puede mover a la lista de deseos.',
                'move-error' => 'El artículo no se puede añadir a la lista de deseos, por favor inténtalo más tarde',
                'success' => 'Artículo añadido a la lista de deseos',
                'failure' => 'El artículo no se puede añadir a la lista de deseos, por favor inténtalo más tarde',
                'already' => 'Este artículo ya está en tu lista de deseos.',
                'removed' => 'Artículo eliminado de la lista de deseos',
                'remove-fail' => 'El artículo no se puede eliminar de la lista de deseos, por favor inténtalo más tarde',
                'empty' => 'No tiene ningún producto en su lista de deseos',
                'remove-all-success' => 'Todos los artículos de su lista de deseos han sido eliminados',
            ],

            'downloadable_products' => [
                'title' => 'Productos descargables',
                'order-id' => 'Solicitar ID',
                'date' => 'Fecha',
                'name' => 'Título',
                'status' => 'Estado',
                'pending' => 'Pendiente',
                'available' => 'Disponible',
                'expired' => 'Caducado',
                'remaining-downloads' => 'Descargas restantes',
                'unlimited' => 'Ilimitado',
                'download-error' => 'El enlace de descarga ha caducado.',
                'payment-error' => 'No se ha realizado el pago de esta descarga.'
            ],

            'review' => [
                'index' => [
                    'title' => 'Opiniones',
                    'page-title' => 'Cliente - Opiniones'
                ],

                'view' => [
                    'page-tile' => 'Opinión #:id',
                ],

                'delete' => [
                    'confirmation-message' => '¿Seguro que quieres eliminar esta crítica?',
                ],

                'delete-all' => [
                    'title' => 'Eliminar todos',
                    'confirmation-message' => '¿Estás segura de que quieres eliminar todas las críticas?',
                ],
            ]
        ]
    ],

    'products' => [
        'layered-nav-title' => 'Comprado por',
        'price-label' => 'Tan bajo como',
        'remove-filter-link-title' => 'Limpiar todo',
        'filter-to' => 'a',
        'sort-by' => 'Ordenar por',
        'from-a-z' => 'De A-Z',
        'from-z-a' => 'De Z-A',
        'newest-first' => 'Lo más nuevo primero',
        'oldest-first' => 'Lo más antiguo primero',
        'cheapest-first' => 'Lo más barato primero',
        'expensive-first' => 'Lo más caro primero',
        'show' => 'Mostrar',
        'pager-info' => 'Mostrar :showing of :total Items',
        'description' => 'Descripción',
        'specification' => 'Especificaciones',
        'total-reviews' => ':total Reseñas',
        'total-rating' => ':total_rating Calidifcaciones & :total_reviews Reseñas',
        'by' => 'Por :name',
        'up-sell-title' => '¡Hemos encontrado otros productos que te pueden gustar!',
        'related-product-title' => 'Productos relacionados',
        'cross-sell-title' => 'Más opciones',
        'reviews-title' => 'Calificación y Opiniones',
        'write-review-btn' => 'Escribe una valoración',
        'choose-option' => 'Elige una opción',
        'sale' => 'En venta',
        'new' => 'Nuevo',
        'empty' => 'No hay prodcutos disponibles en esta categoría',
        'add-to-cart' => 'Añadir al carrito',
        'book-now' => 'reservar ahora',
        'buy-now' => 'Comprar ahora',
        'whoops' => 'Ups!',
        'quantity' => 'Cantidad',
        'in-stock' => 'Disponible',
        'out-of-stock' => 'No disponible',
        'view-all' => 'Ver todo',
        'select-above-options' => 'Primero selecciona las opciones de arriba.',
        'less-quantity' => 'La cantidad no debe ser inferior a uno.',
        'samples' => 'Muestras',
        'links' => 'Enlaces',
        'sample' => 'Muestra',
        'name' => 'Nombre',
        'qty' => 'Cant',
        'starting-at' => 'A partir de',
        'customize-options' => 'Personalizar Opciones',
        'choose-selection' => 'Elija una selección',
        'your-customization' => 'Tu Personalización',
        'total-amount' => 'Cantidad Total',
        'none' => 'Ninguno',
        'available-for-order' => 'Disponible para ordenar',
        'settings' => 'Ajustes',
        'compare_options' => 'Comparar Optiones',
        'wishlist-options' => 'Opciones de Lista de Deseos',
        'offers' => 'Compre :qty por :price cada uno y ahorre :discount%',
        'tax-inclusive' => 'Inclusive of all taxes',
    ],

    // 'reviews' => [
    //     'empty' => 'Aún no has valorado ningún producto'
    // ]

    'buynow' => [
        'no-options' => 'Por favor selecciona las opciones antes de comprar este producto'
    ],


    'checkout' => [
        'cart' => [
            'integrity' => [
                'missing_fields' =>'Faltan algunos campos requeridos',
                'missing_options' =>'Faltan opciones configurables del producto',
                'missing_links' => 'Faltan enlaces descargables para este producto.',
                'qty_missing' => 'Al menos un producto debe tener más de 1 cantidad.',
                'qty_impossible' => 'No se pueden agregar más de uno de estos productos al carrito.'
            ],
            'create-error' => 'Se encontraron problemas con el carrito de compra',
            'title' => 'Carrito de la compra',
            'empty' => 'Tu carrito está vacía',
            'update-cart' => 'Actualizar carrito',
            'continue-shopping' => 'Seguir comprando',
            'proceed-to-checkout' => 'Continuar con el pago',
            'remove' => 'Eliminar',
            'remove-link' => 'Eliminar',
            'move-to-wishlist' => 'Mover a la lista de deseos',
            'move-to-wishlist-success' => 'Artículo movido a la lista de deseos',
            'move-to-wishlist-error' => 'El artículo no se puede añadir a la lista de deseos, por favor inténtalo más tarde',
            'add-config-warning' => 'Por favor selecciona las opciones antes de añadir al carrito',
            'quantity' => [
                'quantity' => 'Cantidad',
                'success' => 'Carrito actualizada exitosamente',
                'illegal' => 'La cantidad no puede ser menor que uno',
                'inventory_warning' => 'La cantidad solicitada no está disponible, inténtelo más tarde',
                'error' => 'No se pueden actualizar los artículos, inténtelo más tarde'
            ],
            'item' => [
                'error_remove' => 'No hay artículos que eliminar en el carrito',
                'success' => 'El artículo se añadió al carrito',
                'success-remove' => 'El artículo se eliminó del carrito',
                'error-add' => 'El artículo no se puede añadir al carrito, inténtelo más tarde',
                'inactive' => 'Un artículo está inactivo y se eliminó del carrito.',
                'inactive-add' => 'El artículo inactivo no se puede agregar al carrito',
            ],
            'quantity-error' => 'La cantidad solicitada no está disponible',
            'cart-subtotal' => 'Total parcial',
            'cart-remove-action' => '¿Realmente quieres hacer esto?',
            'partial-cart-update' => 'Solo algunos de los productos se han actualizado',
            'event' => [
                'expired' => 'This event has been expired.'
            ],
            'minimum-order-message' => 'La cantidad mínima de pedido es :amount'
        ],

        'onepage' => [
            'title' => 'Revisar',
            'information' => 'Información',
            'shipping' => 'Envío',
            'payment' => 'Pago',
            'complete' => 'Completado',
            'review' => 'revisión',
            'billing-address' => 'Dirección de facturación',
            'sign-in' => 'Entrar',
            'company-name' => 'Nombre de la empresa',
            'first-name' => 'Nombre',
            'last-name' => 'Apellido',
            'email' => 'Correo electrónico',
            'address1' => 'Calle',
            'city' => 'Ciudad',
            'state' => 'Estado',
            'select-state' => 'Selecciona una región, estado o provincia',
            'postcode' => 'Código postal',
            'phone' => 'Teléfono',
            'country' => 'País',
            'order-summary' => 'Resumen del pedido',
            'shipping-address' => 'Dirección de envío',
            'use_for_shipping' => 'Enviar a esta dirección',
            'continue' => 'Continuar',
            'shipping-method' => 'Seleccionar método de envío',
            'payment-methods' => 'Seleccionar forma de pago',
            'payment-method' => 'Forma de pago',
            'summary' => 'Resumen del pedido',
            'price' => 'Precio',
            'quantity' => 'Cantidad',
            'billing-address' => 'Dirección de facturación',
            'shipping-address' => 'Dirección de envío',
            'contact' => 'Contacto',
            'place-order' => 'Realizar pedido',
            'new-address' => 'Añadir nueva dirección',
            'save_as_address' => 'Guardar dirección',
            'apply-coupon' => 'Aplicar cupón',
            'amt-payable' => 'Cantidad a pagar',
            'got' => 'Tienes',
            'free' => 'Gratis',
            'coupon-used' => 'Cupón usado',
            'applied' => 'Aplicado',
            'back' => 'Volver',
            'cash-desc' => 'Pago en efectivo',
            'money-desc' => 'Transferencia bancaria',
            'paypal-desc' => 'Paypal',
            'free-desc' => 'Envío gratuito',
            'flat-desc' => 'Esta es una tarifa plana',
            'password' => 'Contraseña',
            'login-exist-message' => 'Ya tienes una cuenta con nosotros, inicia sesión o continúa como invitado .',
            'enter-coupon-code' => 'Introduce el Código de Cupón'
        ],

        'total' => [
            'order-summary' => 'Resumen del pedido',
            'sub-total' => 'Artículos',
            'grand-total' => 'Total',
            'delivery-charges' => 'Gastos de envío',
            'tax' => 'Impuesto',
            'discount' => 'Descuento',
            'price' => 'Precio',
            'disc-amount' => 'Cantidad descontada',
            'new-grand-total' => 'Total',
            'coupon' => 'Cupón',
            'coupon-applied' => 'Cupón aplicado',
            'remove-coupon' => 'Eliminar cupón',
            'cannot-apply-coupon' => 'No se puede aplicar cupón',
            'invalid-coupon' => 'El código del cupón no es válido.',
            'success-coupon' => 'Código del cupón aplicado correctamente.',
            'coupon-apply-issue' => 'No se puede aplicar el código de cupón.'
        ],

        'success' => [
            'title' => 'Pedido realizado correctamente',
            'thanks' => '¡Gracias por tu pedido!',
            'order-id-info' => 'Tu número de pedido es #:order_id',
            'info' => 'Te enviaremos un correo electrónico con los detalles de tu pedido y la información de seguimiento'
        ]
    ],

    'mail' => [
        'order' => [
            'subject' => 'Nuevo pedido confirmado',
            'heading' => '¡Pedido Confirmado!',
            'dear' => 'Estimado/a :customer_name',
            'dear-admin' => 'Estimado/a :admin_name',
            'greeting' => 'Gracias por tu pedido :order_id placed on :created_at',
            'greeting-admin' => 'Pedido número :order_id placed on :created_at',
            'summary' => 'Resumen del pedido',
            'shipping-address' => 'Dirección de envío',
            'billing-address' => 'Dirección de facturación',
            'contact' => 'Contacto',
            'shipping' => 'Método de envío',
            'payment' => 'Forma de pago',
            'price' => 'Precio',
            'quantity' => 'Cantidad',
            'subtotal' => 'Subtotal',
            'shipping-handling' => 'Envío y manipulación',
            'tax' => 'Impuesto',
            'discount' => 'Descuento',
            'grand-total' => 'Total',
            'final-summary' => 'Gracias por tu pedido, te enviaremos el número de seguimiento una vez enviado',
            'help' => 'Si necesitas ayuda contacta con nosotros a través de :support_email',
            'thanks' => '¡Gracias!',

            'comment' => [
                'subject' => 'Nuevo comentario agregado a su pedido #:order_id',
                'dear' => 'Querida :customer_name',
                'final-summary' => 'Gracias por mostrar su interés en nuestra tienda.',
                'help' => 'Si necesita algún tipo de ayuda, contáctenos en :support_email',
                'thanks' => '¡Gracias!',
            ],

            'cancel' => [
                'subject' => 'Confirmación de pedido cancelado',
                'heading' => 'Pedido cancelado',
                'dear' => 'Estimado/a :customer_name',
                'greeting' => 'Tu pedido con el número #:order_id placed on :created_at ha sido cancelado',
                'summary' => 'Resumen del pedido',
                'shipping-address' => 'Dirección de envío',
                'billing-address' => 'Dirección de facturación',
                'contact' => 'Contacto',
                'shipping' => 'Método de envío',
                'payment' => 'Forma de pago',
                'subtotal' => 'Subtotal',
                'shipping-handling' => 'Envío y Manipulación',
                'tax' => 'Impuesto',
                'discount' => 'Descuento',
                'grand-total' => 'Total',
                'final-summary' => 'Gracias por tu interés en nuestra tienda',
                'help' => 'Si necesitas ayuda contacta con nosotros a través de :support_email',
                'thanks' => '¡Gracias!',
            ]
        ],
        'invoice' => [
            'heading' => 'Tu factura #:invoice_id para el pedido#:order_id',
            'subject' => 'Factura de tu pedido #:order_id',
            'summary' => 'Resumen de pedido',
        ],
        'shipment' => [
            'heading' => 'El Envío #:shipment_id  ha sido generado por el pedido #:order_id',
            'inventory-heading' => 'Nuevo envío #:shipment_id ha sido generado por el pedido #:order_id',
            'subject' => 'Envío de tu pedido #:order_id',
            'inventory-subject' => 'Nuevo envío ha sido generado por el pedido #:order_id',
            'summary' => 'Resumen de envío',
            'carrier' => 'Transportista',
            'tracking-number' => 'Número de seguimiento',
            'greeting' => 'El pedido :order_id ha sido enviado a :created_at',
        ],

        'refund' => [
            'heading' => 'Su Reembolso #:refund_id para el pedido #:order_id',
            'subject' => 'Reembolso de su pedido #:order_id',
            'summary' => 'Resumen de Reembolso',
            'adjustment-refund' => 'Reembolso de Ajuste',
            'adjustment-fee' => 'Tarifa de Ajuste'
        ],

        'forget-password' => [
            'subject' => 'Restablecer contraseña cliente',
            'dear' => 'Estimado/a :name',
            'info' => 'Te hemos enviado este correo porque hemos recibido una solicitud para restablecer la contraseña de tu cuenta',
            'reset-password' => 'Restablecer contraseña',
            'final-summary' => 'Si no has solicitado cambiar de contraseña, ninguna acción es requerida por tu parte.',
            'thanks' => '¡Gracias!'
        ],
        'update-password' => [
            'subject' => 'Contraseña actualiza',
            'dear' => 'Estimado/a :name',
            'info' => 'Está recibiendo este correo electrónico porque ha actualizado su contraseña.',
            'thanks' => '¡Gracias!'
        ],
        'customer' => [
            'new' => [
                'dear' => 'Estimado/a :customer_name',
                'username-email' => 'Nombre de usuario/Email',
                'subject' => 'Nuevo registro de cliente',
                'password' => 'Contraseña',
                'summary' => 'Tu cuenta ha sido creada.
                Los detalles de tu cuenta puedes verlos abajo: ',
                'thanks' => '¡Gracias!',
            ],

            'registration' => [
                'subject' => 'Nuevo registro de cliente',
                'customer-registration' => 'Cliente registrado exitosamente',
                'dear' => 'Estimado/a :customer_name',
                'dear-admin' => 'Estimado/a :admin_name',
                'greeting' => '¡Bienvenido y gracias por registrarte en Bassar!',
                'greeting-admin' => 'Tiene un nuevo registro de cliente.',
                'summary' => 'Su cuenta se ha creado con éxito y puede iniciar sesión con su dirección de correo electrónico y su contraseña. Al iniciar sesión, podrá acceder a otros servicios, incluida la revisión de pedidos anteriores, listas de deseos y la edición de la información de su cuenta.',
                'thanks' => '¡Gracias!',
            ],

            'verification' => [
                'heading' => config('app.name') . ' - Verificación por correo',
                'subject' => 'Verificación por correo',
                'verify' => 'Verifica tu cuenta',
                'summary' => 'Este mensaje es para verificar que esta dirección de mail es tuya.
                Por favor, hacer click al botón de abajo para verificar tu cuenta.'
            ],

            'subscription' => [
                'subject' => 'Subscripción mail',
                'greeting' => ' Bienvenido a ' . config('app.name') . ' - Subscripción por mail',
                'unsubscribe' => 'Darse de baja',
                'summary' => 'Gracias por ponernos en tu bandeja de entrada. Ha pasado un tiempo desde que leyó el último correo electrónico de ' . config('app.name') . ', y no queremos abrumar su bandeja de entrada. Si ya no quiere recibir
                las últimas noticias de marketing, haga clic en el botón de abajo.'
            ]
        ]
    ],

    'webkul' => [
        'copy-right' => '© Copyright :year Webkul Software, All rights reserved',
    ],

    'response' => [
        'create-success' => ':name creado correctamente.',
        'update-success' => ':name actualizado correctamente.',
        'delete-success' => ':name eliminado correctamente.',
        'submit-success' => ':name enviado correctamente.'
    ],
];
