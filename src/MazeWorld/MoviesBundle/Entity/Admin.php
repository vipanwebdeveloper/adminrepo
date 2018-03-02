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
 * @ORM\Entity(repositoryClass="MazeWorld\MoviesBundle\Entity\UserRepository")
 * @UniqueEntity(
 *     fields={"email", "username"},
 *     errorPath="email",
 *     message="The email address/username is already in use in our system."
 *     )
 */
class User implements AdvancedUserInterface, \Serializable
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
     */
    private $gender;

    /**
     * @var boolean
     */
    private $isActive;

    /**
     * @var \DateTime
     */
    private $creationDate;

    /**
     * @var \DateTime
     */
    private $modificationDate;

    /**
     * @var string
     */
    private $passwordResetCode;

    /**
     * @var string
     *
     * @ORM\Column(name="salt", type="string", length=255)
     */
    private $salt;

    /** @ORM\Column(name="roles", type="string", length=255) **/
    private $roles;

    /**
     * @var \DateTime
     */
    private $deletedAt;
    
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $adminSiteSettings;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $dealsCalendarEvents;

    /**
     * Set deletedAt
     *
     * @param \DateTime $deletedAt
     */
    public function setDeletedAt($deletedAt)
    {
        $this->deletedAt = $deletedAt;

        return $this;
    }

    /**
     * Get deletedAt
     *
     * @return \DateTime 
     */
    public function getDeletedAt()
    {
        return $this->deletedAt;
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
     * @var \DateTime
     */
    private $lastSeen;

    /**
     * @var \DateTime
     */
    private $deleteAt;

    /**
     * @var string
     */
    private $themeCssFilePath;

    /**
     * @var integer
     */
    private $timezoneCountryId;

    /**
     * @var integer
     */
    private $timeZoneId;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $accountadmin;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $usersite;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $contactActivity;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $tracking;

    
    /**
     * @var \TFT\DataBundle\Entity\TimeZoneName
     */
    private $timeZone;

    /**
     * @var \TFT\DataBundle\Entity\TimeZoneCountries
     */
    private $timeZoneCountry;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->adminSiteSettings = new \Doctrine\Common\Collections\ArrayCollection();
        $this->accountadmin = new \Doctrine\Common\Collections\ArrayCollection();
        $this->usersite = new \Doctrine\Common\Collections\ArrayCollection();
        $this->contactActivity = new \Doctrine\Common\Collections\ArrayCollection();
        $this->tracking = new \Doctrine\Common\Collections\ArrayCollection();
        $this->dealsCalendarEvents = new \Doctrine\Common\Collections\ArrayCollection();
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

    /**
     * Set lastSeen
     *
     * @param \DateTime $lastSeen
     * @return Admin
     */
    public function setLastSeen($lastSeen)
    {
        $this->lastSeen = $lastSeen;

        return $this;
    }

    /**
     * Get lastSeen
     *
     * @return \DateTime 
     */
    public function getLastSeen()
    {
        return $this->lastSeen;
    }

    /**
     * Set deleteAt
     *
     * @param \DateTime $deleteAt
     * @return Admin
     */
    public function setDeleteAt($deleteAt)
    {
        $this->deleteAt = $deleteAt;

        return $this;
    }

    /**
     * Get deleteAt
     *
     * @return \DateTime 
     */
    public function getDeleteAt()
    {
        return $this->deleteAt;
    }

    /**
     * Set themeCssFilePath
     *
     * @param string $themeCssFilePath
     * @return Admin
     */
    public function setThemeCssFilePath($themeCssFilePath)
    {
        $this->themeCssFilePath = $themeCssFilePath;

        return $this;
    }

    /**
     * Get themeCssFilePath
     *
     * @return string 
     */
    public function getThemeCssFilePath()
    {
        return $this->themeCssFilePath;
    }

    /**
     * Set timezoneCountryId
     *
     * @param integer $timezoneCountryId
     * @return Admin
     */
    public function setTimezoneCountryId($timezoneCountryId)
    {
        $this->timezoneCountryId = $timezoneCountryId;

        return $this;
    }

    /**
     * Get timezoneCountryId
     *
     * @return integer 
     */
    public function getTimezoneCountryId()
    {
        return $this->timezoneCountryId;
    }

    /**
     * Set timeZoneId
     *
     * @param integer $timeZoneId
     * @return Admin
     */
    public function setTimeZoneId($timeZoneId)
    {
        $this->timeZoneId = $timeZoneId;

        return $this;
    }

    /**
     * Get timeZoneId
     *
     * @return integer 
     */
    public function getTimeZoneId()
    {
        return $this->timeZoneId;
    }

    /**
     * Add adminSiteSettings
     *
     * @param \TFT\DataBundle\Entity\AdminSiteSetting $adminSiteSettings
     * @return Admin
     */
    public function addAdminSiteSetting(\TFT\DataBundle\Entity\AdminSiteSetting $adminSiteSettings)
    {
        $this->adminSiteSettings[] = $adminSiteSettings;

        return $this;
    }

    /**
     * Remove adminSiteSettings
     *
     * @param \TFT\DataBundle\Entity\AdminSiteSetting $adminSiteSettings
     */
    public function removeAdminSiteSetting(\TFT\DataBundle\Entity\AdminSiteSetting $adminSiteSettings)
    {
        $this->adminSiteSettings->removeElement($adminSiteSettings);
    }

    /**
     * Get adminSiteSettings
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAdminSiteSettings()
    {
        return $this->adminSiteSettings;
    }

    /**
     * Add accountadmin
     *
     * @param \TFT\DataBundle\Entity\AccountAdmin $accountadmin
     * @return Admin
     */
    public function addAccountadmin(\TFT\DataBundle\Entity\AccountAdmin $accountadmin)
    {
        $this->accountadmin[] = $accountadmin;

        return $this;
    }

    /**
     * Remove accountadmin
     *
     * @param \TFT\DataBundle\Entity\AccountAdmin $accountadmin
     */
    public function removeAccountadmin(\TFT\DataBundle\Entity\AccountAdmin $accountadmin)
    {
        $this->accountadmin->removeElement($accountadmin);
    }

    /**
     * Get accountadmin
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAccountadmin()
    {
        return $this->accountadmin;
    }

    /**
     * Add usersite
     *
     * @param \TFT\DataBundle\Entity\UserSite $usersite
     * @return Admin
     */
    public function addUsersite(\TFT\DataBundle\Entity\UserSite $usersite)
    {
        $this->usersite[] = $usersite;

        return $this;
    }

    /**
     * Remove usersite
     *
     * @param \TFT\DataBundle\Entity\UserSite $usersite
     */
    public function removeUsersite(\TFT\DataBundle\Entity\UserSite $usersite)
    {
        $this->usersite->removeElement($usersite);
    }

    /**
     * Get usersite
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUsersite()
    {
        return $this->usersite;
    }

    /**
     * Add contactActivity
     *
     * @param \TFT\DataBundle\Entity\ContactActivity $contactActivity
     * @return Admin
     */
    public function addContactActivity(\TFT\DataBundle\Entity\ContactActivity $contactActivity)
    {
        $this->contactActivity[] = $contactActivity;

        return $this;
    }

    /**
     * Remove contactActivity
     *
     * @param \TFT\DataBundle\Entity\ContactActivity $contactActivity
     */
    public function removeContactActivity(\TFT\DataBundle\Entity\ContactActivity $contactActivity)
    {
        $this->contactActivity->removeElement($contactActivity);
    }

    /**
     * Get contactActivity
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getContactActivity()
    {
        return $this->contactActivity;
    }

    /**
     * Add tracking
     *
     * @param \TFT\DataBundle\Entity\Tracking $tracking
     * @return Admin
     */
    public function addTracking(\TFT\DataBundle\Entity\Tracking $tracking)
    {
        $this->tracking[] = $tracking;

        return $this;
    }

    /**
     * Remove tracking
     *
     * @param \TFT\DataBundle\Entity\Tracking $tracking
     */
    public function removeTracking(\TFT\DataBundle\Entity\Tracking $tracking)
    {
        $this->tracking->removeElement($tracking);
    }

    /**
     * Get tracking
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTracking()
    {
        return $this->tracking;
    }

    /**
     * Set timeZone
     *
     * @param \TFT\DataBundle\Entity\TimeZoneName $timeZone
     * @return Admin
     */
    public function setTimeZone(\TFT\DataBundle\Entity\TimeZoneName $timeZone = null)
    {
        $this->timeZone = $timeZone;

        return $this;
    }

    /**
     * Get timeZone
     *
     * @return \TFT\DataBundle\Entity\TimeZoneName 
     */
    public function getTimeZone()
    {
        return $this->timeZone;
    }

    /**
     * Set timeZoneCountry
     *
     * @param \TFT\DataBundle\Entity\TimeZoneCountries $timeZoneCountry
     * @return Admin
     */
    public function setTimeZoneCountry(\TFT\DataBundle\Entity\TimeZoneCountries $timeZoneCountry = null)
    {
        $this->timeZoneCountry = $timeZoneCountry;

        return $this;
    }

    /**
     * Get timeZoneCountry
     *
     * @return \TFT\DataBundle\Entity\TimeZoneCountries 
     */
    public function getTimeZoneCountry()
    {
        return $this->timeZoneCountry;
    }
    /**
     * @var string
     */
    private $dashboardTimeSpan;


    /**
     * Set dashboardTimeSpan
     *
     * @param string $dashboardTimeSpan
     * @return Admin
     */
    public function setDashboardTimeSpan($dashboardTimeSpan)
    {
        $this->dashboardTimeSpan = $dashboardTimeSpan;

        return $this;
    }

    /**
     * Get dashboardTimeSpan
     *
     * @return string 
     */
    public function getDashboardTimeSpan()
    {
        return $this->dashboardTimeSpan;
    }

    public function getAccounts() {
        $account_names = [];
        foreach($this->getAccountadmin() as $account_admin) {
            $account_names[] = $account_admin->getAccount()->getAccountName();
        }
        return implode(", ", $account_names);
    }
    /**
     * @var boolean
     */
    private $hideIsp;


    /**
     * Set hideIsp
     *
     * @param boolean $hideIsp
     * @return Admin
     */
    public function setHideIsp($hideIsp)
    {
        $this->hideIsp = $hideIsp;

        return $this;
    }

    /**
     * Get hideIsp
     *
     * @return boolean 
     */
    public function getHideIsp()
    {
        return $this->hideIsp;
    }
    /**
     * @var string
     */
    private $facebookPic;

    /**
     * @var string
     */
    private $twitterPic;

    /**
     * @var string
     */
    private $googlePic;

    /**
     * @var string
     */
    private $linkedinPic;

    /**
     * @var string
     */
    private $gravatarPic;

    /**
     * @var string
     */
    private $proPic;


    /**
     * Set facebookPic
     *
     * @param string $facebookPic
     * @return Admin
     */
    public function setFacebookPic($facebookPic)
    {
        $this->facebookPic = $facebookPic;

        return $this;
    }

    /**
     * Get facebookPic
     *
     * @return string 
     */
    public function getFacebookPic()
    {
        return $this->facebookPic;
    }

    /**
     * Set twitterPic
     *
     * @param string $twitterPic
     * @return Admin
     */
    public function setTwitterPic($twitterPic)
    {
        $this->twitterPic = $twitterPic;

        return $this;
    }

    /**
     * Get twitterPic
     *
     * @return string 
     */
    public function getTwitterPic()
    {
        return $this->twitterPic;
    }

    /**
     * Set googlePic
     *
     * @param string $googlePic
     * @return Admin
     */
    public function setGooglePic($googlePic)
    {
        $this->googlePic = $googlePic;

        return $this;
    }

    /**
     * Get googlePic
     *
     * @return string 
     */
    public function getGooglePic()
    {
        return $this->googlePic;
    }

    /**
     * Set linkedinPic
     *
     * @param string $linkedinPic
     * @return Admin
     */
    public function setLinkedinPic($linkedinPic)
    {
        $this->linkedinPic = $linkedinPic;

        return $this;
    }

    /**
     * Get linkedinPic
     *
     * @return string 
     */
    public function getLinkedinPic()
    {
        return $this->linkedinPic;
    }

    /**
     * Set gravatarPic
     *
     * @param string $gravatarPic
     * @return Admin
     */
    public function setGravatarPic($gravatarPic)
    {
        $this->gravatarPic = $gravatarPic;

        return $this;
    }

    /**
     * Get gravatarPic
     *
     * @return string 
     */
    public function getGravatarPic()
    {
        return $this->gravatarPic;
    }

    /**
     * Set proPic
     *
     * @param string $proPic
     * @return Admin
     */
    public function setProPic($proPic)
    {
        $this->proPic = $proPic;

        return $this;
    }

    /**
     * Get proPic
     *
     * @return string 
     */
    public function getProPic()
    {
        return $this->proPic;
    }
    
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $trackingRealTimeAlert;


    /**
     * Add trackingRealTimeAlert
     *
     * @param \TFT\DataBundle\Entity\TrackingRealTimeAlert $trackingRealTimeAlert
     * @return Admin
     */
    public function addTrackingRealTimeAlert(\TFT\DataBundle\Entity\TrackingRealTimeAlert $trackingRealTimeAlert)
    {
        $this->trackingRealTimeAlert[] = $trackingRealTimeAlert;

        return $this;
    }

    /**
     * Remove trackingRealTimeAlert
     *
     * @param \TFT\DataBundle\Entity\TrackingRealTimeAlert $trackingRealTimeAlert
     */
    public function removeTrackingRealTimeAlert(\TFT\DataBundle\Entity\TrackingRealTimeAlert $trackingRealTimeAlert)
    {
        $this->trackingRealTimeAlert->removeElement($trackingRealTimeAlert);
    }

    /**
     * Get trackingRealTimeAlert
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTrackingRealTimeAlert()
    {
        return $this->trackingRealTimeAlert;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $trackinglist;


    /**
     * Add trackinglist
     *
     * @param \TFT\DataBundle\Entity\TrackingList $trackinglist
     * @return Admin
     */
    public function addTrackinglist(\TFT\DataBundle\Entity\TrackingList $trackinglist)
    {
        $this->trackinglist[] = $trackinglist;

        return $this;
    }

    /**
     * Remove trackinglist
     *
     * @param \TFT\DataBundle\Entity\TrackingList $trackinglist
     */
    public function removeTrackinglist(\TFT\DataBundle\Entity\TrackingList $trackinglist)
    {
        $this->trackinglist->removeElement($trackinglist);
    }

    /**
     * Get trackinglist
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTrackinglist()
    {
        return $this->trackinglist;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $mediaFile;


    /**
     * Add mediaFile
     *
     * @param \TFT\DataBundle\Entity\MediaFile $mediaFile
     * @return Admin
     */
    public function addMediaFile(\TFT\DataBundle\Entity\MediaFile $mediaFile)
    {
        $this->mediaFile[] = $mediaFile;

        return $this;
    }

    /**
     * Remove mediaFile
     *
     * @param \TFT\DataBundle\Entity\MediaFile $mediaFile
     */
    public function removeMediaFile(\TFT\DataBundle\Entity\MediaFile $mediaFile)
    {
        $this->mediaFile->removeElement($mediaFile);
    }

    /**
     * Get mediaFile
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMediaFile()
    {
        return $this->mediaFile;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $mailAccount;


    /**
     * Add mailAccount
     *
     * @param \TFT\DataBundle\Entity\MailAccount $mailAccount
     * @return Admin
     */
    public function addMailAccount(\TFT\DataBundle\Entity\MailAccount $mailAccount)
    {
        $this->mailAccount[] = $mailAccount;

        return $this;
    }

    /**
     * Remove mailAccount
     *
     * @param \TFT\DataBundle\Entity\MailAccount $mailAccount
     */
    public function removeMailAccount(\TFT\DataBundle\Entity\MailAccount $mailAccount)
    {
        $this->mailAccount->removeElement($mailAccount);
    }

    /**
     * Get mailAccount
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMailAccount()
    {
        return $this->mailAccount;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $lists;


    /**
     * Add lists
     *
     * @param \TFT\DataBundle\Entity\Lists $lists
     * @return Admin
     */
    public function addList(\TFT\DataBundle\Entity\Lists $lists)
    {
        $this->lists[] = $lists;

        return $this;
    }

    /**
     * Remove lists
     *
     * @param \TFT\DataBundle\Entity\Lists $lists
     */
    public function removeList(\TFT\DataBundle\Entity\Lists $lists)
    {
        $this->lists->removeElement($lists);
    }

    /**
     * Get lists
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLists()
    {
        return $this->lists;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $starredLists;


    /**
     * Add starredLists
     *
     * @param \TFT\DataBundle\Entity\Lists $starredLists
     * @return Admin
     */
    public function addStarredList(\TFT\DataBundle\Entity\Lists $starredLists)
    {
        $this->starredLists[] = $starredLists;

        return $this;
    }

    /**
     * Remove starredLists
     *
     * @param \TFT\DataBundle\Entity\Lists $starredLists
     */
    public function removeStarredList(\TFT\DataBundle\Entity\Lists $starredLists)
    {
        $this->starredLists->removeElement($starredLists);
    }

    /**
     * Get starredLists
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getStarredLists()
    {
        return $this->starredLists;
    }
    
    private $dashboardType;

    /**
     * Set dashboardType
     *
     * @param boolean $dashboardType
     * @return Admin
     */
    public function setdashboardType($dashboardType)
    {
        $this->dashboardType = $dashboardType;
	}

    /**
     * Get dashboardType
     *
     * @param boolean $dashboardType
     * @return Admin
     */
    public function getdashboardType()
    {
        return $this->dashboardType;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $mailTemplate;


    /**
     * Add mailTemplate
     *
     * @param \TFT\DataBundle\Entity\MailTemplate $mailTemplate
     * @return Admin
     */
    public function addMailTemplate(\TFT\DataBundle\Entity\MailTemplate $mailTemplate)
    {
        $this->mailTemplate[] = $mailTemplate;

        return $this;
    }

    /**
     * Remove mailTemplate
     *
     * @param \TFT\DataBundle\Entity\MailTemplate $mailTemplate
     */
    public function removeMailTemplate(\TFT\DataBundle\Entity\MailTemplate $mailTemplate)
    {
        $this->mailTemplate->removeElement($mailTemplate);
    }

    /**
     * Get mailTemplate
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMailTemplate()
    {
        return $this->mailTemplate;
    }
    /**
     * @var boolean
     */
    private $showReturn;


    /**
     * Set showReturn
     *
     * @param boolean $showReturn
     * @return Admin
     */
    public function setShowReturn($showReturn)
    {
        $this->showReturn = $showReturn;

        return $this;
    }

    /**
     * Get showReturn
     *
     * @return boolean 
     */
    public function getShowReturn()
    {
        return $this->showReturn;
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDealsCalendarEvents()
    {
        return $this->dealsCalendarEvents;
    }

    /**
     * @param DealsCalendarEvent $dealsCalendarEvent
     */
    public function setDealsCalendarEvents(DealsCalendarEvent $dealsCalendarEvent)
    {
        $this->dealsCalendarEvents = $dealsCalendarEvent;
    }


    /**
     * @var integer
     */
    private $dealAdminUserId;


    /**
     * Set dealAdminUserId
     *
     * @param integer $dealAdminUserId
     * @return Admin
     */
    public function setDealAdminUserId($dealAdminUserId)
    {
        $this->dealAdminUserId = $dealAdminUserId;

        return $this;
    }

    /**
     * Get dealAdminUserId
     *
     * @return integer
     */
    public function getDealAdminUserId()
    {
        return $this->dealAdminUserId;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $deals;


    /**
     * Add deals
     *
     * @param \TFT\DataBundle\Entity\Deals $deals
     * @return Admin
     */
    public function addDeal(\TFT\DataBundle\Entity\Deals $deals)
    {
        $this->deals[] = $deals;

        return $this;
    }

    /**
     * Remove deals
     *
     * @param \TFT\DataBundle\Entity\Deals $deals
     */
    public function removeDeal(\TFT\DataBundle\Entity\Deals $deals)
    {
        $this->deals->removeElement($deals);
    }

    /**
     * Get deals
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDeals()
    {
        return $this->deals;
    }

    /**
     * Add dealsCalendarEvents
     *
     * @param \TFT\DataBundle\Entity\DealsCalendarEvent $dealsCalendarEvents
     * @return Admin
     */
    public function addDealsCalendarEvent(\TFT\DataBundle\Entity\DealsCalendarEvent $dealsCalendarEvents)
    {
        $this->dealsCalendarEvents[] = $dealsCalendarEvents;

        return $this;
    }

    /**
     * Remove dealsCalendarEvents
     *
     * @param \TFT\DataBundle\Entity\DealsCalendarEvent $dealsCalendarEvents
     */
    public function removeDealsCalendarEvent(\TFT\DataBundle\Entity\DealsCalendarEvent $dealsCalendarEvents)
    {
        $this->dealsCalendarEvents->removeElement($dealsCalendarEvents);
    }
    /**
     * @var string
     */
    private $dashboardTimeSpanSales;


    /**
     * Set dashboardTimeSpanSales
     *
     * @param string $dashboardTimeSpanSales
     * @return Admin
     */
    public function setDashboardTimeSpanSales($dashboardTimeSpanSales)
    {
        $this->dashboardTimeSpanSales = $dashboardTimeSpanSales;

        return $this;
    }

    /**
     * Get dashboardTimeSpanSales
     *
     * @return string 
     */
    public function getDashboardTimeSpanSales()
    {
        return $this->dashboardTimeSpanSales;
    }
    /**
     * @var boolean
     */
    private $salesModule;


    /**
     * Set salesModule
     *
     * @param boolean $salesModule
     * @return Admin
     */
    public function setSalesModule($salesModule)
    {
        $this->salesModule = $salesModule;

        return $this;
    }

    /**
     * Get salesModule
     *
     * @return boolean 
     */
    public function getSalesModule()
    {
        return $this->salesModule;
    }
    /**
     * @var boolean
     */
    private $isAppUser;


    /**
     * Set isAppUser
     *
     * @param boolean $isAppUser
     * @return Admin
     */
    public function setIsAppUser($isAppUser)
    {
        $this->isAppUser = $isAppUser;

        return $this;
    }

    /**
     * Get isAppUser
     *
     * @return boolean 
     */
    public function getIsAppUser()
    {
        return $this->isAppUser;
    }
}
