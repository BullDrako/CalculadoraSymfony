<?php
/**
 * Created by PhpStorm.
 * User: edgar
 * Date: 27/10/15
 * Time: 15:57
 */

namespace AppBundle\Controller;

use AppBundle\Services\CalculatorService;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;



class CalculatorController extends Controller
{

    /**
     *@Route(
     *          path = "/calculator/sum/",
     *          name = "app_default_sum")
     *
     */


    public function sumAction()
    {
        return $this->render(':default:dosum.html.twig');
    }


    /**
     *@Route(
     *      path = "/calculator/dosum/",
     *      name = "app_default_dosum")
     *
     */


    public function doSumAction(Request $request)
    {
        $op1 = $request->request->get('op1');
        $op2 = $request->request->get('op2');

        //if ($c->has('calculator')){
        //$c = $this->get('calculator');  // es lo misimo que $c = container->get('calculator'); // calculator es el nombre del servicio
        $c = $this->container->get('calculator');
        $c->setOp1($op1);
        $c->setOp2($op2);

        $c->sum();

        $result = $c->getResult();


        return $this->render(':default:sum.html.twig', array(  //render devolver una vista
                'result' => $result,

            )
        );
    }



    /**
     * @Route(
     *          path = "/calculator/substract/",
     *          name = "app_default_substract")
     *
     */

    public function substractAction()
    {
        return $this->render(':default:dosubstract.html.twig');
    }


    /**
     * @Route(
     *          path = "/calculator/dosubstract/",
     *          name = "app_default_dosubstract")
     */
    public function doSubstractAction(Request $request)
    {
        $op1 = $request->request->get('op1');
        $op2 = $request->request->get('op2');


        $c = $this->container->get('calculator'); // calculator es el nombre del servicio
        $c->setOp1($op1);
        $c->setOp2($op2);

        $c->substract();

        $result = $c->getResult();


        return $this->render(':default:substract.html.twig', array(  //render devolver una vista
                'result' => $result,

            )
        );
    }


    /**
     * @Route(
     *          path = "/calculator/multiply/",
     *          name = "app_default_multiply")
     *
     */
    public function multiplyAction()
    {
        return $this->render(':default:domultiply.html.twig');
    }


    /**
     * @Route(
     *          path = "/calculator/domultiply/",
     *          name = "app_default_domultiply")
     */

    public function doMultiplyAction(Request $request)
    {
        $op1 = $request->request->get('op1');
        $op2 = $request->request->get('op2');


        $c = $this->container->get('calculator'); // calculator es el nombre del servicio
        $c->setOp1($op1);
        $c->setOp2($op2);

        $c->multiply();

        $result = $c->getResult();


        return $this->render(':default:multiply.html.twig', array(  //render devolver una vista
            'result' => $result,
            )
        );
    }

    /**
     * @Route(
     *          path = "/calculator/divide/",
     *          name = "app_default_divide")
     */

    public function divideAction()
    {
        return $this->render(':default:dodivide.html.twig');
    }

    /**
     * @Route(
     *          path = "/calculator/dodivide",
     *          name = "app_default_dodivide")
     */

    public function doDivideAction(Request $request)
    {
        $op1 = $request->request->get('op1');
        $op2 = $request->request->get('op2');


        $c = $this->container->get('calculator'); // calculator es el nombre del servicio
        $c->setOp1($op1);
        $c->setOp2($op2);

        $c->divide();

        $result = $c->getResult();


        return $this->render(':default:divide.html.twig', array(  //render devolver una vista
                'result' => $result,
            )
        );
    }
}