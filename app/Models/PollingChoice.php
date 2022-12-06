<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PollingChoice extends Model
{
    use HasFactory;

    public function employee(): \Illuminate\Database\Eloquent\Relations\belongsTo
    {
        return $this->belongsTo(Employee::class, 'employee_id', 'id');
    }
}
