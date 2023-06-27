<?php

namespace App\DataFixtures;

use App\Entity\Work;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class WorkFixtures extends Fixture implements DependentFixtureInterface
{
    public const WORK =
    [
        [
            'name' => 'Cheminée du Tampon',
            'publishedAt' => '1866',
            'description' => 'Attribuée parfois à l\'usine du Grand Tampon, mais c\'est peu probable:
                        l\'usine du Grand Tampon ayant été une scierie.
                        Or, ici, il s\'agit sans doute de l\'usine de Bel Air:
                        on reconnaît les deux corps principaux du bâtiment industriel
                        (purgerie et bâtiment abritant la machine à vapeur) en parallèle,
                        comme sur les figures 2 et 3. La cheminée carrée est sur le côté Nord,
                        construite en basalte, avec intercalation de poutres deux côtés par deux côtés.
                        Devant, un gardien,dont l\'ombre se projette sur la cheminée.
                        En arrière-plan, une allée de palmiers, qui semble mener vers la maison de maître.
                        La disposition des lieux correspond à celle qui existait à Bel Air.
                        Scène d\'apparence paisible ?',
            'reference' => '40FI79',
            'format' => '20 X 14',
            'picture' => 'Cheminee_40FI79.ca49c5a5.jpg',
            'technique' => 'aquarelle',
            'artist' => 'Hippolyte'
        ],
        [
            'name' => 'L\'Établissement',
            'publishedAt' => '1866',
            'description' => 'Le chemin de l\'Etablissement existe toujours aujourd\'hui,
                        à 400 mètres d\'altitude. Les deux cavaliers sont sans doute
                        Ch. H. N; Mortier de Trévise lui-même, et son beau-frère (Denis-André de K/véguen)?
                        En avant, 3 autres personnages cheminent à pied.
                        La route traverse le lit desseché de la Rivière d\'Abord,
                        et remonte légèrement vers l\'Etablissement (c\'est-à-dire l\'ensemble du fonds avec usine,
                        bâtiments annexes, et camp des travailleurs engagés,non représenté ici.
                        L\'usine elle-même est composée de deux corps parallèles de bâtiments,
                        flanqués chacun d\une cheminée: l\'une pour évacuer les fumées
                        de combustion pour la batterie Gimart, l\'autre la fumée de la machine à vapeur.
                        En quinconce, un autre bâtiment à l\'avant, abritant les "tables"
                        pour le séchage du sucre?',
            'reference' => '40FI78',
            'format' => '15 X 13.5',
            'picture' => 'UsineBelAir_40FI78.611ce888.jpg',
            'technique' => 'aquarelle',
            'artist' => 'Hippolyte'
        ],
        [
            'name' => 'Établissement de la Rivière',
            'publishedAt' => '1861 ou 1866',
            'description' => 'L\'usine (Etablissement) est installée rive gauche de la Rivière Saint-Etienne,
                        au débouché du lieu-dit l\'Entre-Deux.
                        Elle semble présenter la même physionomie que les autres établissements achetés
                        ou construits par Gabriel de K/Véguen: 2 corps principaux de bâtiments,
                        ici décalés l\'un par rapport à l\'autre,
                        avec des ouvertures en arc de cercle pour évacuer la chaleur,
                        la cheminée qui évacue les fumées de la batterie Gimart,
                        et, à l\'arrière, un ou deux bâtiments pour le séchage du sucre.
                        Au Premier plan, une escouade (une "bande")
                        de travailleurs engagés effectue la "trouaison",
                        pour la replantation de cannes à sucre, sous la direction d\'un Commandeur,
                        vêtu d\'un pantalon de toile bleue.
                        Un vacoa est ici le témoin indispensable de l\'usage de ses feuilles
                        pour le tressage de sacs, destinés ensuite à transporter le sucre produit.',
            'reference' => '40FI106',
            'format' => '19.5 X 16.5',
            'picture' => 'AD974_40FI106.3d9d2477.jpg',
            'technique' => 'aquarelle',
            'artist' => 'Hippolyte'
        ],
        [
            'name' => 'Boutchiana- Indien',
            'publishedAt' => 'juillet 1871',
            'description' => 'Boutchiana est devenu le domestique personnel de Ch.Mortier de Trévise,
                        et il a vieilli de 6 ans.',
            'reference' => '40FI',
            'format' => '',
            'picture' => '',
            'technique' => 'aquarelle',
            'artist' => 'Hippolyte'
        ],
        [
            'name' => 'Boutchiana- Casernes',
            'publishedAt' => '24 août 1865',
            'description' => 'Travailleur engagé depuis l\'Inde à l\'Etablissement des Casernes,
                        il tient une lance, peut-être a-t-il une fonction de gardien?
                        Sur sa fiche d\'engagement, il était recensé comme tailleur',
            'reference' => '40FI91',
            'format' => '19.5 X 11',
            'picture' => 'FRAD974_40FI91.da9cf76f.jpg',
            'technique' => 'aquarelle',
            'artist' => 'Hippolyte'
        ],
        [
            'name' => 'Boutchiana-Casernes, de face',
            'publishedAt' => '1865',
            'description' => 'Complète la précédente aquarelle. On devine la jeunesse de Boutchiana,
                        engagé à l\'adolescence. Arrivé à bord de Yanaon,en Inde,
                        à bord du navire de la famille Kerveguen,
                        Le Canova, on le dit âgé de 17 ans',
            'reference' => '40FI76',
            'format' => '19.5 X 8.5',
            'picture' => 'FRAD974_40FI90.11418c17.jpg',
            'technique' => 'aquarelle',
            'artist' => 'Hippolyte'
        ],
        [
            'name' => 'Cafrine et son petit au Tampon',
            'publishedAt' => '1861',
            'description' => 'C\'est une engagée, ou alors une affranchie.
                        Elle porte la robe de toile bleue,
                        dont la fourniture est obligatoire par l\'employeur,
                        selon les termes du contrat d\'engagement.
                        La pratique ne change guère de ce qui était déjà prévu
                        avant 1848 pour les esclaves,par le "Code noir" de 1723. ',
            'reference' => '40FI76',
            'format' => '18 X 13',
            'picture' => 'MORTIERdeTREVISE_caffrine1861.c2ec0a6f.jpg',
            'technique' => 'aquarelle',
            'artist' => 'Hippolyte'
        ],
        [
            'name' => 'La vieille (Victorine) Mme Samsi Casernes',
            'publishedAt' => '15 décembre 1865',
            'description' => 'La vieille dame est assise sur une natte,
                        vêtue de la traditionnelle robe de toile bleue fournie par l\'employeur.
                        Son foulard noué sur la tête est taillé dans la même toile.',
            'reference' => '40FI52',
            'format' => '18 X 12',
            'picture' => 'FRAD974_40FI52.46f74207.jpg',
            'technique' => 'aquarelle',
            'artist' => 'Hippolyte'
        ],
        [
            'name' => 'Jamali, Cafre, Gardien',
            'publishedAt' => '1861',
            'description' => '"Cafre" veut dire que Jamali n\'est pas né sur l\'Habitation,
                        mais qu\'il a vraisemblablement été recruté comme engagé.
                        Il est armé d\'une lance, et surveille l\'orée des champs,
                        ou les abords du camp des travailleurs.',
            'reference' => '40Fi60',
            'format' => '26 X 16.5',
            'picture' => 'Jamali.aecddd12.jpg',
            'technique' => 'aquarelle',
            'artist' => 'Hippolyte'
        ],
        [
            'name' => 'Le parapluie du pauvre Citoyen',
            'publishedAt' => '1861',
            'description' => 'Le titre de citoyen est une fierté pour les affranchis de 1848
                        qui travaillent sur la propriété ou dans les Etablissements K/Véguen.
                        La pluie est rare à Saint-Pierre, beaucoup plus fréquente au Tampon
                        (pluies orographiques pendant la saison chaude, celle de la coupe des cannes).
                        Ici, le créole engagé dispose d\'une maigre rémunération,
                        juste suffisante pour sa nourriture et de menus frais à la "boutique"
                        Depuis 1859, le salaire est en outre versé en kreutzers
                        ( démonétisés, au cours forcé de 1 franc.
                        A l\'arrière-plan, sur la droite,
                        la silhouette d\'une cheminée d\'usine, peut-être celle de Bel-Air, au Tampon.',
            'reference' => '40FI55',
            'format' => '19 X 11.5',
            'picture' => 'FRAD974_40FI55.cbca2102.jpg',
            'technique' => 'aquarelle',
            'artist' => 'Hippolyte'
        ],
        [
            'name' => 'Le bassin rouge au Tampon, la ravine descend',
            'publishedAt' => '10 février 1866',
            'description' => 'La cascade alimente un bassin à proximité d\'un affluent de la rivière d\'Abord',
            'reference' => '40Fi77',
            'format' => '15 X 9,5',
            'picture' => 'FRAD974_40FI77.88dfe062.jpg',
            'technique' => 'aquarelle',
            'artist' => 'Hippolyte'
        ],
        [
            'name' => 'Le volcan de Bourbon vu du Pas de Bellecombre',
            'publishedAt' => 'août 1861',
            'description' => 'Cela ne fait guère longtemps que le passage
                        par le Pas de Bellecombe a été trouvé.
                        Le lieu porte le nom du gouverneur présent au moment
                        de la découverte du passage mais c\'est un esclave,
                        Jacob, qui l\'a découvert, en réalité.
                        Bellecombe avait commandité l\'expédition.',
            'reference' => '40Fi105bis',
            'format' => '18 X 24',
            'picture' => 'FRAD974_40FI105bis.deb9b957.jpg',
            'technique' => 'aquarelle',
            'artist' => 'Hippolyte'
        ],
        [
            'name' => 'Caille de Bourbon',
            'publishedAt' => '21 septembre 1861',
            'description' => 'En réalité, la caille fut introduite d\'Asie, Inde ou chine, vers 1850.
                        C\'est la femelle qui est colorée ainsi de rouge au bas des ailes.
                        A l\'époque de Mortier de Trévise, c\'est donc une curiosité, un peu en disparition,
                        à cause de l\'extension des champs cultivés en cannes à sucre.',
            'reference' => '40Fi105bis',
            'format' => '19 X 23',
            'picture' => 'caille.f2e834c9.jpg',
            'technique' => 'aquarelle',
            'artist' => 'Hippolyte'
        ],
        [
            'name' => 'Lucie le ventre plein de cari',
            'publishedAt' => '1866',
            'description' => 'Une autre petite fille de Victorine,
                        sans doute dans la maison des Casernes.',
            'reference' => '40Fi105bis',
            'format' => '40Fi75',
            'picture' => 'FRAD974_40FI75.32b9295e.jpg',
            'technique' => 'dessin',
            'artist' => 'Hippolyte'
        ],
        [
            'name' => 'La belle Tina',
            'publishedAt' => '1866',
            'description' => 'Visiblement, Mortier de Trévise a été impressionné par la chevelure de Tina.
                        Encore une petite fille de Victorine,plus jeune.
                        Il semble que les fillettes fassent leur apprentissage de domestiques
                        dans la propriété des Kerveguen.',
            'reference' => '40Fi105bis',
            'format' => '40Fi74',
            'picture' => 'FRAD974_40FI74.f7c59c36.jpg',
            'technique' => 'dessin',
            'artist' => 'Hippolyte'
        ],
        [
            'name' => 'La pli y fait pas rien, ça ! Tampon',
            'publishedAt' => '27 janvier 1866',
            'description' => 'La suite du commentaire est: "Ca ne lui fait rien,... tant pis pour lui !
                        mais aux cannes ça leur fait du bien tant mieux pour elles !...."
                        Le jeune créole porte un chapeau de feutre déformé,
                        pas de chaussures, comme la majorité des travailleurs.
                        Janvier est en pleine période cyclonique: est-ce le cas ici? ',
            'reference' => '40FI53.2',
            'format' => '30 X 20',
            'picture' => 'lapli Tampon.0db53700.jpg',
            'technique' => 'dessin',
            'artist' => 'Hippolyte'
        ],
        [
            'name' => 'Monsieur Bourrayne dans le jardin des Casernes',
            'publishedAt' => '1861',
            'description' => 'la suite du commentaire est: "Allons, Virasami,
                        vivement mettre la racine de ce plant (?) comme à Madras!" ',
            'reference' => '40FI59',
            'format' => '20 X 12.5',
            'picture' => 'MORTIER.de.TREVISE_Mr.Bourraye.dans.jardin.Casernes_1861.076d6c20.jpg',
            'technique' => 'dessin',
            'artist' => 'Hippolyte'
        ],
        [
            'name' => 'Chanvert descend le chemin de la Plaine, Golo est à ses côtés',
            'publishedAt' => '1861',
            'description' => 'Chanvert est peut-etre un ami de la famille.
                        Golo est un domestique qui l\'accompagne.
                        A l\'arrière du tilbury, il semble qu\'il y ait une borne kilométrique
                        sur le côté de la route.
                        Le chemin de la Plaine relie Saint-Pierre à la Plaine des Cafres,
                        et, au-delà, à Saint-Benoît. L\'Etablissement de Bel-Air est situé
                        au tiers du parcours, entre La Plaine des Cafres et Saint-Pierre.',
            'reference' => '40Fi72',
            'format' => '8 X 15.5',
            'picture' => 'AD974_40FI72-ChanvertGolo.aa3a214c.jpg',
            'technique' => 'dessin',
            'artist' => 'Hippolyte'
        ],
        [
            'name' => 'Mamzelle',
            'publishedAt' => '14 avril 1866',
            'description' => 'Les chevaux sont rares sur les établissements:
                        ils font l\'objet de soins attentifs,
                        et ne sont montés que par les propriétaires des Etablissements,
                        et les contremaîtres. Selle et cuirs peuvent être fabriqués sur place:
                        il y eut un atelier sur l\'Etablissement du Tampon.',
            'reference' => '40Fi108',
            'format' => '14.5 X 19.5',
            'picture' => 'Mamsellemini_40FI108.fc3c1475.jpg',
            'technique' => 'dessin',
            'artist' => 'Hippolyte'
        ],
        [
            'name' => 'Charrette tirée par des mulets',
            'publishedAt' => '14 avril 1866',
            'description' => '4 mulets tirent une charrette apportant des cannes
                        frâichement coupées à l\'usine.
                        Les mulets sont nombreux dans l\'île à l\'époque de l\'industrialisation sucrière.
                        Importés du Poitou, ce sont des bêtes robustes,
                        qui coûtent moins chers que des boeufs ou des chevaux,
                        pour lesquelles on construit des écuries.
                        Elles ont des noms: on sait que dans l\'Etablissement des Casernes,
                        Tec Tec, Langoutil, et Malheur sont des noms de mules.',
            'reference' => '40FI73',
            'format' => '6.5 X 15.5',
            'picture' => 'trevise-cannes_1861.293b0662.jpg',
            'technique' => 'dessin',
            'artist' => 'Hippolyte'
        ],

    ];
    public function load(ObjectManager $manager): void
    {
        foreach (self::WORK as $workName => $value) {
            $work = new Work();
            $work->setName($value['name']);
            $work->setPublishedAt($value['publishedAt']);
            $work->setDescription($value['description']);
            $work->setReference($value['reference']);
            $work->setFormat($value['format']);
            $work->setPicture($value['picture']);
            $work->setTechnique($this->getReference('technique_' . $value['technique']));
            $work->setArtist($this->getReference('artist_' . $value['artist']));
            $manager->persist($work);
            $this->addReference('work_' . $workName += 1, $work);
        }
        $manager->flush();
    }

    public function getDependencies()
    {
        return [
        TechniqueFixtures::class,
        ];
    }
}
