<?php

namespace Entities\Task;

use Database\Factories\TaskFactory;
use Entities\Enum\Status;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    protected $keyType = 'string';
    public $incrementing = false;

    public $fillable = [
        'title', 'description', 'status'
    ];

    public $casts = [
        "status" => Status::class
    ];

    public static function newFactory()
    {
        return new TaskFactory();
    }
}
