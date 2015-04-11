<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class TvShow extends Model {

    use MediaTrait;

    /**
     * An TvShow is owned by a user.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
