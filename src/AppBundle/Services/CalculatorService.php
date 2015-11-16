<?php
/**
 * Created by PhpStorm.
 * User: edgar
 * Date: 22/10/15
 * Time: 20:09
 */

namespace AppBundle\Services;


class CalculatorService
{

    private $op1;
    private $op2;
    private $result;

    /**
     * @return mixed
     */
    public function getOp1()
    {
        return $this->op1;
    }

    /**
     * @param mixed $op1
     */
    public function setOp1($op1)
    {
        $this->op1 = $op1;
    }

    /**
     * @return mixed
     */
    public function getOp2()
    {
        return $this->op2;
    }

    /**
     * @param mixed $op2
     */
    public function setOp2($op2)
    {
        $this->op2 = $op2;
    }

    /**
     * @return mixed
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param mixed $result
     */
    public function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * sum
     *
     * Description
     *
     */

    public function sum()
    {
        //return $this->result = ($this->getOp1() + $this->getOp2());

        $this->setResult($this->getOp1() + $this->getOp2());
    }

    /**
     * substract
     *
     * Description
     */

    public function substract()
    {
        $this->setResult($this->getOp1() - $this->getOp2()) ;
    }

    /**
     * multiply
     *
     * Description
     */

    public function multiply()
    {
        $this->setResult($this->getOp1() * $this->getOp2()) ;
    }

    /**
     * divide
     *
     * Description
     */

    public function divide()
    {
        $this->setResult((int) $this->getOp1() / $this->getOp2()) ;
    }
}