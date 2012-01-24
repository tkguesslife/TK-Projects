<?php
namespace Acme\UserBundle\DataFixtures\ORM;

 use Doctrine\Common\DataFixtures\AbstractFixture;
 use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
 use Acme\UserBundle\Entity\User;
 use FOS\UserBundle\Model\User as UserModel;
 
class LoadGroupManagerUser extends AbstractFixture implements OrderedFixtureInterface{
    
    
    public function load($manager){
        
        $groupManager  = new User();        
        $groupManager->setRoles(array(UserModel::ROLE_CLIENT_MANAGER));
        $groupManager->setEmail('tkbean20@yahoo.com');
        $groupManager->setUsername('clientmanager');
        $groupManager->setPlainPassword('12345');
        $groupManager->setEnabled(1);
        $groupManager->addGroup($this->getReference('group-one'));
        
        $manager->persist($groupManager);
        $manager->flush();
        
    }
    
    
    public function getOrder(){
        return 2;
    }
}

?>
