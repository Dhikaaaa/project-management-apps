<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    /**
     * Get the projects for the client.
     */
    public function project()
    {
        return $this->hasMany(Project::class);
    }
}
