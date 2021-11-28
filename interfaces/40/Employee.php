<?php

class Employee implements iEmployee
{

    private $name;
    private $age;
    private $salary;

    /**
     * getter getName  
    **/ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * setter setName  
    **/ 
    public function setName( $name )
    {
        $this->name = $name;
    }

    /**
     * getter getAge  
    **/ 
    public function getAge()
    {
        return $this->age;
    }

    /**
     * setter setAge  
    **/ 
    public function setAge( $age )
    {
        $this->age = $age;
    }

    /**
     * getter getSalary  
    **/ 
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * setter setSalary  
    **/ 
    public function setSalary( $salary )
    {
        $this->salary = $salary;
    }

}