<?php

namespace App\Controllers;
use App\Models\Intern_Model;


class Intern_controller extends BaseController
{

    protected $datas;
    
    public function __construct(){

        $this->datas = new Intern_Model();
    }

    public function generate_intern_id(){
        // $data = new Intern_Model();
        $ex_id = $this->datas->get_intern_id();
        $ex_id = 'QAIN'.$ex_id;
        return $ex_id;
    }
   
    public function intern_reg(){
        // if ($this->request->isAJAX()) {
            helper(['filesystem','url','form']);
            // files
            // $resume = $this->request->getFile('resume_file');
            // $bonafide = $this->request->getFile('bonafide_file');
            // $id_card_img = $this->request->getFile('id_card_file');
            // $profile_img = $this->request->getFile('profile_img');

            // normal records
            $regno = $this->request->getvar('regno');
            $sname = $this->request->getvar('sname');
            $dept = $this->request->getvar('dept');
            $email_id = $this->request->getvar('email_id');
            $year = $this->request->getvar('year');
            $mobile = $this->request->getvar('mobile');
            $clg_name = $this->request->getvar('clg_name');
            $sdate = $this->request->getvar('st_date');
            $edate = $this->request->getvar('ed_date');
            $domain = $this->request->getvar('domain');

            $get_intern_id = $this->generate_intern_id();
            $directory = "../public/uploads/".$get_intern_id;
            // print_r($directory);
            // echo json_encode("its working".$directory);
            echo $regno;
            if (!is_dir($directory)) {
                mkdir($directory, 0777, TRUE);
            }
            // $resume_filename = $resume->getName();

            // if ($resume->move()) {
            //     echo "the resume is uploaded";
            // }

            // if (($resume->getSize()>0)) {
            //     if (($profile_img->getSize()>0)) {
            //         if (($id_card_img->getSize()>0)) {
            //             if (($bonafide->getSize()>0)) {

            //                 // $get_intern_id = $this->generate_intern_id();
            //                 // $directory = "./public/uploads/".$get_intern_id;
            //                 echo json_encode("its working");
            //                 // if (!is_dir($directory)) {
            //                 //     mkdir($directory, 0777, TRUE);

            //                 // }

            //                 // if ($resume->move($directory.'/',$resume->getName())) {
            //                 //     echo "the resume is uploaded";
            //                 // }
                            
            //             }
            //         }
            //     }
            // }
            // echo json_encode("hello");


        // }
    }



    public function demo_reg(){
        helper(['filesystem']);

        $regno = $this->request->getvar('regno');
        $sname = $this->request->getvar('sname');
        $dept = $this->request->getvar('dept');
        $email_id = $this->request->getvar('email_id');
        $year = $this->request->getvar('year');
        $mobile = $this->request->getvar('mobile');
        $clg_name = $this->request->getvar('clg_name');
        $sdate = $this->request->getvar('st_date');
        $edate = $this->request->getvar('ed_date');
        $domain = $this->request->getvar('domain');


        $file = $this->request->getFile('resume_file');
        // print_r($file);

        echo $file;
    }

}
?>