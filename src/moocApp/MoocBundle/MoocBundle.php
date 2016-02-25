<?php

namespace moocApp\MoocBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class MoocBundle extends Bundle
{
    public function getParent()
 {
 return 'FOSUserBundle';
 }
}
