<?php

Route::group(['middleware' => ['web', 'locale', 'theme', 'currency']], function () {
    Route::namespace('Webkul\Velocity\Http\Controllers\Shop')->group(function () {
        /**
         * Cart merger middleware. This middleware will take care of the items
         * which are deactivated at the time of buy now functionality. If somehow
         * user redirects without completing the checkout then this will merge
         * full cart.
         *
         * If some routes are not able to merge the cart, then place the route in this
         * group.
         */
        Route::group(['middleware' => ['cart.merger']], function () {
            /**
             * Authenticated routes. All the routes inside this, will be passed
             * by customer middleware.
             */
            Route::group(['middleware' => ['customer']], function () {
                /**
                 * Customer compare products.
                 */
                Route::get('/customer/account/comparison', 'ComparisonController@getComparisonList')
                    ->name('velocity.customer.product.compare')
                    ->defaults('_config', [
                        'view' => 'shop::customers.account.compare.index'
                    ]);
            });

            /**
             * Guest compare products.
             */
            Route::get('/comparison', 'ComparisonController@getComparisonList')
                ->name('velocity.product.compare')
                ->defaults('_config', [
                    'view' => 'shop::guest.compare.index'
                ]);

            Route::put('/comparison', 'ComparisonController@addCompareProduct')
                ->name('customer.product.add.compare');

            Route::delete('/comparison', 'ComparisonController@deleteComparisonProduct')
                ->name('customer.product.delete.compare');

            /**
             * Categories and products.
             */
            Route::get('/product-details/{slug}', 'ShopController@fetchProductDetails')
                ->name('velocity.shop.product');

            Route::get('/categorysearch', 'ShopController@search')
                ->name('velocity.search.index')
                ->defaults('_config', [
                    'view' => 'shop::search.search'
                ]);

            Route::get('/fancy-category-details/{slug}', 'ShopController@fetchFancyCategoryDetails')
                ->name('velocity.fancy.category.details');

            Route::get('/category-details', 'ShopController@categoryDetails')
                ->name('velocity.category.details');

            Route::get('/category-products/{categoryId}', 'ShopController@getCategoryProducts')
                ->name('velocity.category.products');
        });

        /**
         * Cart, coupons and checkout.
         */
        Route::get('/mini-cart', 'CartController@getMiniCartDetails')
            ->name('velocity.cart.get.details');

        Route::post('/cart/add', 'CartController@addProductToCart')
            ->name('velocity.cart.add.product');

        Route::delete('/cart/remove/{id}', 'CartController@removeProductFromCart')
            ->name('velocity.cart.remove.product');

        Route::get('/categories', 'ShopController@fetchCategories')
            ->name('velocity.categoriest');

        Route::get('/items-count', 'ShopController@getItemsCount')
            ->name('velocity.product.item-count');

        Route::get('/detailed-products', 'ShopController@getDetailedProducts')
            ->name('velocity.product.details');
    });
});
