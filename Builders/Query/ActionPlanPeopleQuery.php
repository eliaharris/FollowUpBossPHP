<?php

/**
 * Created by IntelliJ IDEA.
 * User: eliaharris
 * Date: 5/17/17
 * Time: 7:55 PM
 */

namespace App\FollowUpBoss\Builders\Query;

use App\FollowUpBoss\Api\ActionPlansPeopleAPI;


/**
 * Class ActionPlanPeople
 * @package App\FollowUpBoss\Builders\Query
 */
class ActionPlanPeopleQuery extends Query
{

    /**
     * Make sure we include the sortable function
     */


    /**
     * This constructor will define which fields NEEDs to be define
     * @param array $queryData
     */
    public function __construct($queryData = [])
    {

        $this->apiDriver = new ActionPlansPeopleAPI();

        $this->queryData = $queryData;

    }


    /**
     * Set's the person ID
     * @param $personId
     * @return $this
     */
    public function wherePersonId($personId)
    {

        $this->queryData['personId'] = $personId;

        return $this;
    }

    /**
     * Set's the action plan id
     * @param $actionPlanId
     * @return $this
     */
    public function whereActionPlanId($actionPlanId)
    {

        $this->queryData['actionPlanId'] = $actionPlanId;

        return $this;
    }

}