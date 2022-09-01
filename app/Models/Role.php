<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * App\Models\Role
 *
 * @property int $role_id
 * @property int $user_type_id
 * @property int $service_id
 * @property int $can_view
 * @property int $can_create
 * @property int $can_update
 * @property int $can_delete
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Service[] $services
 * @property-read int|null $services_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\UserType[] $types
 * @property-read int|null $types_count
 * @method static \Illuminate\Database\Eloquent\Builder|Role newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role query()
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereCanCreate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereCanDelete($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereCanUpdate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereCanView($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereRoleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereServiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereUserTypeId($value)
 * @mixin \Eloquent
 */
class Role extends Model
{
    use HasFactory;

    /**
     * Model's primary key that should be using
     *
     * @var string
     */
    protected $primaryKey = 'role_id';

    /**
     * Model's table name
     *
     * @var string
     */
    protected $table = 'user_roles';

    /**
     * Model's mass assignable attributes.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'status',
        'can_view',
        'can_create',
        'can_update',
        'can_delete',
    ];

    /**
     * Model's default attributes.
     *
     * @var array<int, string>
     */
    protected $attributes = [
        'status' => 1
    ];

    /**
     * Relationships to types
     * @return BelongsToMany
     */
    public function types(): BelongsToMany
    {
        return $this->belongsToMany(UserType::class);
    }

    /**
     * Relationships to services
     * @return BelongsToMany
     */
    public function services(): BelongsToMany
    {
        return $this->belongsToMany(Service::class);
    }
}
