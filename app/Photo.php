<?php

namespace App;

use File;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Create a new instance for given name.
     *
     * @param  string $name
     * @return self
     */
    public static function fromName($name)
    {
        return new static([
            'name' => $name,
        ]);
    }

    /**
     * Set the photo's name.
     *
     * @param string $name
     * @return void
     */
    public function setNameAttribute($name)
    {
        $this->attributes['name'] = $name;

        $this->path = $this->baseDir() . '/' . $name;
        $this->thumbnail_path = $this->baseDir() . '/tn-' . $name;
    }

    /**
     * Return the base directory of photos.
     *
     * @return string
     */
    public function baseDir()
    {
        return 'images/photos';
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
        File::delete($this->path);
        File::delete($this->thumbnail_path);

        return parent::delete();
    }
}
