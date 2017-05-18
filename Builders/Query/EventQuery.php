<?php

/**
 * Created by IntelliJ IDEA.
 * User: eliaharris
 * Date: 5/17/17
 * Time: 7:55 PM
 */

namespace App\FollowUpBoss\Builders\Query;

use App\FollowUpBoss\EventsAPI;

/**
 * Allows a user to query for a specific event in their system
 * Class EventQuery
 * @package App\FollowUpBoss\Builders\Query
 */
class EventQuery extends Query
{

    /**
     * This constructor will define which fields NEEDs to be definee
     * @param array $queryData
     */
    public function __construct($queryData = [])
    {

        $this->apiDriver = new EventsAPI();

        $this->queryData = $queryData;
    }

}