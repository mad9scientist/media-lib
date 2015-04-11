<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Studio extends Model {

    protected $fillable = ['name'];


    /**
     * Retrieve the associated movies for a given studio
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function movies()
    {
        return $this->belongsToMany('App\Movie');
    }

    /**
     * Retrieve the associated animes for a given studio
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function animes()
    {
        return $this->belongsToMany('App\Anime');
    }

    /**
     * Retrieve the associated TvShows for a given studio
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tvshows()
    {
        return $this->belongsToMany('App\TvShow');
    }
}
