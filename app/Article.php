<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Article extends Model {

	//
	protected $fillable = [
		'title',
		'body',
		'published_at'
	];

	protected $dates = ['published_at'];

	public function setPulishedAtAttribute($date)
	{
		$this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d',$date);
	}

	public function scopePublished($query)
	{
		$query->where('published_at','<=', Carbon::now());
	}

	public function scopeUnpublished($query)
	{
		$query->where('published_at','>', Carbon::now());
	}

	public function user()
	{
		return $this->belongsTo('App\User');
	}

    /**
     * Get the tags associated to the given article
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags()
    {
        return $this->belongsToMany('App\Tag')->withTimestamps();
    }

    /**
     * Get a list of tag ids associated with the current article
     *
     * @return mixed
     */
    public function getTagListAttribute()
    {
        return $this->tags->lists('id');
    }
}
