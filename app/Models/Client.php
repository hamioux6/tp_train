<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected string $Nom;
    protected string $Prenom;
    protected string $Adresse;
    protected string $Telephone;
}
