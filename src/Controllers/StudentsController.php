<?php

namespace phptest\Controllers;

use phptest\Core\Controller;
use phptest\Models\Student\StudentResponsitory;
use phptest\Models\Student\Student;

class StudentsController extends Controller
{
    private $studentResponsitory;
    public function __construct()
    {
        $this->studentResponsitory = new StudentResponsitory;
    }
    function view()
    {
        $d['show'] = $this->studentResponsitory->getAll();
        $this->set($d);
        $this->render("readStudent");
    }

    function create()
    {
        $this->render("createStudent");
        if (isset($_POST["name"])) {
            $args = [
                'name' => $_POST["name"],
                'email' => $_POST["email"],
                'age' => $_POST["age"],
            ];
            $student = new Student;
            $student->setStudent($args);

            if ($this->studentResponsitory->add($student)) {
                header("Location: " . WEBROOT);
            }
        }
    }

    function edit($id)
    {
        $d['show'] = $this->studentResponsitory->get($id);
        $this->set($d);
        $this->render("updateStudent");
        if (isset($_POST["name"])) {
            $args = [
                'id' => $id,
                'name' => $_POST["name"],
                'email' => $_POST["email"],
                'age' => $_POST["age"],
            ];
            $student = new Student;
            $student->setStudent($args);

            if ($this->studentResponsitory->edit($student)) {
                header("Location: " . WEBROOT);
            }
        }
    }

    function delete($id)
    {
        if ($this->studentResponsitory->delete($id)) {
            header("Location: " . WEBROOT);
        }
    }
}
