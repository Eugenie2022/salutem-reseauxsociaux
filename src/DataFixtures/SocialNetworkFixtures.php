<?php

namespace App\DataFixtures;

use App\Entity\SocialNetwork;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class SocialNetworkFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $facebook = new SocialNetwork();
        $facebook->setName('Facebook');
        $facebook->setIcon('fa-facebook-square');
        $facebook->setLink('https://www.facebook.com/');
        $manager->persist($facebook);

        $instagram = new SocialNetwork();
        $instagram->setName('Instagram');
        $instagram->setIcon('fa-instagram');
        $instagram->setLink('https://www.instagram.com/');
        $manager->persist($instagram);

        $linkedin = new SocialNetwork();
        $linkedin->setName('LinkedIn');
        $linkedin->setIcon('fa-linkedin-square');
        $linkedin->setLink('https://www.linkedin.com/');
        $manager->persist($linkedin);

        $twitter = new SocialNetwork();
        $twitter->setName('Twitter');
        $twitter->setIcon('fa-twitter-square');
        $twitter->setLink('https://twitter.com/');
        $manager->persist($twitter);

        $manager->flush();
    }
}
