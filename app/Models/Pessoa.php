<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    use HasFactory;

    protected $table = 'pessoas';
    protected $fillable = ['nome', 'cpf'];
    public $timestamps = false;

    public function render(){
        $pessoas = Pessoa::orderBy('name', 'cpf')->paginate(1);
        return view('home', ['pessoas' => $pessoas]);
    }
}


