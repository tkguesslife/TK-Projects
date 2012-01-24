<?php
namespace Acme\UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

use Acme\UserBundle\Entity\Group;

class LoadGroupData extends AbstractFixture implements OrderedFixtureInterface {
    
    public function load($manager){
        
        $group = new Group('Group One');
        
        
        $manager->persist($group);
        $manager->flush();
        
        $this->addReference('group-one', $group);
    }
    
    public function getOrder(){
        return 1; //we first create a group then add group to a user.
    }
	
} 