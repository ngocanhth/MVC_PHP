<?php
//require ('<php? echo BASE_PATH/> . "/controllers/Student_Controllers.php"');
//use App\Frontend\Model\Student_Model;
 use App\Frontend\controllers\Students_controller as Students;

class Themuon_Controller extends Base_Controller {  
    private $__sophieu;
    private $__ngaymuon;
    private $__hantra;
    private $__sohieusach;

    //   function __construct($name, $yearsbirth, $age, $_class, $sophieu, $ngaymuon, $hantra, $sohieusach) {
    //     parent::__construct($name, $yearsbirth, $age, $_class);
    //     $this->sophieu=$sophieu;
    //     $this->ngaymuon=$ngaymuon;
    //     $this->hantra=$hantra;
    //     $this->sohieusach=$sohieusach;
    // }

    public function loadThemuon() {
        $id_student = getParameter('id', 0);
        //var_dump( $id_student); die();
       $data=[
            'tittle'=>'Đăng ký mượn sách',
            'id_student'=> $id_student
        ];
       return  $this->view->load('themuon/addThemuon', $data);
    }

     public function addThemuon() { 
    if(isset($_POST['addnewThemuon'])){
        $id_student = $_POST['id_student'];
        $sophieu = $_POST['sophieu'];
        $ngaymuon = $_POST['ngaymuon'];
        $hantra = $_POST['hantra'];
        $sohieusach = $_POST['sohieu'];
      
       $post=array(
          'id_student'     => $id_student,
          'sophieu'        => $sophieu,
          'ngaymuon'       => $ngaymuon,
          'hantra'         => $hantra,
          'sohieusach'     => $sohieusach
       );    
 //var_dump($post);die();

  }
        $this->model->themuon->addThemuon($post);
        
        return  $this->showAllinfor();
    }

public function showAllinfor() {
       // $student_info = new Student_Model();
      //  var_dump($student_info);
      
         // $student = new Students();
         // var_dump($student); die();

        $themuons = $this->model->themuon->find_all();
        // var_dump($themuons); die();

          // $themuons = new Students_Controller();
           // var_dump($themuons); die();

        $this->view->load('themuon/listBooks', [
            'themuons' => $themuons
        ]);
       
  }
        
// public function showinfo() {
//          $id = getParameter('id', 0);
//         // var_dump($id); die();
//          $themuon = $this->model->themuon->showinfo($id);
//         return  $this->view->load('themuon/listBooks');
//     }


     public function getlistBooks() {
       $data=[
            'tittle'=>'Danh sách các sách của thư viện'
        ];
       return  $this->view->load('themuon/listBooks', $data);
    }



    public function getHantra()
    {
        return $this->__hantra;
    }
    public function showInforBooks()
    {
        parent::showinfoStudent();
       echo "Số hiệu sách: ".$this->__sohieusach."</br>";
       echo "Ngày mượn: ".$this->__ngaymuon."</br>";
       echo "Hạn trả: ".$this->__hantra."</br>";
    }
}
