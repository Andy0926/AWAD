<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;


class Image extends Model
{
    //use HasFactory;
    
    protected $fillable = ['path','property_id'];

    public function property(){
        return $this->belongsTo('App\Models\Property');
    }
    public function url(){
        
        $url =Storage::url($this->path);
        dd($url);
        return Storage::url($this->path);
        //return $url;
    }
}
