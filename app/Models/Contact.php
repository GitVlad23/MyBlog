<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

<<<<<<< HEAD
    public function answer()
    {
        return $this->hasOne(Contact::class, 'user_id', 'user_id');
    }
=======
/*    public function answer()
    {
        return $this->hasOne(Contact::class, 'id', 'id');
    }*/
>>>>>>> e5620f6a62fe70e4321edcac987055b94562f6ca
}
