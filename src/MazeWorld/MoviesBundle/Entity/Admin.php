<?php

namespace MazeWorld\MoviesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

use Symfony\Component\Security\Core\User\AdvancedUserInterface;

/**
 * User
 *
 * @ORM\Table(name="users")
 * @ORM\HasLifecycleCallbacks
 * @ORM\Entity(repositoryClass="MazeWorld\MoviesBundle\Entity\AdminRepository")
 * @UniqueEntity(
 *     fields={"email", "username"},
 *     errorPath="email",
 *     message="The email address/username is already in use in our system."
 *     )
 */
class Admin implements AdvancedUserInterface, \Serializable
{
    public function __toString() {
        return $this->getFirstName().' '.$this->getLastName().' ('.$this->getEmail().')';
    }
    
    public function isAccountNonExpired() {
        return true;
    }

    public function fullName(){
        return $this->getFirstName().' '.$this->getLastName();
    }

    /**
     * Checks whether the user is locked.
     *
     * Internally, if this method returns false, the authentication system
     * will throw a LockedException and prevent login.
     *
     * @return bool true if the user is not locked, false otherwise
     *
     * @see LockedException
     */
    public function isAccountNonLocked() {
        return true;
    }

    /**
     * Checks whether the user's credentials (password) has expired.
     *
     * Internally, if this method returns false, the authentication system
     * will throw a CredentialsExpiredException and prevent login.
     *
     * @return bool true if the user's credentials are non expired, false otherwise
     *
     * @see CredentialsExpiredException
     */
    public function isCredentialsNonExpired() {
        return true;
    }

    /**
     * Checks whether the user is enabled.
     *
     * Internally, if this method returns false, the authentication system
     * will throw a DisabledException and prevent login.
     *
     * @return bool true if the user is enabled, false otherwise
     *
     * @see DisabledException
     */
    public function isEnabled() {
        return $this->getIsActive();
    }


    public function isGranted($role) {
        if (is_array($this->getRoles())) {
            if (in_array($role, $this->getRoles())) {
               return true;
            }
        }

        return false;
    }

    public function getIsAdmin() {
	
        if (is_array($this->getRoles())) {
            if (in_array('ROLE_ADMIN',$this->getRoles())) {
    	       return "YES";
    	    }
        }

        return "NO";
    }
    
    public function getFullName() {
    	return $this->getFirstName().' '.$this->getLastName();
    }
    
	/**
	 * @ORM\PrePersist
	 */
     public function onPrePersist() {

        $this->setCreationDate(new \DateTime("now", new \DateTimeZone('UTC')));
        $this->setModificationDate(new \DateTime("now", new \DateTimeZone('UTC')));
        $this->setIsActive(1);
        $this->setUsername($this->getEmail());
        if (!$this->isSha1($this->getPassword())) {
            $this->setPassword(SHA1($this->getPassword()));
        }
        
    }

    public function onPreUpdate() {
    
        $this->setModificationDate(new \DateTime("now", new \DateTimeZone('UTC')));
        $this->setUsername($this->getEmail());
        if (!$this->isSha1($this->getPassword())) {
            $this->setPassword(SHA1($this->getPassword()));
        }
    }
    
    function isSha1($str) {
       return (bool) preg_match('/^[0-9a-f]{40}$/i', $str);
    }
    
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=255)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=255)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     * @ORM\Column(name="gender", type="boolean")
     */
    private $gender;

    /**
     * @var boolean
     * @ORM\Column(name="is_active", type="smallint")
     */
    private $isActive;

    /**
     * @var \DateTime
     * @ORM\Column(name="creation_date", type="datetime")
     */
    private $creationDate;

    /**
     * @var \DateTime
     * @ORM\Column(name="modification_date", type="datetime", nullable=true)
     */
    private $modificationDate;

    /**
     * @var string
     * @ORM\Column(name="password_reset_code", type="string", length=255, nullable=true)
     */
    private $passwordResetCode;

    /**
     * @var string
     *
     * @ORM\Column(name="salt", type="string", length=255, nullable=true)
     */
    private $salt;

    /** @ORM\Column(name="roles", type="string", length=255) **/
    private $roles;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    private $username;

    /**
     * Set username
     *
     * @param string $username
     * @return Admin
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set gender
     *
     * @param string $gender
     * @return User
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return string 
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     * @return User
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean 
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Set creationDate
     *
     * @param \DateTime $creationDate
     * @return User
     */
    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    /**
     * Get creationDate
     *
     * @return \DateTime 
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * Set modificationDate
     *
     * @param \DateTime $modificationDate
     * @return User
     */
    public function setModificationDate($modificationDate)
    {
        $this->modificationDate = $modificationDate;

        return $this;
    }

    /**
     * Get modificationDate
     *
     * @return \DateTime 
     */
    public function getModificationDate()
    {
        return $this->modificationDate;
    }


    /**
     * Set passwordResetCode
     *
     * @param string $passwordResetCode
     * @return User
     */
    public function setPasswordResetCode($passwordResetCode)
    {
        $this->passwordResetCode = $passwordResetCode;

        return $this;
    }

    /**
     * Get passwordResetCode
     *
     * @return string 
     */
    public function getPasswordResetCode()
    {
        return $this->passwordResetCode;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Admin
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Admin
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set salt
     *
     * @param string $salt
     * @return Admin
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Get salt
     *
     * @return string
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * @inheritDoc
     */
    public function getRoles()
    {
	    //return array('ROLE_SUPER_ADMIN');
	    return json_decode($this->roles);
    }

    public function getRolesString()
    {
        $roles = json_decode($this->roles);

        if (is_array($roles)) {
            return implode(", ", $roles);
        }

        return "";
    }

    public function hasRole($role_name) {
        return in_array($role_name, $this->getRoles());
    }

    /**
     * @inheritDoc
     */
    public function eraseCredentials()
    {
    }

    /**
     * @see \Serializable::serialize()
     */
    public function serialize()
    {
        return serialize(array(
            $this->id,
        ));
    }

    /**
     * @see \Serializable::unserialize()
     */
    public function unserialize($serialized)
    {
        list (
            $this->id,
        ) = unserialize($serialized);
    }

    /**
     * Set roles
     *
     * @param string $roles
     * @return Admin
     */
    public function setRoles($roles)
    {
        if ( is_array($roles) ) {
            $this->roles = implode("|", $roles);
        } else {
            $this->roles = $roles;
        }


        return $this;
    }



    /**
     * Constructor
     */
    public function __construct()
    {
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     * @return Admin
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
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
     * Set lastName
     *
     * @param string $lastName
     * @return Admin
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
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
}
