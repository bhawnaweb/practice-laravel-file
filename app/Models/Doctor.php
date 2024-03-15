<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
Use App\Models\hospital;

class Doctor extends Model
{
    use HasFactory;

    public function hospitals(){
        return $this->belongsToMany(Hospital::class)->withPivot('contract_start_date', 'contract_end_date','isPartTime');
    }
}
