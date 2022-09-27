<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\Product
 *
 * @property int $product_id
 * @property string $code
 * @property string $name
 * @property string $brand
 * @property string $tax
 * @property string $price
 * @property string $images
 * @property int $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Product newModelQuery()
 * @method static Builder|Product newQuery()
 * @method static Builder|Product query()
 * @method static Builder|Product whereBrand($value)
 * @method static Builder|Product whereCode($value)
 * @method static Builder|Product whereCreatedAt($value)
 * @method static Builder|Product whereImages($value)
 * @method static Builder|Product whereName($value)
 * @method static Builder|Product wherePrice($value)
 * @method static Builder|Product whereProductId($value)
 * @method static Builder|Product whereStatus($value)
 * @method static Builder|Product whereTax($value)
 * @method static Builder|Product whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Product extends Model
{
    use HasFactory;

    /**
     * Products table primary key
     * @var string
     */
    protected $primaryKey = 'product_id';

    /**
     * Products table name
     * @var string
     */
    protected $table = 'products';

    /**
     * Products mass assignable attributes
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'status'
    ];

    /**
     * Products default attributes
     * @var array<int, string>
     */
    protected $attributes = [
        'status' => 1
    ];
}
