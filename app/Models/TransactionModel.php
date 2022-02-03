<?php 
namespace App\Models;
use CodeIgniter\Model;

class TransactionModel extends Model
{
    protected $table = 'depense';

    protected $primaryKey = 'id';
    
    protected $allowedFields = ['category', 'montant', 'dateTr'];
}