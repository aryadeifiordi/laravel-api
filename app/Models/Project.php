<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        
    ];

    public static function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            
        ];
    }

    public static function updateRules($id)
    {
        return [
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            
        ];
    }

    public function technologies()
    {
        return $this->belongsToMany(Technology::class);
    }
}
