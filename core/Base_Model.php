<?php

class Base_Model extends Core_Model {

    public function addData($post){
            $query = "INSERT INTO students (name, password, years, yearold, class) values (:name, :password, :years, :age, :class)";
        //    var_dump( $password); die();
            $sth = $this->db->prepare($query);
                 $post=array(
              ':name'      => $post['name'],
              ':password'  => $post['password'],
              ':years'     => $post['years'],
              ':age'       => $post['yearold'],
              ':class'     => $post['class']
           );
            $sth->execute($post);
    }

     public function updateData($data){
              $data=array(
              ':id'        => $data['id'],
              ':name'      => $data['name'],
              ':years'     => $data['years'],
              ':age'       => $data['yearold'],
              ':class'     => $data['class']     
           );
              // echo "<pre>";
              //  var_dump($data); 
              //  echo "</pre>";
              //  die();
            $query = "UPDATE students SET name=:name, years=:years, yearold=:age, class=:class WHERE id =:id";
            //var_dump($query); die();
            $sth = $this->db->prepare($query);               
            $sth->execute($data);
    }

      public function deleteData($id_Data) {
        $query ="DELETE FROM students WHERE id=:id_Data";
        $sth = $this->db->prepare($query);
        $sth->execute([':id_Data' => $id_Data]);
        return $sth->rowCount();
    }


  public function find_all() {
        $query = "select * from {$this->table}";
        $sth = $this->db->prepare($query);
        $sth->execute();
        $data = $sth->fetchAll(PDO::FETCH_ASSOC);
        $sth->closeCursor();
        return $data;
    }

public function find_by_id($id) {
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
