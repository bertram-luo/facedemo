<?php

namespace App;
use App\AddPhotoToFlyer;
use Illuminate\Http\UploadedFile;
use Mockery as m ;
class AddPhotoToFlyerTest extends \TestCase{
    /** @test*/
    public function it_processes_a_form_to_add_a_photo_to_a_flyer(){
        $flyer = factory(\App\Flyer::class)->create();
        $file = m::mock(UploadedFile::class,[
            'getClientOriginalName' => 'foo',
            'getClientOriginalExtension' => 'jpg'
        ]);
        $file->shouldReceive('move')
            ->once()
            ->with('photos/flyers', 'nowfoo.jpg');

        $thumbnail = m::mock(\App\Thumbnail::class);
        $thumbnail->shouldReceive('make')
            ->once()
            ->with('photos/flyers/nowfoo.jpg', 'photos/flyers/tn-nowfoo.jpg');
        $form = new AddPhotoToFLyer($flyer, $file, $thumbnail); 
        $form->save();
        $this->assertCount(1, $flyer->photos);
    }
}

function time(){
    return 'now';
}

function sha1($path){
    return $path;
}
