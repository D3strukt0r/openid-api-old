<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="user_subscription_type")
 */
class SubscriptionType
{
    /**
     * @var int
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @var string
     * @ORM\Column(type="string", unique=true, length=191)
     */
    protected $title;

    /**
     * @var int
     * @ORM\Column(type="decimal")
     */
    protected $price;

    /**
     * @var array
     * @ORM\Column(type="array")
     */
    protected $permissions;

    /**
     * @return int The ID
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string The title
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title The title
     *
     * @return $this
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return int The price
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    /**
     * @param int $price The price
     *
     * @return $this
     */
    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @return array The permissions
     */
    public function getPermissions(): array
    {
        return $this->permissions;
    }

    /**
     * @param array $permissions The permissions
     *
     * @return $this
     */
    public function setPermissions(array $permissions): self
    {
        $this->permissions = $permissions;

        return $this;
    }

    /**
     * @return array An array of all the attributes in the object
     */
    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'price' => $this->price,
            'permissions' => $this->permissions,
        ];
    }
}
