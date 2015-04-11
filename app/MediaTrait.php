<?php namespace App;


trait MediaTrait {

    /**
     * Get tags for an associated media
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags()
    {
        return $this->belongsToMany('App\Tag')->withTimestamps();
    }

    /**
     * Get Studios for Given media
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function studios()
    {
        return $this->belongsToMany('App\Studio')->withTimestamps();
    }

    /**
     * Gets the rating for the given media
     * @return mixed
     */
    public function rating()
    {
        return $this->hasOne('App\Rating');
    }
}