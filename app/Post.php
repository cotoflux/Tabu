<?php


namespace App;


use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;


class Post extends Model implements Searchable
{
    protected $fillable=['title','body'];

    public function getSearchResult():SearchResult
    {
        $url = route('searchIo', $this->id);
        return new SearchResult(
            $this,
            $this->body,
            $url
        );
    }
}
