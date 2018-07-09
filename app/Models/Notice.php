<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Notice extends Base
{
    use Searchable;

    public function toSearchableArray()
    {
        //return $this->only('id', 'content', 'url');
    }
}
