<?php 


namespace App\Models;
use CodeIgniter\Model;


class Intern_Model extends Model
{
    public function get_intern_id(){
        $db = \Config\Database::connect();
        $query = $db->table('intern_table');
        $query->select('*');
        $res = $query->get()->getResultArray();

        if (count($res)>0) {
            $intern_id = 1000 + count($res);
        }else{
            $intern_id = 1001;
        }

        return $intern_id;
    }
}






?>