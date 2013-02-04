<?php

namespace Acme\HelloBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class AcmeHelloBundle extends Bundle
{    
	public function indexAction($name)
    {
        return new Response('<html><body>Hello '.$name.'!</body></html>');
    }
}
