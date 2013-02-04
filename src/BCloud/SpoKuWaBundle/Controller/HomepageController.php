<?php

namespace BCloud\SpoKuWaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomepageController extends Controller
{
    public function homeAction()
    {
        return $this->render('BCloudSpoKuWaBundle:Homepage:home.html.twig');
    }

    public function aboutAction()
    {
        return $this->render('BCloudSpoKuWaBundle:Homepage:about.html.twig');
    }

    public function prosAction()
    {
        return $this->render('BCloudSpoKuWaBundle:Homepage:pros.html.twig');
    }

    public function exampleAction()
    {
        return $this->render('BCloudSpoKuWaBundle:Homepage:example.html.twig');
    }

    public function impressumAction()
    {
        return $this->render('BCloudSpoKuWaBundle:Homepage:impressum.html.twig');
    }
}