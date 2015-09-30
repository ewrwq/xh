<?php

namespace Xiehe\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * answer
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Xiehe\WebBundle\Entity\answerRepository")
 */
class answer
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
     * @ORM\Column(name="text", type="string", length=500)
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
     * @ORM\ManyToOne(targetEntity="question",inversedBy="answers")
     * @ORM\JoinColumn(nullable=false)
     */
    private $question;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="user",inversedBy="answers")
     * @ORM\JoinColumn(nullable=false)
     */
    private $creater;

    /**
     * @var integer
     * @ORM\OneToMany(targetEntity="comment",mappedBy="answer")
     */
    private $comments;

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
     * Set text
     *
     * @param string $text
     * @return answer
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
     * @return answer
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
     * @return answer
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
     * Set question
     *
     * @param \Xiehe\WebBundle\Entity\question $question
     * @return answer
     */
    public function setQuestion(\Xiehe\WebBundle\Entity\question $question = null)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get question
     *
     * @return \Xiehe\WebBundle\Entity\question 
     */
    public function getQuestion()
    {
        return $this->question;
    }



    /**
     * Set creater
     *
     * @param \Xiehe\WebBundle\Entity\user $creater
     * @return answer
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
     * Constructor
     */
    public function __construct()
    {
        $this->comments = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add comments
     *
     * @param \Xiehe\WebBundle\Entity\comment $comments
     * @return answer
     */
    public function addComment(\Xiehe\WebBundle\Entity\comment $comments)
    {
        $this->comments[] = $comments;

        return $this;
    }

    /**
     * Remove comments
     *
     * @param \Xiehe\WebBundle\Entity\comment $comments
     */
    public function removeComment(\Xiehe\WebBundle\Entity\comment $comments)
    {
        $this->comments->removeElement($comments);
    }

    /**
     * Get comments
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getComments()
    {
        return $this->comments;
    }
}
