<?php
/**
 * Created by IntelliJ IDEA.
 * User: eliaharris
 * Date: 5/17/17
 * Time: 7:37 PM
 */

namespace App\FollowUpBoss\Builders\Model;


class FollowUpBossModel
{

    /**
     * @var array
     */

    protected $data = [];

    /**
     * Return the data array associated with this user
     * @return array
     */
    public function getData()
    {

        return $this->data;
    }

    /**
     * Return the id of the model
     * @return array
     */
    public function getId()
    {

        return $this->data;
    }


    /**
     * Returns when the action plan was created
     * @return string
     */
    public function getCreated()
    {

        return $this->data['created'];
    }


    /**
     * Returns when the action plan was updated
     * @return string
     */
    public function getUpdated()
    {

        return $this->data['updated'];
    }

}