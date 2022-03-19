<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

<<<<<<< HEAD
    public function contact()
    {
        return $this->belongsTo(Contact::class);
    }
=======
/*    public function contact()
    {
        return $this->belongsTo(Contact::class);
    }*/
>>>>>>> e5620f6a62fe70e4321edcac987055b94562f6ca

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
