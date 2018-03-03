<?php

namespace MazeWorld\MoviesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContextInterface;
use MazeWorld\MoviesBundle\Entity\Admin;

class SecurityController extends Controller {

    public function loginAction(Request $request) {
        $session = $request->getSession();
/*		$user = new Admin();
		$user->setFirstName("Vipan");
		$user->setLastName("Kumar");
		$user->setEmail("vipan@gmail.com");
		$user->setPassword("admin123");
		$user->setGender(1);
		$user->setIsActive(1);
		$user->setSalt('admin');
		$user->setRoles(['ROLE_SUPER_ADMIN']);
		$em = $this->getDoctrine()->getManager();
		$em->persist($user);
		$em->flush();
die;*/
        // get the login error if there is one
        if ($request->attributes->has(SecurityContextInterface::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(
                    SecurityContextInterface::AUTHENTICATION_ERROR
            );
        } elseif (null !== $session && $session->has(SecurityContextInterface::AUTHENTICATION_ERROR)) {
            $error = $session->get(SecurityContextInterface::AUTHENTICATION_ERROR);
            $session->remove(SecurityContextInterface::AUTHENTICATION_ERROR);
        } else {
            $error = '';
        }

        // last username entered by the user
        $lastUsername = (null === $session) ? '' : $session->get(SecurityContextInterface::LAST_USERNAME);


        return $this->render(
                        'MazeWorldMoviesBundle:Security:login.html.twig', array(
                    // last username entered by the user
                    'last_username' => $lastUsername,
                    'error' => $error,
                        )
        );
    }
}

?>
