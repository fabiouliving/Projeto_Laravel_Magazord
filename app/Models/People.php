<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;

    protected $table = 'people';
    protected $fillable = ['nome', 'cpf'];


    public function render(){
        $people = People::orderBy('name', 'cpf')->paginate(1);
        return view('home', ['people' => $people]);
    }
}


