<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Book;
use App\Models\Student;
class Borrowed_book extends Model
{
    use HasFactory;

    protected $guarded = [];
    function book()
    {
        return $this->belongsTo(Book::class);
    }
    function student()
    {
        return $this->belongsTo(Student::class);
    }
}
