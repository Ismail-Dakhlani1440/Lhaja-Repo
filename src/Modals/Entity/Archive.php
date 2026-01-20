<?php
class Archive
{
    private  $id;
    private  $userId;
    private  $posteId;
    private  $dateArchive;

    public function __construct(
         $userId,
         $posteId,
         $dateArchive = "",
         $id = 0
    ) {
        $this->id = $id;
        $this->userId = $userId;
        $this->posteId = $posteId;
        $this->dateArchive = $dateArchive;
    }
}
