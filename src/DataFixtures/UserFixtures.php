<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{
    private UserPasswordHasherInterface $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }

    public function load(ObjectManager $manager): void
    {
        // Création d’un utilisateur de type “contributeur” (= auteur)
        $contributor = new User();
        $contributor->setEmail('contributor@monsite.com');
        $hashedPassword = $this->passwordHasher->hashPassword(
            $contributor,
            'contributorpassword'
        );
        $contributor->setFirstname('Loïc');
        $contributor->setLastname('Pops');
        $contributor->setIdentifiant('surnom');
        $contributor->setRoles(['ROLE_CONTRIBUTOR']);
        $contributor->setPassword($hashedPassword);
        $manager->persist($contributor);

        $admin = new User();
        $admin->setEmail('admin@monsite.com');
        $hashedPassword = $this->passwordHasher->hashPassword(
            $admin,
            'adminpassword'
        );
        $admin->setFirstname('Loïc2');
        $admin->setLastname('Pops2');
        $admin->setIdentifiant('surnom2');
        $admin->setRoles(['ROLE_ADMIN']);
        $admin->setPassword($hashedPassword);
        $manager->persist($admin);
        $manager->flush();
    }
}
