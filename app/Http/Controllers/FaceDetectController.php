<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class FaceDetectController extends Controller
{
    public function index(){
        return view("demo");
    }

    public function process(){
        $data = array();

        $uploadroot = base_path(). '/public/';
        $uploaddir = 'uploads/';
        if(isset($_GET['files']))
        {	
            $error = false;
            $files = array();

            //$uploadroot = '/opt/lampp/htdocs/';
            $uploadroot = base_path(). '/public/';
            $uploaddir = 'photos/facedetect/';
            foreach($_FILES as $file)
            {
                $des_file = $uploaddir .$this->get_des_name($file['name']);
                if(move_uploaded_file($file['tmp_name'],$uploadroot . $des_file))
                {
                    $res_file = $des_file.".jpg";
                    $files[] = "/".$res_file;

          	    $shell_cmd = "export LD_LIBRARY_PATH=\"\" && cd /root/opencv/opencv-3.0.0/samples/cpp && ./cpp-example-facedetect --res=$uploadroot$res_file $uploadroot$des_file";
                    shell_exec($shell_cmd);

                }
                else
                {
                    $error = true;
                }
            }
            $data = ($error) ? array('error' => 'There was an error uploading your files') : array('files' => $files);
        }
        else
        {
            $data = array('success' => 'Form was submitted', 'formData' => $_POST);
        }

        //file_put_contents("./log", json_encode($data)."\n", FILE_APPEND);
        //$this->output->set_header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
    }

    private function get_des_name($src_name){
        return  time()."_".rand(100000, 999999).strrchr(basename($src_name), ".");
    }

}
