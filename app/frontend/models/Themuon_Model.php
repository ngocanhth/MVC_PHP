<?php

class Themuon_Model extends Base_Model
{
    protected $table = 'themuon';

     public function addThemuon($post){
            $query = "INSERT INTO $this->table (id_student, sophieu, ngaymuon, hantra, sohieusach) values (:id_student, :sophieu, :ngaymuon, :hantra, :sohieusach)";
        //    var_dump( $password); die();
            $sth = $this->db->prepare($query);
                 $post=array(
              ':id_student'     => $post['id_student'],
              ':sophieu'     	=> $post['sophieu'],
              ':ngaymuon'       => $post['ngaymuon'],
              ':hantra'       	=> $post['hantra'],
              ':sohieusach'     => $post['sohieusach']
           );
            $sth->execute($post);
    }



    //  public function find_all_join() {
    //     $query = "select * from {$this->table}";
    //     $sth = $this->db->prepare($query);
    //     $sth->execute();
    //     $data = $sth->fetchAll(PDO::FETCH_ASSOC);
    //     $sth->closeCursor();
    //     return $data;
    // }


    public function showinfo($id) {
        $query = "select * from {$this->table} where id = :id";
        $sth = $this->db->prepare($query);
        $sth->execute([
            ':id' => $id
        ]);
        $data = $sth->fetch(PDO::FETCH_ASSOC);
        $sth->closeCursor();
        return $data;
    }

}
