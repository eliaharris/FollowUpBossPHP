<?php
/**
 * Created by IntelliJ IDEA.
 * User: eliaharris
 * Date: 5/17/17
 * Time: 7:45 PM
 */

namespace App\FollowUpBoss;


use App\FollowUpBoss\Builders\Model\FollowUpBossModel;

/**
 * Describes an event object
 * Class Event
 * @package App\FollowUpBoss
 */
class ActionPlanPerson extends FollowUpBossModel
{

    /**
     * Event constructor.
     * @param $data
     */
    function __construct($data)
    {

        $this->data = $data;

    }


    /**
     * Returns the id that the action plan is applied to
     * @return int
     */
    public function getPersonId()
    {

        return $this->data['personId'];
    }


    /**
     * Returns the action plan id
     * @return int
     */
    public function getActionPlanId()
    {

        return $this->data['actionPlanId'];
    }

    /**
     * Returns the status of the action plan
     * @return string
     */
    public function getStatus()
    {

        return $this->data['status'];
    }

}