<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReviewOfSystem extends Model
{
    use HasFactory;

    protected $fillable = [
        'medical_exam_id',
        'skin',
        'opthalmologic',
        'ent',
        'cardiovascular',
        'respiratory',
        'gastro_intestinal',
        'neuro_psychiatric',
        'hematology',
        'genitourinary',
        'musculo_skeletal',
    ];

    //has relationship
    public function ob_gyne_history_positive()
    {
        return $this->hasOne(OBGyneHistoryPositive::class);
    }

    //it belongs to
    public function medical_exam()
    {
        return $this->belongsTo(MedicalExam::class);
    }
}
