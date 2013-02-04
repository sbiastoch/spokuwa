<?php
namespace BCloud\SpoKuWaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;

class LoginController extends Controller
{
	public function loginAction()
	{
		$request = $this->getRequest();
		$session = $request->getSession();

		// get the login error if there is one
		if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
			$error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
		} else {
			$error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
			$session->remove(SecurityContext::AUTHENTICATION_ERROR);
		}

		return $this->render('BCloudSpoKuWaBundle:Login:login.html.twig', array(
			// last username entered by the user
			'last_username' => $session->get(SecurityContext::LAST_USERNAME),
			'error' => $error,
		));
	}

    public function securityCheckAction()
    {
        // The security layer will intercept this request
    }

    public function logoutAction()
    {
        $roles = $this->get('security.context')->getToken()->getUser()->getRoles();
        if($roles[0] == 'ROLE_STUDENT') {
            $url = 'byebye';
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