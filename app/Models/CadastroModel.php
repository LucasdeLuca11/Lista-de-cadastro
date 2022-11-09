<?php namespace App\Models;

use CodeIgniter\Model;

class CadastroModel extends Model {
    
    protected $table = 'cadastros';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nome','telefone','email'];
    protected $returnType = 'object';
}

