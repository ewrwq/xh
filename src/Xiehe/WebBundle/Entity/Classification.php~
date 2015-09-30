<?php

namespace Xiehe\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Classification
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Xiehe\WebBundle\Entity\ClassificationRepository")
 */
class Classification
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
     * @ORM\Column(name="name_cn", type="string", length=10)
     */
    private $nameCn;

    /**
     * @var string
     *
     * @ORM\Column(name="name_en", type="string", length=20)
     */
    private $nameEn;

    /**
     * @var integer
     *
     * @ORM\Column(name="father", type="smallint")
     */
    private $father;

    /**
     * @var integer
     * @ORM\ManyToMany(targetEntity="question",mappedBy="classifications")
     */
    private $questions;

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
     * Set nameCn
     *
     * @param string $nameCn
     * @return Classification
     */
    public function setNameCn($nameCn)
    {
        $this->nameCn = $nameCn;

        return $this;
    }

    /**
     * Get nameCn
     *
     * @return string 
     */
    public function getNameCn()
    {
        return $this->nameCn;
    }

    /**
     * Set nameEn
     *
     * @param string $nameEn
     * @return Classification
     */
    public function setNameEn($nameEn)
    {
        $this->nameEn = $nameEn;

        return $this;
    }

    /**
     * Get nameEn
     *
     * @return string 
     */
    public function getNameEn()
    {
        return $this->nameEn;
    }

    /**
     * Set father
     *
     * @param integer $father
     * @return Classification
     */
    public function setFather($father)
    {
        $this->father = $father;

        return $this;
    }

    /**
     * Get father
     *
     * @return integer 
     */
    public function getFather()
    {
        return $this->father;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->questions = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add questions
     *
     * @param \Xiehe\WebBundle\Entity\question $questions
     * @return Classification
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
}
