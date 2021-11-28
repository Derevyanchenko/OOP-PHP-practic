<?php

/**
 * class Employee 
 **/ 

class Employee
{

    private $name;
    private $surname;
    public $post;

    public function __construct( $name, $surname, Post $post  )
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->post = $post;
    }

    public function changePost( Post $post )
    {
        $this->post = $post;
    }

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
    * getter getSurname
    **/ 
    public function getSurname()
    {
        return $this->surname;
    }

    /**
    * setter setSurname
    **/ 
    public function setSurname( $surname )
    {
        $this->surname = $surname;
    }

}