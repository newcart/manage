<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Laravel\Sanctum\HasApiTokens;

/**
 * App\Models\User
 *
 * @property int $user_id
 * @property string $code
 * @property string $name
 * @property string $firstname
 * @property string $lastname
 * @property string $email
 * @property int $gsm
 * @property int $telephone
 * @property int $user_type_id
 * @property int $status
 * @property string $last_ip
 * @property string $api_key
 * @property string $secret_key
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\UserType[] $types
 * @property-read int|null $types_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereApiKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereFirstname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereGsm($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLastIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLastname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereSecretKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTelephone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUserTypeId($value)
 * @mixin \Eloquent
 */
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * Primary key that should be using
     *
     * @var string
     */
    protected $primaryKey = 'user_id';

    /**
     * The model's table name
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The model's default attributes.
     *
     * @var array<int, string>
     */
    protected $attributes = [
        'status' => 1
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function thisUserHasPermission(string $string, string $string1)
    {
    }

    /**
     * Relationships to types
     *
     * @return BelongsToMany
     */
    public function types(): BelongsToMany
    {
        return $this->belongsToMany(UserType::class);
    }

    /**
     * Checks if directed user has the permission to do the action
     *
     * @param string $permission
     * @param string $service
     * @param string $user_type
     * @return bool
     */
    public static function userHasPermission(
        string $permission,
        string $service,
        string $user_type
    ): bool
    {
        $type = DB::table('user_types')->where('code', $user_type)->first();
        $service = DB::table('services')->where('code', $service)->first();

        $role = DB::table('user_roles')->where('service_id', $service->service_id)->first();

        if ($role->user_type_id == $type->type_id) {
            if ($role->$permission == 1) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }


    /**
     * Check's if the logged user has permission to do the action
     * @param string $permission
     * @param string $service
     * @return boolean
     */
    public static function thisUserHasPermission(
        string $permission,
        string $service
    ): bool
    {
        return User::userHasPermission($permission, $service, Session::get('user_type')->code);
    }
}
