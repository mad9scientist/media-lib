<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model {

    protected $fillable = ['rating'];

    /**
     * Retrieve the associated movies for a given rating
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function movies()
    {
        return $this->belongsTo('App\Movie');
    }

    /**
     * Retrieve the associated animes for a given rating
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function animes()
    {
        return $this->belongsTo('App\Anime');
    }

    /**
     * Retrieve the associated TvShows for a given rating
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tvshows()
    {
        return $this->belongsTo('App\TvShow');
    }

}
