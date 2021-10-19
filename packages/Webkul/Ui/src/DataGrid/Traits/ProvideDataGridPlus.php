<?php

namespace Webkul\Ui\DataGrid\Traits;

trait ProvideDataGridPlus
{
    /**
     * Get json data.
     *
     * @return object
     */
    public function toJson()
    {
        $this->addColumns();

        $this->prepareActions();

        $this->prepareMassActions();

        $this->prepareQueryBuilder();

        $this->getCollection();

        $this->formatCollection();

        return response()->json($this->prepareData());
    }

    /**
     * Prepare data for json response.
     *
     * @return array
     */
    public function prepareData()
    {
        return [
            'index'             => $this->index,
            'records'           => $this->collection,
            'columns'           => $this->completeColumnDetails,
            'actions'           => $this->actions,
            'enableActions'     => $this->enableAction,
            'massActions'       => $this->massActions,
            'enableMassActions' => $this->enableMassAction,
            'paginated'         => $this->paginate,
            'itemsPerPage'      => $this->itemsPerPage,
            'extraFilters'      => $this->getExtraFilters(),
            'translations'      => $this->getTranslations(),
        ];
    }

    /**
     * Get extra filters.
     *
     * @return array
     */
    public function getExtraFilters()
    {
        $necessaryExtraFilters = [
            'current' => $this->getCurrentExtraFilterValue()
        ];

        $checks = [
            'channels'        => core()->getAllChannels(),
            'locales'         => $necessaryExtraFilters['current']['locales'],
            'customer_groups' => core()->getAllCustomerGroups()
        ];

        foreach ($checks as $key => $val) {
            if (in_array($key, $this->extraFilters)) {
                $necessaryExtraFilters[$key] = $val;
            }
        }

        return $necessaryExtraFilters;
    }

    /**
     * Get current extra filter values.
     *
     * @return array
     */
    public function getCurrentExtraFilterValue()
    {
        /* all locales */
        $locales = core()->getAllLocales();

        /* request and fallback handling */
        $locale = core()->getRequestedLocaleCode();
        $channel = core()->getRequestedChannelCode();
        $customer_group = core()->getRequestedCustomerGroupCode();

        /* handling cases for new locale if not present in current channel */
        if ($channel !== 'all') {
            $channelLocales = app('Webkul\Core\Repositories\ChannelRepository')->findOneByField('code', $channel)->locales;

            if ($channelLocales->contains('code', $locale)) {
                $locales = $channelLocales;
            } else {
                $channel = 'all';
            }
        }

        /* current values */
        return [
            'locales'        => $locales,
            'locale'         => $locale,
            'channel'        => $channel,
            'customer_group' => $customer_group
        ];
    }

    /**
     * Get all translations for json response fully controlled by backend.
     *
     * @return array
     */
    public function getTranslations()
    {
        return [
            'allChannels'         => __('admin::app.admin.system.all-channels'),
            'allLocales'          => __('admin::app.admin.system.all-locales'),
            'allCustomerGroups'   => __('admin::app.admin.system.all-customer-groups'),
            'search'              => __('ui::app.datagrid.search'),
            'searchTitle'         => __('ui::app.datagrid.search-title'),
            'channel'             => __('ui::app.datagrid.channel'),
            'locale'              => __('ui::app.datagrid.locale'),
            'customerGroup'       => __('ui::app.datagrid.customer-group'),
            'itemsPerPage'        => __('ui::app.datagrid.items-per-page'),
            'filter'              => __('ui::app.datagrid.filter'),
            'column'              => __('ui::app.datagrid.column'),
            'condition'           => __('ui::app.datagrid.condition'),
            'contains'            => __('ui::app.datagrid.contains'),
            'ncontains'           => __('ui::app.datagrid.ncontains'),
            'equals'              => __('ui::app.datagrid.equals'),
            'nequals'             => __('ui::app.datagrid.nequals'),
            'greater'             => __('ui::app.datagrid.greater'),
            'less'                => __('ui::app.datagrid.less'),
            'greatere'            => __('ui::app.datagrid.greatere'),
            'lesse'               => __('ui::app.datagrid.lesse'),
            'true'                => __('ui::app.datagrid.true'),
            'false'               => __('ui::app.datagrid.false'),
            'value'               => __('ui::app.datagrid.value'),
            'valueHere'           => __('ui::app.datagrid.value-here'),
            'numericValueHere'    => __('ui::app.datagrid.numeric-value-here'),
            'apply'               => __('ui::app.datagrid.apply'),
            'submit'              => __('ui::app.datagrid.submit'),
            'actions'             => __('ui::app.datagrid.actions'),
            'filterFieldsMissing' => __('ui::app.datagrid.filter-fields-missing'),
            'zeroIndex'           => __('ui::app.datagrid.zero-index'),
            'clickOnAction'       => __('ui::app.datagrid.click_on_action'),
            'norecords'           => __('ui::app.datagrid.no-records'),
            'massActionDelete'    => __('ui::app.datagrid.massaction.delete'),
        ];
    }
}
