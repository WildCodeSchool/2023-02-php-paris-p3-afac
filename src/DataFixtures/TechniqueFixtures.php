<?php

namespace App\DataFixtures;

use App\Entity\Technique;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class TechniqueFixtures extends Fixture
{
    public const TECHNIQUE = [
        'dessin',
        'aquarelle',
    ];
    public function load(ObjectManager $manager): void
    {
        foreach (self::TECHNIQUE as $techniqueName) {
            $technique = new Technique();
            $technique->setName($techniqueName);
            $manager->persist($technique);
            $this->addReference('technique_' . $techniqueName, $technique);
        }
        $manager->flush();
    }
}
