<?php

namespace App\Domains\User;

use App\Domains\Location\Location;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Profile extends Model
{
    use SoftDeletes;

    protected $fillable = ['birth_date', 'img','phone','about_you','genre'];

    protected $hidden   = [];

    protected $dates    = ['deleted_at'];

    public function User()
    {
        return $this->belongsTo(User::class, 'id');
    }

    public function Location()
    {
        return $this->morphOne(Location::class, 'locationable');
    }


}
