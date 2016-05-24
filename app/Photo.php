<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class Photo extends Model
{
    protected $table = 'flyer_photos';
    protected $fillable = ['path', 'name', 'thumbnail_path'];
    protected $baseDir = 'photos/flyers';

    public function flyer(){
        return $this->belongsTo('App\Flyer');
    }
    public function setNameAttribute($name){
        $this->attributes['name'] = $name;
        $this->attributes['path'] = $this->baseDir . "/" . $name;
        $this->attributes['thumbnail_path'] = $this->baseDir . "/tn-" . $name;
    }
    public function baseDir(){
        return $this->baseDir;
    }
    public function delete(){
        \File::delete([
            $this->path,
            $this->thumbnail_path
        ]);
        parent::delete(); 
    }
}
