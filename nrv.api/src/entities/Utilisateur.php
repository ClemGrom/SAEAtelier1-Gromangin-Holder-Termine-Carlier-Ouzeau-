<?php

namespace nrv\api\entities;

use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    protected $table = "utilisateur";
    protected $primaryKey = "uuid";
    public $incrementing = true;

    protected $fillable = ["nom", "prenom", "email", "password", "admin"];


}
