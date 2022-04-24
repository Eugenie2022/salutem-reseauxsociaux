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
        $facebook->setIcon('<i class="fa fa-facebook-square" aria-hidden="true"></i>');
        $facebook->setLink('https://www.facebook.com/');
        $manager->persist($facebook);

        $instagram = new SocialNetwork();
        $instagram->setName('Instagram');
        $instagram->setIcon('<i class="fa fa-instagram" aria-hidden="true"></i>');
        $instagram->setLink('https://www.instagram.com/');
        $manager->persist($instagram);

        $linkedin = new SocialNetwork();
        $linkedin->setName('LinkedIn');
        $linkedin->setIcon('<i class="fa fa-linkedin-square" aria-hidden="true"></i>');
        $linkedin->setLink('https://www.linkedin.com/');
        $manager->persist($linkedin);

        $twitter = new SocialNetwork();
        $twitter->setName('Twitter');
        $twitter->setIcon('<i class="fa fa-twitter-square" aria-hidden="true"></i>');
        $twitter->setLink('https://twitter.com/');
        $manager->persist($twitter);

        $manager->flush();
    }
}
