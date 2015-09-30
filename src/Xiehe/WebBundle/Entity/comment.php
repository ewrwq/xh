<?php

namespace Xiehe\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * comment
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Xiehe\WebBundle\Entity\commentRepository")
 */
class comment
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
     * @ORM\ManyToOne(targetEntity="answer",inversedBy="comments")
     * @ORM\JoinColumn(nullable=false)
     */
    private $answer;

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
     * @return comment
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
     * @return comment
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
     * Set answer
     *
     * @param \Xiehe\WebBundle\Entity\answer $answer
     * @return comment
     */
    public function setAnswer(\Xiehe\WebBundle\Entity\answer $answer = null)
    {
        $this->answer = $answer;

        return $this;
    }

    /**
     * Get answer
     *
     * @return \Xiehe\WebBundle\Entity\answer 
     */
    public function getAnswer()
    {
        return $this->answer;
    }
}
