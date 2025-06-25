<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lesson extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'content',
        'video_url',
        'position',
        'module_id',
    ];

    /**
     * Get the module that this lesson belongs to.
     */
    public function module()
    {
        return $this->belongsTo(Module::class);
    }
}
