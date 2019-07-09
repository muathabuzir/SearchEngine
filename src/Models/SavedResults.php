<?php

namespace Mawdoo3\SearchResults\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SavedResults extends Model {

    //
    use SoftDeletes;

    protected $fillable = ['title', 'user_id', 'desc', 'comment', 'link'];

}
