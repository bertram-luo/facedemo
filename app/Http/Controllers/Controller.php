<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

class Controller extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;
    protected $data;
    protected $viewName;
    protected $user;
    public function __construct(){
        $this->user = \Auth::user();
        view()->share('signedIn', \Auth::check());
        view()->share('user', $this->user);

        $this->data['links'][0][0] = array('name' =>"introduction_css and selector", 'active' => "", 'link' => "/courses/lecture/0");
        $this->data['links'][0][1] = array('name' => "inheritance, cascade and box model", "active" => "", 'link' => "/courses/lecture/1");
        $this->data['links'][0][2] = array('name' => "text and images", 'active' => "", 'link' => "/courses/lecture/2");
        $this->data['links'][0][3] =array('name' =>  "bootstrap nav, table and form", 'active' => "", 'link' => "/courses/lecture/3");
        $this->data['links'][0][4] = array('name' => "float layout and positioning element", 'active' => "", 'link' => "/courses/lecture/4");
        $this->data['links'][1][0] = array('name' => "codeigniter and webserver", 'active' => "", 'link' => "/courses/lecture/10");
        $this->data['links'][1][1] = array('name' => "dynamic", 'active' => "", 'link' => "/courses/lecture/11");
        $this->data['links'][2][0] = array('name' => "basic js language", 'active' => "", 'link' => "/courses/lecture/20");
        $this->data['links'][3][0] = array('name' => "haar, intergral graph", 'active' => "", 'link' => "/courses/lecture/30");
        $this->data['links'][3][1] = array('name' => "opencv", 'active' => "", 'link' => "/courses/lecture/31");
        $this->data['links'][3][2] = array('name' => "overall system", 'active' => "", 'link' => "/courses/lecture/32");
        $this->viewName[0][0] = "courses.introduction_ss_selector";
        $this->viewName[0][1] = "courses.inheritance_cascade_boxmodel";
        $this->viewName[0][2] = "courses.text_imgs";
        $this->viewName[0][3] = "courses.nav_table_form";
        $this->viewName[0][4] = "courses.float_layout_and_positioning_element";
        //$this->viewName[0][4] = "courses.test";
        $this->viewName[1][0] = "courses.js1";
        $this->viewName[1][1] = "courses.ss_and_selector";
        $this->viewName[2][0] = "courses.basic_js";
        $this->viewName[3][0] = "courses.ss_and_selector";
        $this->viewName[3][1] = "courses.ss_and_selector";
        $this->viewName[3][2] = "courses.ss_and_selector";
        view()->share($this->data);
    }
    
}
