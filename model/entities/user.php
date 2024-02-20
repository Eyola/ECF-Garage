<?php

class Users
{
    private int $usersId;
    private string $usersRole;
    private string $usersName;
    private string $usersFirstName;
    private string $usersMail;
    private string $usersPassword;

    /**
     * Get the value of usersId
     */
    public function getUsersId()
    {
        return $this->usersId;
    }

    /**
     * Set the value of usersId
     *
     * @return  self
     */
    public function setUsersId($usersId)
    {
        $this->usersId = $usersId;

        return $this;
    }

    /**
     * Get the value of usersRole
     */
    public function getUsersRole()
    {
        return $this->usersRole;
    }

    /**
     * Set the value of usersRole
     *
     * @return  self
     */
    public function setUsersRole($usersRole)
    {
        $this->usersRole = $usersRole;

        return $this;
    }

    /**
     * Get the value of usersName
     */
    public function getUsersName()
    {
        return $this->usersName;
    }

    /**
     * Set the value of usersName
     *
     * @return  self
     */
    public function setUsersName($usersName)
    {
        $this->usersName = $usersName;

        return $this;
    }

    /**
     * Get the value of usersFirstName
     */
    public function getUsersFirstName()
    {
        return $this->usersFirstName;
    }

    /**
     * Set the value of usersFirstName
     *
     * @return  self
     */
    public function setUsersFirstName($usersFirstName)
    {
        $this->usersFirstName = $usersFirstName;

        return $this;
    }

    /**
     * Get the value of usersMail
     */
    public function getUsersMail()
    {
        return $this->usersMail;
    }

    /**
     * Set the value of usersMail
     *
     * @return  self
     */
    public function setUsersMail($usersMail)
    {
        $this->usersMail = $usersMail;

        return $this;
    }

    /**
     * Get the value of usersPassword
     */
    public function getUsersPassword()
    {
        return $this->usersPassword;
    }

    /**
     * Set the value of usersPassword
     *
     * @return  self
     */
    public function setUsersPassword($usersPassword)
    {
        $this->usersPassword = $usersPassword;

        return $this;
    }
}
