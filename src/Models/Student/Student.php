<?php

namespace phptest\Models\Student;

class Student extends \phptest\Core\Model
{
    protected $id;
    protected $name;
    protected $email;
    protected $age;

    public function setStudent($args = [])
    {
        $this->setId($args['id']);
        $this->setName($args['name']);
        $this->setEmail($args['email']);
        $this->setAge($args['age']);
    }
    public function getStudent()
    {
        $args = [
            'id' => $this->getId(),
            'name' => $this->getName(),
            'email' => $this->getEmail(),
            'age' => $this->getAge(),
        ];
        return $args;
    }
    public function getStudentShow()
    {
        $args = [
            'id' => $this->getId(),
            'name' => $this->getName(),
            'email' => $this->getEmail(),
            'age' => $this->getAge(),
        ];
        return $args;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name ?? '';

        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email ?? '';

        return $this;
    }
    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age ?? '';

        return $this;
    }
}
