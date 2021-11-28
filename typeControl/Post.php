<?php

/**
 * class Post
 */ 

class Post
{
    private $postName;
    private $salary;

    public function __construct( $postName, $salary )
    {
        $this->postName = $postName;
        $this->salary = $salary;
    }

    /**
    * getter PostName
    **/ 
    public function getPostName()
    {
        return $this->postName;
    }

    /**
    * setter PostName
    **/ 
    public function setPostName( $postName )
    {
        $this->postName = $postName;
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


