<?php

namespace Xiehe\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * question
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Xiehe\WebBundle\Entity\questionRepository")
 */
class question
{
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
     * @ORM\Column(name="title", type="string", length=50)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="text", type="string", length=100)
     */
    private $text;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="create_time", type="datetime")
     */
    private $createTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="original_edition_id", type="integer")
     */
    private $originalEditionId;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="user",inversedBy="questions")
     * @ORM\JoinColumn(nullable=false)
     */
    private $creater;

    /**
     * @var integer
     *
     * @ORM\OneToMany(targetEntity="answer",mappedBy="question")
     */
    private $answers;

    /**
     * @var integer
     * @ORM\ManyToMany(targetEntity="Classification",inversedBy="questions")
     * @ORM\JoinTable(name="question_classification")
     */
    private $classifications;

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
     * Set title
     *
     * @param string $title
     * @return question
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set text
     *
     * @param string $text
     * @return question
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string 
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set createTime
     *
     * @param \DateTime $createTime
     * @return question
     */
    public function setCreateTime($createTime)
    {
        $this->createTime = $createTime;

        return $this;
    }

    /**
     * Get createTime
     *
     * @return \DateTime 
     */
    public function getCreateTime()
    {
        return $this->createTime;
    }

    /**
     * Set originalEditionId
     *
     * @param integer $originalEditionId
     * @return question
     */
    public function setOriginalEditionId($originalEditionId)
    {
        $this->originalEditionId = $originalEditionId;

        return $this;
    }

    /**
     * Get originalEditionId
     *
     * @return integer 
     */
    public function getOriginalEditionId()
    {
        return $this->originalEditionId;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->answers = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set creater
     *
     * @param \Xiehe\WebBundle\Entity\user $creater
     * @return question
     */
    public function setCreater(\Xiehe\WebBundle\Entity\user $creater = null)
    {
        $this->creater = $creater;

        return $this;
    }

    /**
     * Get creater
     *
     * @return \Xiehe\WebBundle\Entity\user 
     */
    public function getCreater()
    {
        return $this->creater;
    }

    /**
     * Add answers
     *
     * @param \Xiehe\WebBundle\Entity\answer $answers
     * @return question
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
     * Add classifications
     *
     * @param \Xiehe\WebBundle\Entity\Classification $classifications
     * @return question
     */
    public function addClassification(\Xiehe\WebBundle\Entity\Classification $classifications)
    {
        $this->classifications[] = $classifications;

        return $this;
    }

    /**
     * Remove classifications
     *
     * @param \Xiehe\WebBundle\Entity\Classification $classifications
     */
    public function removeClassification(\Xiehe\WebBundle\Entity\Classification $classifications)
    {
        $this->classifications->removeElement($classifications);
    }

    /**
     * Get classifications
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getClassifications()
    {
        return $this->classifications;
    }
}
