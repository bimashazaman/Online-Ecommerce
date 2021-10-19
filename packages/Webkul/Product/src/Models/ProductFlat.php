<?php

namespace Webkul\Product\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use Webkul\Product\Contracts\ProductFlat as ProductFlatContract;

class ProductFlat extends Model implements ProductFlatContract
{
    use Searchable;

    protected $table = 'product_flat';

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    public $timestamps = false;

    /**
     * Get the index name for the model.
     *
     * @return string
     */
    public function searchableAs()
    {
        return 'products_index';
    }

    /**
     * Retrieve type instance
     *
     * @return AbstractType
     */
    public function getTypeInstance()
    {
        return $this->product->getTypeInstance();
    }

    /**
     * Get the product attribute family that owns the product.
     */
    public function getAttributeFamilyAttribute()
    {
        return $this->product->attribute_family;
    }

    /**
     * Get the product that owns the attribute value.
     */
    public function product()
    {
        return $this->belongsTo(ProductProxy::modelClass());
    }

    /**
     * Get the product variants that owns the product.
     */
    public function variants()
    {
        return $this->hasMany(static::class, 'parent_id');
    }

    /**
     * Get the product that owns the product.
     */
    public function parent()
    {
        return $this->belongsTo(self::class, 'parent_id');
    }

    /**
     * Get product type value from base product
     */
    public function getTypeAttribute()
    {
        return $this->product->type;
    }

    /**
     * @param string $key
     *
     * @return bool
     */
    public function isSaleable()
    {
        return $this->product->isSaleable();
    }

    /**
     * @return integer
     */
    public function totalQuantity()
    {
        return $this->product->totalQuantity();
    }

    /**
     * @param int $qty
     *
     * @return bool
     */
    public function haveSufficientQuantity(int $qty): bool
    {
        return $this->product->haveSufficientQuantity($qty);
    }

    /**
     * @return bool
     */
    public function isStockable()
    {
        return $this->product->isStockable();
    }

    /**
     * The images that belong to the product.
     */
    public function images()
    {
        return $this->hasMany(ProductImageProxy::modelClass(), 'product_id', 'product_id');
    }

    /**
     * The videos that belong to the product.
     */
    public function videos()
    {
        return $this->product->videos();
    }

    /**
     * Get all of the attributes for the attribute groups.
     */
    public function getImagesAttribute()
    {
        return $this->images()->get();
    }

    /**
     * The reviews that belong to the product.
     */
    public function reviews()
    {
        return (ProductReviewProxy::modelClass())
            ::where('product_reviews.product_id', $this->product_id)
            ->select('product_reviews.*');
    }

    /**
     * Get all of the reviews for the attribute groups.
     */
    public function getReviewsAttribute()
    {
        return $this->reviews()->get();
    }

    /**
     * The related products that belong to the product.
     */
    public function related_products()
    {
        return $this->product->related_products();
    }

    /**
     * The up sells that belong to the product.
     */
    public function up_sells()
    {
        return $this->product->up_sells();
    }

    /**
     * The cross sells that belong to the product.
     */
    public function cross_sells()
    {
        return $this->product->cross_sells();
    }

    /**
     * The images that belong to the product.
     */
    public function downloadable_samples()
    {
        return $this->product->downloadable_samples();
    }

    /**
     * The images that belong to the product.
     */
    public function downloadable_links()
    {
        return $this->product->downloadable_links();
    }

    /**
     * Get the grouped products that owns the product.
     */
    public function grouped_products()
    {
        return $this->product->grouped_products();
    }

    /**
     * Get the grouped products by `sort_order` key that owns the product.
     *
     * @return Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function groupedProductsBySortOrder()
    {
        return $this->product->grouped_products()->orderBy('sort_order');
    }

    /**
     * Get the bundle options that owns the product.
     */
    public function bundle_options()
    {
        return $this->product->bundle_options();
    }

    /**
     * Retrieve product attributes
     *
     * @param Group $group
     * @param bool  $skipSuperAttribute
     * @return Collection
     */
    public function getEditableAttributes($group = null, $skipSuperAttribute = true)
    {
        return $this->product->getEditableAttributes($groupId, $skipSuperAttribute);
    }
}