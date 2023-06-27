<?php

namespace App\DataFixtures;

use App\Entity\Artist;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class ArtistFixtures extends Fixture
{
    public const ARTIST =
    [
        [
            'firstname' => 'Hippolyte',
            'lastname' => 'Mortier de Trévise',
            'biography' => 'Fils de Napoléon Mortier de Trévise (1804-1869), 
                        2e duc de Trévise et de la duchesse née Anne-Marie Lecomte-Stuart (1808-1870)',
            'bornAt' => '1835',
            'deadAt' => '1892'
        ]
    ];
    public function load(ObjectManager $manager): void
    {
        foreach (self::ARTIST as $value) {
            $artist = new Artist();
            $artist->setFirstname($value['firstname']);
            $artist->setLastname($value['lastname']);
            $artist->setBiography($value['biography']);
            $artist->setBornAt($value['bornAt']);
            $artist->setDeadAt($value['deadAt']);
            $manager->persist($artist);
            $this->addReference('artist_' . $value['firstname'], $artist);
        }
        $manager->flush();
    }
}
