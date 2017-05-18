<?php

namespace App\FollowUpBoss;

use App\FollowUpBoss\Builders\Model\FollowUpBossModel;
use App\FollowUpBoss\Builders\Query\EventQuery;
use App\FollowUpBoss\Builders\Query\NoteQuery;

/**
 * Created by IntelliJ IDEA.
 * User: eliaharris
 * Date: 5/14/17
 * Time: 6:48 PM
 */
class Person extends FollowUpBossModel
{
    /**
     * @return string
     */
    function __toString()
    {

        return http_build_query($this->data);
    }


    /**
     * @var PersonAPI
     */
    private $apiDriver;

    /**
     * @var NotesAPI
     */
    private $noteApiDriver;

    /**
     * Person constructor.
     * @param $data
     */
    function __construct($data)
    {

        $this->apiDriver = new PersonAPI();

        $this->noteApiDriver = new NotesAPI();

        $this->data = $data;

    }

    /**
     * Update the person
     * @param $tag
     */
    public function addTag($tag)
    {

        array_push($this->data['tags'], $tag);

        $this->update(['tags' => $this->data['tags']]);
    }

    /**
     * Removes a tag
     * @param $tag
     */
    public function removeTag($tag)
    {

        if (($key = array_search($tag, $this->data['tags'])) !== false) {
            unset($this->data['tags'][$key]);
        }

        $this->update(['tags' => $this->data['tags']]);


    }

    /**
     * Removes all the tags from the person
     */
    public function removeAllTags()
    {

        $this->data['tags'] = [];

        $this->update(['tags' => $this->data['tags']]);

    }

    /**
     * Return the data array associated with this user
     * @return array
     */
    public function getData()
    {

        return $this->data;
    }

    /** Return the ID of the user
     * @return string
     */
    public function getId()
    {
        return $this->data['id'];
    }

    /**
     * Return the email of the user
     * @return string
     */
    public function getEmail()
    {
        return $this->data['id'];
    }


    /**
     * Return the first name of the user
     * @return string
     */
    public function getFirstName()
    {
        return $this->data['firstName'];
    }

    /**
     * Return the last name of the user
     * @return string
     */
    public function getLastName()
    {
        return $this->data['lastName'];
    }


    /**
     * Return the name of the user
     * @return string
     */
    public function getName()
    {
        return $this->data['name'];
    }

    /**
     * Return the current stage the user is on
     * @return string
     */
    public function getStage()
    {
        return $this->data['stage'];
    }


    /**
     * Return the price associated with this user
     * @return int
     */
    public function getPrice()
    {
        return (int)$this->data['price'];
    }


    /**
     * Update the user with the specified data
     * @param array $data
     * @return Person
     */
    public function update($data = [])
    {

        //Any specific code that needs to be called can be put here
        //Such as validation, etc

        return $this->apiDriver->update($this->getId(), $data);

    }


    /**
     * Return all the notes associated with the user
     * @return NoteQuery
     */

    public function Notes()
    {

        return (new NoteQuery(['personId' => $this->getId()]));

    }


    /**
     * Return all the events associated with the user
     */
    public function Events()
    {

        return (new EventQuery(['personId' => $this->getId()]));


    }

    /**
     * This is a non-reversible
     */
    public function delete()
    {

        ///Any specific code that needs to be called can be put here

        $this->apiDriver->delete($this->getId());

    }


}