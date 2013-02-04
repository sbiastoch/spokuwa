<?php

namespace BCloud\SpoKuWaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use JMS\SecurityExtraBundle\Annotation\Secure;

/**
 * @Route("/")
 */
class SecuredController extends Controller
{
    /**
     * @Route("/login", name="_demo_login")
     * @Template()
     */
    public function loginAction()
    {
        if ($this->get('request')->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $this->get('request')->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } else {
            $error = $this->get('request')->getSession()->get(SecurityContext::AUTHENTICATION_ERROR);
        }

        return array(
            'last_username' => $this->get('request')->getSession()->get(SecurityContext::LAST_USERNAME),
            'error'         => $error,
        );
    }

    /**
     * @Route("/login_check", name="_security_check")
     */
    public function securityCheckAction()
    {
        // The security layer will intercept this request
    }

    /**
     * @Route("/logout", name="_demo_logout")
     */
    public function logoutAction()
    {
        $roles = $this->get('security.context')->getToken()->getUser()->getRoles();
        if($roles[0] == 'ROLE_STUDENT') {
            $url = 'bye';
        } else {
            $url = "login";
        }
        
        // session invalidation
        $this->get('request')->getSession()->invalidate();
        
        // OR cookie invalidation
        //foreach ($this-> $this->get('request')->cookies as $cookieName => $cookieData) {
        //    $response->headers->clearCookie($cookieName, $cookieData['path'], $cookieData['domain']);
        //}

        $this->get('security.context')->setToken(null);
        
        return $this->redirect($this->generateURL($url));
    }
}
