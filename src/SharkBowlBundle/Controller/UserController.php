<?php

namespace SharkBowlBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    public function createAction()
    {
        return $this->render('SharkBowlBundle:User:create.html.twig', array(
                // ...
            ));    }

    public function editAction()
    {
        return $this->render('SharkBowlBundle:User:edit.html.twig', array(
                // ...
            ));    }

}
