<?php

class Commentary
{
    private int $commentaryId;
    private string $commentaryName;
    private string $commentaryFirstName;
    private string $commentaryStatut;
    private string $commentaryMail;
    private string $commentaryMessage;

    private function __construct(string $commentaryName, string $commentaryFirstName, string $commentaryStatut, string $commentaryMail, string $commentaryMessage)
    {
        $this->setCommentaryName($commentaryName);
        $this->setCommentaryFirstName($commentaryFirstName);
        $this->setCommentaryStatut($commentaryStatut);
        $this->setCommentaryMail($commentaryMail);
        $this->setCommentaryMessage($commentaryMessage);
    }




    /**
     * Get the value of commentaryName
     */
    public function getCommentaryName()
    {
        return $this->commentaryName;
    }

    /**
     * Set the value of commentaryName
     *
     * @return  self
     */
    public function setCommentaryName($commentaryName)
    {
        $this->commentaryName = $commentaryName;

        return $this;
    }

    /**
     * Get the value of commentaryFirstName
     */
    public function getCommentaryFirstName()
    {
        return $this->commentaryFirstName;
    }

    /**
     * Set the value of commentaryFirstName
     *
     * @return  self
     */
    public function setCommentaryFirstName($commentaryFirstName)
    {
        $this->commentaryFirstName = $commentaryFirstName;

        return $this;
    }

    /**
     * Get the value of commentaryStatut
     */
    public function getCommentaryStatut()
    {
        return $this->commentaryStatut;
    }

    /**
     * Set the value of commentaryStatut
     *
     * @return  self
     */
    public function setCommentaryStatut($commentaryStatut)
    {
        $this->commentaryStatut = $commentaryStatut;

        return $this;
    }

    /**
     * Get the value of commentaryMail
     */
    public function getCommentaryMail()
    {
        return $this->commentaryMail;
    }

    /**
     * Set the value of commentaryMail
     *
     * @return  self
     */
    public function setCommentaryMail($commentaryMail)
    {
        $this->commentaryMail = $commentaryMail;

        return $this;
    }

    /**
     * Get the value of commentaryMessage
     */
    public function getCommentaryMessage()
    {
        return $this->commentaryMessage;
    }

    /**
     * Set the value of commentaryMessage
     *
     * @return  self
     */
    public function setCommentaryMessage($commentaryMessage)
    {
        $this->commentaryMessage = $commentaryMessage;

        return $this;
    }
}
