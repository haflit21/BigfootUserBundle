<?php

namespace Bigfoot\Bundle\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RoleMenu
 *
 * @ORM\Table(name="bigfoot_role_menu")
 * @ORM\Entity
 */
class RoleMenu
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
     * @var array
     *
     * @ORM\Column(name="slugs", type="array")
     */
    private $slugs;

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=255)
     */
    private $role;

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
     * Set slugs
     *
     * @param array $slugs
     * @return $this
     */
    public function setSlugs($slugs)
    {
        $this->slugs = $slugs;

        return $this;
    }

    /**
     * Get slugs
     *
     * @return array
     */
    public function getSlugs()
    {
        return $this->slugs;
    }

    /**
     * Set role
     *
     * @param string $role
     * @return $this
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }
}
