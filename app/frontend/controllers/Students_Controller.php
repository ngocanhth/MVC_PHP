<?php
//require APP_PATH . "/models/Student_Model.php";
 //namespace App\Frontend\controllers\;

class Students_Controller extends Base_Controller {

    // private $__name;
    // private $__yearsbirth;
    // private $__age;
    // private $__class;

    //  public function setName($name) {
    //   $this->__name = $name;
    //  }
    //  public function getName() {
    //     return $this->__name;
    //  }
    //   public function getyearsbirth() {
    //     return $this->__yearsbirth;
    //  }
    //   public function getage() {
    //     return $this->__age;
    //  }
    //   public function getClass() {
    //     return $this->__class;
    //  }

    public function index() {
     //  $students = Student_Model::find_all();
       // echo "<pre>";
       //  var_dump($students); 
       //   echo "</pre>";
       //  die();
        $students = $this->model->student->find_all();
        
        $this->view->load('student/index', [
            'students' => $students
        ]);
    }


    public function addData() {
       $data=[
            'tittle'=>'Thêm sinh viên'
        ];
       return  $this->view->load('student/addstudent', $data);
    }

    public function addStuden() { 
    if(isset($_POST['signup'])){
        $name = $_POST['name'];
        $password = md5($_POST['password']);
        $yearsbirth = $_POST['birthyears'];
        $age = $_POST['age'];
        $_class = $_POST['_class'];
      
       $post=array(
          'name'      => $name,
          'password'  => $password,
          'years'     => $yearsbirth,
          'yearold'   => $age,
          'class'     => $_class
       );    
  }
        $this->model->student->addData($post);
        redirect('http://127.0.0.1/BorrowBooks');
    }


     public function showDetail() {
        $id = getParameter('id', 0);

        $student = $this->model->student->find_by_id($id);
        $themuons = $this->model->themuon->showinfo($id);
        // echo "<pre>";
        // var_dump( $student);
        // var_dump( $themuon);
        // echo "</pre>";
        // die();
        
        // $data= array(
        //  "student"  => [$student],
        //  "themuon" =>[$themuon]
        // );
          
        //   $data= array(
        //  "student"  => $student,
        //  "themuon" =>$themuons
        // );


// echo "<pre>";
//   var_dump($data);
//   echo "</pre>";
// die();
       $this->view->load('student/showdetail', [
           "student"  => $student,
           "themuons"  => $themuons
        ]);
    }
    public function editStudent(){
        $id = getParameter('id', 0);
        $student = $this->model->student->find_by_id($id);
        $this->view->load('student/editStudent', [
            'student' => $student
        ]);
    }
      public function updateStudent() {
        $id = getParameter('id', 0);
        if(isset($_POST['updateinfor'])){
        $name = $_POST['name'];
        $yearsbirth = $_POST['birthyears'];
        $age = $_POST['age'];
        $_class = $_POST['_class'];
         $post=array(
            'id'        => $id,
            'name'      => $name,
            'years'     => $yearsbirth,
            'yearold'   => $age,
            'class'     => $_class
         );                 
        }    

        $student = $this->model->student->updateData($post);
        redirect('http://127.0.0.1/BorrowBooks');
    }  
    public function delete() {
       $id = getParameter('id', 0);
      $this->model->student->deleteData($id);
      redirect('http://127.0.0.1/BorrowBooks');
    }

    public function loadThemuon() {
        $id_student = getParameter('id', 0);
        //var_dump( $id_student); die();
       $data=[
            'tittle'=>'Đăng ký mượn sách',
            'id_student'=> $id_student
        ];

//var_dump($data); die();
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
        
   $url_id =  BASE_URL . "?module=Students&action=showDetail&id=".$id_student;
   //var_dump($url_id); die();
     header("Location:  $url_id");
        // return  $this->showDetail();
    }

    public function showAllinfor() {
       $id = getParameter('id', 0);
 // var_dump(  $id);
        $students = $this->model->student->find_all();

        $themuons = $this->model->themuon->find_all();

        // echo "<pre>";
        // var_dump($students);
        // var_dump($themuons);
        // echo "</pre>";
        // die();

        // $this->view->load('themuon/listBooks', [
        //     'students' => $students,
        //     'themuons' => $themuons
        // ]);
//         $data= array(
//           $students=> $themuons
//         );
// var_dump($data);
      
       //  die();

          $this->view->load('themuon/listBooks', [
            'students' => $students,
            'themuons' => $themuons
        ]);
    
       
  }

    public function showAllthemuon() { 
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

        public function deleBook() {
       $id = getParameter('id', 0);
       $id_student = getParameter('id_student', 0);
     //  var_dump($id_student);die();
      $this->model->themuon->deleteBooks('themuon', $id );
    

        $url_id =  BASE_URL . "?module=Students&action=showDetail&id=".$id_student;
   // //var_dump($url_id); die();
      header("Location:  $url_id");


    }
}
