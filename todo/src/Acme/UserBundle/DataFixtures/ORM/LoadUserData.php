<?php

namespace Acme\UserBundle\DataFixtures\ORM;

use FOS\UserBundle\Model\User as UserModel;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Acme\UserBundle\Entity\User;

class LoadUserData implements FixtureInterface {

    public function load($manager) {
        
        $userAdmin = new User();
        $userAdmin->setUsername('admin');
        $userAdmin->setFirstName('Tiko');
        $userAdmin->setLastName('Banyini');
        $userAdmin->setEmail('tiko.banyini@kaizania.co.za');
        $userAdmin->setPlainPassword('12345');
        $userAdmin->setEnabled(1);
        $userAdmin->setRoles(array(UserModel::ROLE_SUPER_ADMIN));
        
        $manager->persist($userAdmin);
        $manager->flush();

        
        $participant = new User();
        $participant->setUsername('participant');
        $participant->setEmail('tbanyini@gmail.com');
        $participant->setPlainPassword('12345');
        $participant->setEnabled(1);
        $participant->setRoles(array(UserModel::ROLE_PROJECT_PARTICIPANT));
        
        $manager->persist($participant);
        $manager->flush();
        
        
      
    }

}

?>
