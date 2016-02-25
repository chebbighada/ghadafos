<?php

namespace moocApp\MoocBundle\Redirection;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;

class AfterLoginRedirection implements AuthenticationSuccessHandlerInterface {

/*
 *
 * @var \Symfony\Component\Routing\RouterInterface    
 */

private $router;

/**
 * @param RouterInterface $router    
 */
public function __construct(RouterInterface $router)
{
$this->router = $router;
}
/**
 * @param Request $request  
 * @param TokenInterface $token    
 * @return RedirectResponse    
 */
public function onAuthenticationSuccess(Request $request, TokenInterface $token) {
// Get list of roles for current user      
$roles = $token->getRoles();
// Tranform this list in array       
$rolesTab = array_map(function($role) {
return $role->getRole();
}, $roles);

// S'il s'agit d'un admin ou d'un super admin on le redirige vers le backoffice
        $user=$token->getUser();
       
        if (in_array('ROLE_SUPER_ADMIN', $rolesTab, true)) {
            $redirection = new RedirectResponse($this->router->generate('dashboard'));
        }
        
        elseif (in_array('ROLE_APPRENANT', $rolesTab, true)) {
            $redirection = new RedirectResponse($this->router->generate('fos_user_profile_show'));
        }
        elseif (in_array('ROLE_ORGANISME', $rolesTab, true)) {
            return $redirection = new RedirectResponse($this->router->generate('fos_user_profile_show'));
        }
        
        else {
            $redirection = new RedirectResponse($this->router->generate('dashboard'));
        }

        return $redirection;
    }
}