<?php

namespace App\Models\User;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Carbon;

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
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Collection|Service[] $services
 * @property-read int|null $services_count
 * @property-read Collection|UserType[] $types
 * @property-read int|null $types_count
 * @method static Builder|Role newModelQuery()
 * @method static Builder|Role newQuery()
 * @method static Builder|Role query()
 * @method static Builder|Role whereCanCreate($value)
 * @method static Builder|Role whereCanDelete($value)
 * @method static Builder|Role whereCanUpdate($value)
 * @method static Builder|Role whereCanView($value)
 * @method static Builder|Role whereCreatedAt($value)
 * @method static Builder|Role whereRoleId($value)
 * @method static Builder|Role whereServiceId($value)
 * @method static Builder|Role whereStatus($value)
 * @method static Builder|Role whereUpdatedAt($value)
 * @method static Builder|Role whereUserTypeId($value)
 * @mixin Eloquent
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
        'service_id',
        'user_type_id',
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
        'status' => 1,
        'can_view' => 0,
        'can_create' => 0,
        'can_update' => 0,
        'can_delete' => 0,
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
