<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CourseController extends Controller
{
    //
    public function __construct(){
        parent::__construct();
    }
    public function index(Request $request){
        return view('courses.courses', $this->data);
    }
    public function course(Request $request){
        $id = (int) $request->id;
        $this->setActive($id);
        return view($this->getPageName($id), $this->data);
    }
    public function setActive($lectureId){
        $id1 = $lectureId / 10;
        $id2 = $lectureId % 10;
        $this->data['links'][$id1][$id2]['active'] = "active";
    }
    public function getPageName($lectureId){
       $id1 = $lectureId / 10;        
       $id2 = $lectureId % 10;        
       return $this->viewName[$id1][$id2];
    }
}



