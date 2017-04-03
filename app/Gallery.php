<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'year';
    }

    /**
     * Create a new instance for the given year.
     *
     * @param  integer $year
     * @return self
     */
    public static function forYear($year)
    {
        return static::create(['year' => $year]);
    }

    /**
     * It may have multiple photos.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function photos()
    {
        return $this->hasMany(Photo::class);
    }

    /**
     * Associate given photo with the gallery.
     *
     * @param Photo $photo
     * @return Photo
     */
    public function addPhoto(Photo $photo)
    {
        return $this->photos()->save($photo);
    }

    /**
     * Delete the model from the database.
     *
     * @return bool|null
     *
     * @throws \Exception
     */
    public function delete()
    {
        $this->photos->each->delete();

        return parent::delete();
    }
}
