<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model {

    use MediaTrait;

    protected $fillable = [
        'libId',
        'title',
        'edition',
        'releaseYear',
        'motionPictureRating',
        'runtime',
        'imdbId',
        'wikiUrl',
        'format',
        'posterUrl'
    ];



    /**
     * An Movie is owned by a user.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
