<?php

namespace Acme\UserBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\Column(name="first_name", type="string", length=100, nullable="true")
     * 
     * @var string $firstName
     */
    protected $firstName;
    
    /**
     * @ORM\Column(name="middle_name", type="string", length=100, nullable="true")
     * 
     * @var string $middle_name
     */
    protected $middleName;
    
    /**
     * @ORM\Column(name="last_name", type="string", length=100, nullable="true")
     * 
     * @var string $lastName
     */
    protected $lastName;
    
    /**
     * @ORM\Column(name="mobile_number", type="integer", length=10, nullable="true" )
     * 
     * @var integer $mobileNumber
     */
    protected $mobileNumber;
    
    /**
     * @ORM\Column(name="created_at", type="datetime")
     * 
     * @var DateTime $createdAt
     */
    protected $createdAt;
    
    /**
     * @ORM\Column(name="updated_at", type="datetime")
     * 
     * @var DateTime $updateAt
     */
    protected $updatedAt;
    
    
    
    /**
     * @ORM\ManyToMany(targetEntity="Acme\UserBundle\Entity\Group")
     * @ORM\JoinTable(name="fos_user_user_group",
     *      joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="group_id", referencedColumnName="id")}
     * )
     */
    protected $groups;
    
    public function __construct()
    {
        parent::__construct();
        
        $this->createdAt = new \DateTime();
        $this->updatedAt = new \DateTime();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set middleName
     *
     * @param string $middleName
     */
    public function setMiddleName($middleName)
    {
        $this->middleName = $middleName;
    }

    /**
     * Get middleName
     *
     * @return string 
     */
    public function getMiddleName()
    {
        return $this->middleName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set mobileNumber
     *
     * @param integer $mobileNumber
     */
    public function setMobileNumber($mobileNumber)
    {
        $this->mobileNumber = $mobileNumber;
    }

    /**
     * Get mobileNumber
     *
     * @return integer 
     */
    public function getMobileNumber()
    {
        return $this->mobileNumber;
    }

    /**
     * Set createdAt
     *
     * @ORM\prePersist
     *
     * @param datetime $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Get createdAt
     *
     * @return datetime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     * 
     * @ORM\preUpdate
     *
     * @param datetime $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * Get updatedAt
     *
     * @return datetime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }



}