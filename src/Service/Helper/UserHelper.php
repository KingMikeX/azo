<?php

namespace App\Service\Helper;

use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;

class UserHelper{

    private UserRepository $userRepository;
    private EntityManagerInterface $entityManager;
    private User $user;

    public function __construct(UserRepository $userRepository, EntityManagerInterface $entityManager, User $user)
    {
        $this->userRepository = $userRepository;
        $this->entityManager = $entityManager;
        $this->user = $user;
    }

    public function setUser(User $user){
        echo "User Dump:\n";
        dump($user);
        $this->user->setUsername($user->getUsername());
        $this->user->setRoles(['ROLE_USER']);
        $salt = $this->user->getSalt();
        $password = $this->user->getPassword();
        $password = $password+$salt;
        echo "Set Dump:\n";
        dump($user);
        dd($password);
        $this->user->setPassword();

        return $this->user;
    }

}