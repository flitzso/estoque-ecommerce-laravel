<?php
// app/Models/Produto.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'descricao', 'quantidade', 'preco'];

    public function estoques()
    {
        return $this->hasMany(Estoque::class);
    }

    public function vendas()
    {
        return $this->hasMany(Venda::class);
    }
}
