<?php //65583e6f8ff037e6b6e9352047260de5
/** @noinspection all */

namespace App\Models\Order {

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\App\Models\Order\_IH_Order_C;
    use LaravelIdea\Helper\App\Models\Order\_IH_Order_QB;

    /**
     * @property int $order_id
     * @property int $user_id
     * @property int $product_id
     * @property int $quantity
     * @property bool $status
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_Order_QB onWriteConnection()
     * @method _IH_Order_QB newQuery()
     * @method static _IH_Order_QB on(null|string $connection = null)
     * @method static _IH_Order_QB query()
     * @method static _IH_Order_QB with(array|string $relations)
     * @method _IH_Order_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Order_C|Order[] all()
     * @ownLinks user_id,\App\Models\User\User,user_id|product_id,\App\Models\Product\Product,product_id
     * @mixin _IH_Order_QB
     */
    class Order extends Model {}
}
