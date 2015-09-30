<?php

namespace Xiehe\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use FOS\UserBundle\Model\User as BaseUser;
/**
 * user
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Xiehe\WebBundle\Entity\userRepository")
 */
class user extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;


    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=5, columnDefinition="CHAR(5) null")
     */
    protected $name;

    /**
     * @var string
     *
     * @ORM\Column(name="nickname", type="string", length=10, columnDefinition="CHAR(10) null")
     */
    protected $nickname;

    /**
     * @ORM\OneToMany(targetEntity="question",mappedBy="creater")
     */
    private $questions;

    /**
     * @ORM\OneToMany(targetEntity="answer",mappedBy="creater")
     */
    private $answers;

    /**
     * @var integer
     *
     * @ORM\OneToOne(targetEntity="hospital")
     */
    private $hospital;

    /**
     * @ORM\ManyToMany(targetEntity="group",inversedBy="users")
     * @ORM\JoinTable(name="users_groups")
     */
    protected $groups;

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
     * Set password
     *
     * @param string $password
     * @return user
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
     * @return user
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
     * Set name
     *
     * @param string $name
     * @return user
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set nickname
     *
     * @param string $nickname
     * @return user
     */
    public function setNickname($nickname)
    {
        $this->nickname = $nickname;

        return $this;
    }

    /**
     * Get nickname
     *
     * @return string 
     */
    public function getNickname()
    {
        return $this->nickname;
    }


    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();

        $this->questions = new \Doctrine\Common\Collections\ArrayCollection();
        $this->answers = new \Doctrine\Common\Collections\ArrayCollection();
        $this->groups = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add questions
     *
     * @param \Xiehe\WebBundle\Entity\question $questions
     * @return user
     */
    public function addQuestion(\Xiehe\WebBundle\Entity\question $questions)
    {
        $this->questions[] = $questions;

        return $this;
    }

    /**
     * Remove questions
     *
     * @param \Xiehe\WebBundle\Entity\question $questions
     */
    public function removeQuestion(\Xiehe\WebBundle\Entity\question $questions)
    {
        $this->questions->removeElement($questions);
    }

    /**
     * Get questions
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getQuestions()
    {
        return $this->questions;
    }

    /**
     * Add answers
     *
     * @param \Xiehe\WebBundle\Entity\answer $answers
     * @return user
     */
    public function addAnswer(\Xiehe\WebBundle\Entity\answer $answers)
    {
        $this->answers[] = $answers;

        return $this;
    }

    /**
     * Remove answers
     *
     * @param \Xiehe\WebBundle\Entity\answer $answers
     */
    public function removeAnswer(\Xiehe\WebBundle\Entity\answer $answers)
    {
        $this->answers->removeElement($answers);
    }

    /**
     * Get answers
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAnswers()
    {
        return $this->answers;
    }

    /**
     * Set hospital
     *
     * @param \Xiehe\WebBundle\Entity\hospital $hospital
     * @return user
     */
    public function setHospital(\Xiehe\WebBundle\Entity\hospital $hospital = null)
    {
        $this->hospital = $hospital;

        return $this;
    }

    /**
     * Get hospital
     *
     * @return \Xiehe\WebBundle\Entity\hospital 
     */
    public function getHospital()
    {
        return $this->hospital;
    }
}
