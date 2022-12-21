<?php //3ed7e7152072ef7c27dd27e720bc57c2
/** @noinspection all */

namespace App\Models\Product {

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\App\Models\Product\_IH_Brand_C;
    use LaravelIdea\Helper\App\Models\Product\_IH_Brand_QB;
    use LaravelIdea\Helper\App\Models\Product\_IH_Category_C;
    use LaravelIdea\Helper\App\Models\Product\_IH_Category_QB;
    use LaravelIdea\Helper\App\Models\Product\_IH_Product_C;
    use LaravelIdea\Helper\App\Models\Product\_IH_Product_QB;

    /**
     * @property int $id
     * @property string $logo
     * @property int $queue_no
     * @property string $brand_name
     * @property bool $status
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_Brand_QB onWriteConnection()
     * @method _IH_Brand_QB newQuery()
     * @method static _IH_Brand_QB on(null|string $connection = null)
     * @method static _IH_Brand_QB query()
     * @method static _IH_Brand_QB with(array|string $relations)
     * @method _IH_Brand_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Brand_C|Brand[] all()
     * @mixin _IH_Brand_QB
     */
    class Brand extends Model {}

    /**
     * @property int $category_id
     * @property string $name
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_Category_QB onWriteConnection()
     * @method _IH_Category_QB newQuery()
     * @method static _IH_Category_QB on(null|string $connection = null)
     * @method static _IH_Category_QB query()
     * @method static _IH_Category_QB with(array|string $relations)
     * @method _IH_Category_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Category_C|Category[] all()
     * @mixin _IH_Category_QB
     */
    class Category extends Model {}

    /**
     * @property int $product_id
     * @property string $code
     * @property string $name
     * @property string $brand
     * @property float $tax
     * @property float $price
     * @property string $images
     * @property bool $status
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_Product_QB onWriteConnection()
     * @method _IH_Product_QB newQuery()
     * @method static _IH_Product_QB on(null|string $connection = null)
     * @method static _IH_Product_QB query()
     * @method static _IH_Product_QB with(array|string $relations)
     * @method _IH_Product_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Product_C|Product[] all()
     * @foreignLinks product_id,\App\Models\Order\Order,product_id
     * @mixin _IH_Product_QB
     */
    class Product extends Model {}
}
