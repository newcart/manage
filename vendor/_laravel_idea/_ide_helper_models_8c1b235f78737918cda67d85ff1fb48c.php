<?php //26ea644a268043833ffe929bc09eb15d
/** @noinspection all */

namespace App\Models\User {

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsToMany;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use Illuminate\Database\Eloquent\Relations\MorphToMany;
    use Illuminate\Notifications\DatabaseNotification;
    use Illuminate\Notifications\DatabaseNotificationCollection;
    use Illuminate\Support\Carbon;
    use Laravel\Sanctum\PersonalAccessToken;
    use LaravelIdea\Helper\App\Models\User\_IH_Role_C;
    use LaravelIdea\Helper\App\Models\User\_IH_Role_QB;
    use LaravelIdea\Helper\App\Models\User\_IH_Service_C;
    use LaravelIdea\Helper\App\Models\User\_IH_Service_QB;
    use LaravelIdea\Helper\App\Models\User\_IH_UserType_C;
    use LaravelIdea\Helper\App\Models\User\_IH_UserType_QB;
    use LaravelIdea\Helper\App\Models\User\_IH_User_C;
    use LaravelIdea\Helper\App\Models\User\_IH_User_QB;
    use LaravelIdea\Helper\Illuminate\Notifications\_IH_DatabaseNotification_QB;
    use LaravelIdea\Helper\Laravel\Sanctum\_IH_PersonalAccessToken_C;
    use LaravelIdea\Helper\Laravel\Sanctum\_IH_PersonalAccessToken_QB;

    /**
     * @property int $role_id
     * @property int $user_type_id
     * @property int $service_id
     * @property bool $can_view
     * @property bool $can_create
     * @property bool $can_update
     * @property bool $can_delete
     * @property bool $status
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_Service_C|Service[] $services
     * @property-read int $services_count
     * @method BelongsToMany|_IH_Service_QB services()
     * @property _IH_UserType_C|UserType[] $types
     * @property-read int $types_count
     * @method BelongsToMany|_IH_UserType_QB types()
     * @method static _IH_Role_QB onWriteConnection()
     * @method _IH_Role_QB newQuery()
     * @method static _IH_Role_QB on(null|string $connection = null)
     * @method static _IH_Role_QB query()
     * @method static _IH_Role_QB with(array|string $relations)
     * @method _IH_Role_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Role_C|Role[] all()
     * @ownLinks user_type_id,\App\Models\User\User,user_type_id|service_id,\App\Models\User\Service,service_id
     * @mixin _IH_Role_QB
     */
    class Role extends Model {}

    /**
     * @property int $service_id
     * @property string $code
     * @property string $name
     * @property bool $status
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_Role_C|Role[] $roles
     * @property-read int $roles_count
     * @method BelongsToMany|_IH_Role_QB roles()
     * @method static _IH_Service_QB onWriteConnection()
     * @method _IH_Service_QB newQuery()
     * @method static _IH_Service_QB on(null|string $connection = null)
     * @method static _IH_Service_QB query()
     * @method static _IH_Service_QB with(array|string $relations)
     * @method _IH_Service_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Service_C|Service[] all()
     * @foreignLinks service_id,\App\Models\User\Role,service_id
     * @mixin _IH_Service_QB
     */
    class Service extends Model {}

    /**
     * @property int $user_id
     * @property string $code
     * @property string $name
     * @property string $firstname
     * @property string $lastname
     * @property string $email
     * @property int $gsm
     * @property int $telephone
     * @property int $user_type_id
     * @property bool $status
     * @property string $last_ip
     * @property string $api_key
     * @property string $secret_key
     * @property string $password
     * @property string|null $remember_token
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property DatabaseNotificationCollection|DatabaseNotification[] $notifications
     * @property-read int $notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB notifications()
     * @property DatabaseNotificationCollection|DatabaseNotification[] $readNotifications
     * @property-read int $read_notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB readNotifications()
     * @property _IH_PersonalAccessToken_C|PersonalAccessToken[] $tokens
     * @property-read int $tokens_count
     * @method MorphToMany|_IH_PersonalAccessToken_QB tokens()
     * @property _IH_UserType_C|UserType[] $types
     * @property-read int $types_count
     * @method BelongsToMany|_IH_UserType_QB types()
     * @property DatabaseNotificationCollection|DatabaseNotification[] $unreadNotifications
     * @property-read int $unread_notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB unreadNotifications()
     * @method static _IH_User_QB onWriteConnection()
     * @method _IH_User_QB newQuery()
     * @method static _IH_User_QB on(null|string $connection = null)
     * @method static _IH_User_QB query()
     * @method static _IH_User_QB with(array|string $relations)
     * @method _IH_User_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_User_C|User[] all()
     * @ownLinks user_type_id,\App\Models\User\UserType,type_id
     * @foreignLinks user_type_id,\App\Models\User\Role,user_type_id|user_id,\App\Models\Order\Order,user_id
     * @mixin _IH_User_QB
     */
    class User extends Model {}

    /**
     * @property int $type_id
     * @property string $code
     * @property string $name
     * @property bool $status
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_Role_C|Role[] $roles
     * @property-read int $roles_count
     * @method HasMany|_IH_Role_QB roles()
     * @property _IH_User_C|User[] $users
     * @property-read int $users_count
     * @method HasMany|_IH_User_QB users()
     * @method static _IH_UserType_QB onWriteConnection()
     * @method _IH_UserType_QB newQuery()
     * @method static _IH_UserType_QB on(null|string $connection = null)
     * @method static _IH_UserType_QB query()
     * @method static _IH_UserType_QB with(array|string $relations)
     * @method _IH_UserType_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_UserType_C|UserType[] all()
     * @foreignLinks type_id,\App\Models\User\User,user_type_id
     * @mixin _IH_UserType_QB
     */
    class UserType extends Model {}
}
