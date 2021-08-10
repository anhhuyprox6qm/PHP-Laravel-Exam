<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BookModel extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $primaryKey = 'bookid';
    protected $fillable = [
        'authorid',
        'title',
        'ISBN',
        'pub_year',
        'available'
    ];
    public function author()
    {
        return $this->belongsTo(AuthorModel::class, 'authorid');
    }
}
