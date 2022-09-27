<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Carbon;

/**
 * App\Models\Service
 *
 * @property int $service_id
 * @property string $code
 * @property string $name
 * @property int $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Collection|Role[] $roles
 * @property-read int|null $roles_count
 * @method static Builder|Service newModelQuery()
 * @method static Builder|Service newQuery()
 * @method static Builder|Service query()
 * @method static Builder|Service whereCode($value)
 * @method static Builder|Service whereCreatedAt($value)
 * @method static Builder|Service whereName($value)
 * @method static Builder|Service whereServiceId($value)
 * @method static Builder|Service whereStatus($value)
 * @method static Builder|Service whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Service extends Model
{
    use HasFactory;

    /**
     * Primary key that should be using.
     *
     * @var string
     */
    protected $primaryKey = 'service_id';

    /**
     * The model's table name.
     *
     * @var string
     */
    protected $table = 'services';

    /**
     * Attributes that are mass asignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'status'
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
     * Relationships to roles
     *
     * @return BelongsToMany
     */
    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class);
    }
}
