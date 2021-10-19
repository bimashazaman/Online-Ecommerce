<?php

namespace Webkul\Velocity\Repositories;

use Webkul\Core\Eloquent\Repository;
use Illuminate\Container\Container as App;
use Prettus\Repository\Traits\CacheableRepository;

class CategoryRepository extends Repository
{
    use CacheableRepository;

   /**
    * Category Repository object
    *
    * @var \Webkul\Category\Repositories\CategoryRepository
    */
    protected $categoryRepository;

    /**
     * Create a new repository instance.
     *
     * @param  \Webkul\Category\Repositories\CategoryRepository  $categoryRepository
     * @param  \Illuminate\Container\Container  $app
     * @return void
     */
    public function __construct(
        CategoryRepository $categoryRepository,
        App $app
    )
    {
        $this->categoryRepository = $categoryRepository;

        parent::__construct($app);
    }

    /**
     * Specify Model class name
     *
     * @return string
     */
    function model()
    {
        return 'Webkul\Velocity\Contracts\Category';
    }

    /**
     * Return current channel categories
     *
     * @return array
     */
    public function getChannelCategories()
    {
        $results = [];

        $velocityCategories = $this->model->all(['category_id']);

        $categoryMenues = json_decode(json_encode($velocityCategories), true);

        $categories = $this->categoryRepository->getVisibleCategoryTree(core()->getCurrentChannel()->root_category_id);

        if (isset($categories->first()->id)) {
            foreach ($categories as $category) {

                if (! empty($categoryMenues) && !in_array($category->id, array_column($categoryMenues, 'category_id'))) {
                    $results[] = [
                        'id'   => $category->id,
                        'name' => $category->name,
                    ];
                }
            }
        }
        return $results;
    }
}