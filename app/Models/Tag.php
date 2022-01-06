<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    const TABLE = 'tags';

    protected $table = self::TABLE;

    protected $fillable = [
        'name',
        'slug',
        'image',
        'description',
    ];

    public function id(): int
    {
        return $this->id;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function slug(): string
    {
        return $this->slug;
    }

    public function image(): string
    {
        return $this->image;
    }

    public function description(): string
    {
        return $this->description;
    }

    public function getRoutekeyName()
    {
        return 'slug';
    }
}
