<?php


namespace App\Classes;


class Calculator
{
    protected $firstNumber;
    protected $lastNumber;
    protected $option;
    protected $result;

    public function __construct($post=null)
    {
        if ($post)
        {
            $this->firstNumber = $post['first_number'];
            $this->lastNumber = $post['last_number'];
            $this->option = $post['option'];
        }
    }
    protected function add ()
    {
        $this->result = $this->firstNumber + $this->lastNumber;
        return $this->result;
    }
    protected function sub ()
    {
        $this->result = $this->firstNumber - $this->lastNumber;
        return $this->result;
    }
    protected function mul ()
    {
        return $this->firstNumber * $this->lastNumber;
    }
    public function div ()
    {
        return $this->firstNumber / $this->lastNumber;
    }
    protected function mod ()
    {
        return $this->firstNumber % $this->lastNumber;
    }

    public function index ()
    {
        switch ($this->option)
        {
            case '+' :
                $this->result = $this->add();
                break;
            case '-' :
                $this->result = $this->sub();
                break;
            case '*' :
                $this->result = $this->mul();
                break;
            case '/' :
                $this->result = $this->div();
                break;
            case '%' :
                $this->result = $this->mod();
                break;
        }
        return $this->result;
    }
}