<?php

namespace App;

use Image;

class Thumbnail{
    public function make($src, $des){
        Image::make($src)
            ->fit(200)
            ->save($des);
    }
}
