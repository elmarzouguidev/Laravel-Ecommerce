<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Support\HasAdvancedFilter;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;
    use HasAdvancedFilter;

    public $table = 'permissions';
    use HasAdvancedFilter;

    public $orderable = [
        'id',
        'name',
        'guard_name',
        'created_at',
        'updated_at',
    ];

    public $filterable = [
        'id',
        'name',
        'guard_name',
        'created_at',
        'updated_at',
    ];

    protected $guarded = ['id'];

    protected $fillable = array('name', 'label', 'description');

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }


    /**
     * Determine if the permission belongs to the role.
     *
     * @param  mixed $role
     * @return boolean
     */
    public function inRole($role)
    {
        if (is_string($role)) {
            return $this->roles->contains('name', $role);
        }
        return !!$role->intersect($this->roles)->count();
    }

}
