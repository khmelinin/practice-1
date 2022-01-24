<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
 * @property $id int
 * @property $message string
 * @property $author string
 */
class Chat extends Model
{
    protected $table = "chat";
    use HasFactory;
}
