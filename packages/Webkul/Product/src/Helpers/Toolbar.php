<?php

namespace Webkul\Product\Helpers;

class Toolbar extends AbstractProduct
{
    /**
     * Returns available sort orders
     *
     * @return array
     */
    public function getAvailableOrders()
    {
        return [
            'name-asc'        => 'from-a-z',
            'name-desc'       => 'from-z-a',
            'created_at-desc' => 'newest-first',
            'created_at-asc'  => 'oldest-first',
            'price-asc'       => 'cheapest-first',
            'price-desc'      => 'expensive-first',
        ];
    }
    /**
     * Returns available limits
     *
     * @return array
     */
    public function getAvailableLimits()
    {
        if (core()->getConfigData('catalog.products.storefront.products_per_page')) {
            $pages = explode(',', core()->getConfigData('catalog.products.storefront.products_per_page'));

            return $pages;
        }

        return [9, 15, 21, 28];
    }

    /**
     * Returns the sort order url
     *
     * @param  string $key
     * @return string
     */
    public function getOrderUrl($key)
    {
        $keys = explode('-', $key);

        return $this->fullUrlWithQuery([
            'sort'  => current($keys),
            'order' => end($keys),
        ]);
    }

    /**
     * Returns the limit url
     *
     * @param  int  $limit
     * @return string
     */
    public function getLimitUrl($limit)
    {
        return $this->fullUrlWithQuery([
            'limit' => $limit,
        ]);
    }

    /**
     * Returns the mode url
     *
     * @param  string $mode
     * @return string
     */
    public function getModeUrl($mode)
    {
        return $this->fullUrlWithQuery([
            'mode' => $mode,
        ]);
    }

    /**
     * Checks if sort order is active
     *
     * @param  string $key
     * @return bool
     */
    public function isOrderCurrent($key)
    {
        $params = request()->input();
        $orderDirection = $params['order'] ?? 'asc';

        if (isset($params['sort']) && $key == $params['sort'] . '-' . $orderDirection) {
            return true;
        } elseif (! isset($params['sort'])) {
            $sortBy = core()->getConfigData('catalog.products.storefront.sort_by')
                   ? core()->getConfigData('catalog.products.storefront.sort_by')
                   : 'name-desc';

            if ($key == $sortBy) {
                return true;
            }
        }

        return false;
    }

    /**
     * Checks if limit is active
     *
     * @param  int  $limit
     * @return bool
     */
    public function isLimitCurrent($limit)
    {
        $params = request()->input();

        if (isset($params['limit']) && $limit == $params['limit']) {
            return true;
        }

        return false;
    }

    /**
     * Checks if mode is active
     *
     * @param  string  $key
     * @return bool
     */
    public function isModeActive($key)
    {
        $params = request()->input();

        $defaultMode = core()->getConfigData('catalog.products.storefront.mode')
        ? core()->getConfigData('catalog.products.storefront.mode')
        : 'grid';

        if (request()->input() == null && $key == $defaultMode) {
            return true;
        } else if (isset($params['mode']) && $key == $params['mode']) {
            return true;
        }

        return false;
    }

    /**
     * Returns the current mode
     *
     * @return string
     */
    public function getCurrentMode()
    {
        $params = request()->input();

        if (isset($params['mode'])) {
            return $params['mode'];
        }

        return core()->getConfigData('catalog.products.storefront.mode')
               ? core()->getConfigData('catalog.products.storefront.mode')
               : 'grid';
    }

    /**
     * Returns the view option if mode is set by param then it will overwrite default one and return new mode
     *
     * @return string
     */
    public function getViewOption()
    {
        /* checking default option first */
        $viewOption = core()->getConfigData('catalog.products.storefront.mode');

        /* checking mode param if exist then overwrite the default option */
        if ($this->isModeActive('grid')) {
            $viewOption = 'grid';
        }

        /* checking mode param if exist then overwrite the default option */
        if ($this->isModeActive('list')) {
            $viewOption = 'list';
        }

        /* if still default config is not set from the admin then in last needed hardcoded value */
        return $viewOption ?? 'grid';
    }

    /**
     * Returns the query string. As request built in method does not able to handle the
     * multiple question marks, this method will check the query string and append the query string.
     *
     * @param  array  $additionalQuery
     * @return string
     */
    public function fullUrlWithQuery($additionalQuery)
    {
        $queryString = request()->getQueryString();

        $additionalQueryString = http_build_query($additionalQuery);

        return $queryString
            ? url()->current() . '?' . $queryString . '&' . $additionalQueryString
            : url()->current() . '?' . $additionalQueryString;
    }
}