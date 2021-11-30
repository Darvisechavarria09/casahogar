<?php

namespace App\Models;

use CodeIgniter\Model;

class Animalmodelo extends Model
{
    protected $table      = 'animales';
    protected $primaryKey = 'id';

    protected $allowedFields = ['nombre', 'foto', 'edad','descripción', 'tipo'];
}