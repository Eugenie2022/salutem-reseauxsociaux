<?php

namespace App\DataFixtures;

use App\Entity\AreaType;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AreaTypeFixtures extends Fixture
{
    public const HOSPITAL_REFERENCE = "area-type-hospital";
    public const HOME_REFERENCE = "area-type-home";
    public const OFFICE_REFERENCE = "area-type-office";
    public function load(ObjectManager $manager): void
    {
        $hospital = new AreaType();
        $hospital->setName('hospital');
        $manager->persist($hospital);
        $this->addReference(self::HOSPITAL_REFERENCE, $hospital);

        $home = new AreaType();
        $home->setName('domicile');
        $manager->persist($home);
        $this->addReference(self::HOME_REFERENCE, $home);

        $office = new AreaType();
        $office->setName('cabinet');
        $manager->persist($office);
        $this->addReference(self::OFFICE_REFERENCE, $office);

        $manager->flush();
    }
}
