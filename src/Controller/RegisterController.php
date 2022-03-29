<?php

namespace App\Controller;

use App\Form\UserType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use App\Entity\User;
use App\Service\Helper\UserHelper;

class RegisterController extends AbstractController
{
    private User $user;
    private EntityManagerInterface $entityManager;
    private UserHelper $userHelper;

    public function __construct(EntityManagerInterface $entityManager, UserHelper $userHelper)
    {;
        $this->user = new User();
        $this->entityManager = $entityManager;
        $this->userHelper = $userHelper;
    }

    public function index(): Response
    {
        $userForm = $this->createForm(UserType::class, $this->user, [
            'action' => $this->generateUrl('api.register'),
            'method' => 'POST'
        ]);
        // hash the password (based on the security.yaml config for the $user class)
        //$hashedPassword = $passwordHasher->hashPassword(
        //    $this->user,
        //    $this->plaintextPassword
        //);
        //$this->user->setPassword($hashedPassword);

        return $this->render('register/index.html.twig', [
            'userForm' => $userForm->createView()
        ]);
    }

    public function register(Request $request): Response{

        $user = $serializer->deserialize($request->request->get('user'), User::class, 'json');
        $user = $this->userHelper->setUser($user);

        return $this->render('home/index.html.twig');
    }
}