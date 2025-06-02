<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teacher extends Model
{
    //
    protected $guarded = [];

    // Factory
    use HasFactory;

    // SoftDeletes Column
    use SoftDeletes;

    // Scope Male
    public function scopeSomething1($query)
    {
        $return = $query->where('scores', 25)
            ->where('age', 25);
    }

    // Scope Female
    public function scopeSomething2($query)
    {
        $return = $query->where('scores', 20)
            ->where('age', 20);
    }
}
