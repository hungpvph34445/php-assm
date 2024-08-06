<?php
namespace App\Controllers;
use App\Models\Student;


class StudentController extends BaseController{
    protected $student;
    public function __construct(){
        $this->student = new Student();
    }

    public function getStudent(){
        $students = $this->student->getListStudent();

      return $this->render('student.index',compact('students'));

    }
    public function addStudent(){
        return $this->render('student.add');
    }
    public function postStudent(){
        $error = [];
        if(isset($_POST['btn-submit'])){
            if(empty($_POST['name'])){
                $error[] = 'vui long nhap';
            }if(empty($_POST['year_of_brith'])){
                $error[] = 'vui long nhap';
            }if(empty($_POST['phone_number'])){
                $error[] = 'vui long nhap';
            }
            if(count($error)>=1){
                redirect('errors', $error, 'create');
            }
        }
    }
}

// function getStudent() {
//     $students = getListStudent();
//     return render('course.index',compact('students'));
// }