<?php

/**
 * Created by IntelliJ IDEA.
 * User: eliaharris
 * Date: 5/14/17
 * Time: 7:36 PM
 */

namespace App\FollowUpBoss;

use App\FollowUpBoss\Api\NoteAPI;
use App\FollowUpBoss\Builders\Model\FollowUpBossModel;


/**
 * Represents a Note within the Follow Up Boss
 * Class Note
 * @package App\FollowUpBoss
 */
class Note extends FollowUpBossModel
{


    /**
     * The base API driver used to make RESTFUL calls
     * @var NoteAPI
     */

    private $apiDriver;

    function __construct($data)
    {

        $this->apiDriver = new NoteAPI();

        $this->data = $data;

    }



    /**
     * Get the subject associated with the note
     * @return string
     */
    public function getSubject()
    {
        return $this->data['subject'];
    }


    /**
     * Get the body associated with the note
     * @return string
     */
    public function getBody()
    {
        return $this->data['body'];
    }

    /**
     * Get the data associated with the note
     * @return array
     */
    public function getData()
    {

        return $this->data;
    }

    /**
     * Update the note with the specified data
     * @param array $data
     * @return Note
     */
    public function update($data = [])
    {

        //Any specific code that needs to be called can be put here
        //Such as validation, etc

        return $this->apiDriver->update($this->getId(), $data);

    }


    /**
     * Delete the note
     */
    public function delete()
    {

        ///Any specific code that needs to be called can be put here

        $this->apiDriver->delete($this->getId());

    }


}