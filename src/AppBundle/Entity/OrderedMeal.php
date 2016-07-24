<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrderedMeal
 *
 * @ORM\Table(name="ordered_meal")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\OrderedMealRepository")
 */
class OrderedMeal
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="meal_id", type="integer")
     */
    private $mealId;

    /**
     * @var int
     *
     * @ORM\Column(name="order_id", type="integer")
     */
    private $orderId;

    /**
     * @var int
     *
     * @ORM\Column(name="owner_id", type="integer")
     */
    private $ownerId;

    /**
     * @var int
     *
     * @ORM\Column(name="price", type="integer")
     */
    private $price;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set mealId
     *
     * @param integer $mealId
     *
     * @return OrderedMeal
     */
    public function setMealId($mealId)
    {
        $this->mealId = $mealId;

        return $this;
    }

    /**
     * Get mealId
     *
     * @return int
     */
    public function getMealId()
    {
        return $this->mealId;
    }

    /**
     * Set orderId
     *
     * @param integer $orderId
     *
     * @return OrderedMeal
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * Get orderId
     *
     * @return int
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * Set ownerId
     *
     * @param integer $ownerId
     *
     * @return OrderedMeal
     */
    public function setOwnerId($ownerId)
    {
        $this->ownerId = $ownerId;

        return $this;
    }

    /**
     * Get ownerId
     *
     * @return int
     */
    public function getOwnerId()
    {
        return $this->ownerId;
    }

    /**
     * Set price
     *
     * @param integer $price
     *
     * @return OrderedMeal
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return int
     */
    public function getPrice()
    {
        return $this->price;
    }
}

