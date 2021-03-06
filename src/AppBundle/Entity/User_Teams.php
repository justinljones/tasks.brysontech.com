<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="user_teams")
 */
class User_Teams {
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     */
    private $userId;
    
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     */
    private $teamId;

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return User_Teams
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set teamId
     *
     * @param integer $teamId
     *
     * @return User_Teams
     */
    public function setTeamId($teamId)
    {
        $this->teamId = $teamId;

        return $this;
    }

    /**
     * Get teamId
     *
     * @return integer
     */
    public function getTeamId()
    {
        return $this->teamId;
    }
}
