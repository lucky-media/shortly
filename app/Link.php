<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['url', 'code'];


    /**
     * Helper method to return the
     * code for a single url.
     *
     *
     * @return string
     */
    public function path()
    {
        return "/{$this->code}";
    }


    /**
     * Return the full generated path.
     *
     *
     * @return \Illuminate\Contracts\Routing\UrlGenerator|string
     */
    public function fullPath()
    {
        return url($this->code);
    }


    /**
     * We override the default Laravel
     * id with the code.
     *
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'code';
    }
}
