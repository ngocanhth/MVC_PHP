<?php
//require APP_PATH . "/models/Student_Model.php";
 //namespace App\Frontend\controllers\;

class Students_Controller extends Base_Controller {

    private $__name;
    private $__yearsbirth;
    private $__age;
    private $__class;

     public function setName($name) {
      $this->__name = $name;
     }
     public function getName() {
        return $this->__name;
     }
      public function getyearsbirth() {
        return $this->__yearsbirth;
     }
      public function getage() {
        return $this->__age;
     }
      public function getClass() {
        return $this->__class;
     }

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
        $this->view->load('student/show', [
            'student' => $student
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
}
