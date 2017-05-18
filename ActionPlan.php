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
class ActionPlan extends FollowUpBossModel
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
     * Returns the name of the action plan
     * @return string
     */
    public function getName()
    {

        return $this->data['name'];
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