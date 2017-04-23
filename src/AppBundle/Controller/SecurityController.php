<?php
/**
 * Created by PhpStorm.
 * User: seth
 * Date: 23/04/2017
 * Time: 13:10
 */

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/login", name="login")
 * @Method({"GET", "POST"})
 */
class SecurityController
{

    public function loginAction(Request $request)
    {
        $user = new User();
        $form = $this->createForm('AppBundle\Form\UserType', $user);
    }

}