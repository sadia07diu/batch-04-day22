<?php


namespace App\Classes;


class Prime
{
    protected $inputNumber;
    protected $result;
    protected $i;
    protected $z;

    public function __construct($post=null)
    {
        $this->inputNumber = $post['input_number'];
    }

    public function index()
    {
//        $this->inputNumber = 6
        if ($this->inputNumber == 1)
        {
            return $this->z = 0;
        }
        for ($this->i = 2; $this->i <= $this->inputNumber/2; $this->i++)
        {
            if ($this->inputNumber % $this->i == 0)
            {
                return $this->z = 0;
            }
        }
        return $this->z = 1;

    }
}