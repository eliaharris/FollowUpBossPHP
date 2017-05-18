<?php

/**
 * Created by IntelliJ IDEA.
 * User: eliaharris
 * Date: 5/17/17
 * Time: 7:55 PM
 */

namespace App\FollowUpBoss\Builders\Query;

use App\FollowUpBoss\Api\ActionPlansAPI;
use App\FollowUpBoss\Builders\Quer\Types\Sortable;


/**
 * Class ActionPlanQuery
 * @package App\FollowUpBoss\Builders\Query
 */
class ActionPlanQuery extends Query
{

    /**
     * Make sure we include the sortable function
     */

    /**
     * Set's the
     * @param $sort
     * @return $this
     */

    public function whereSort($sort)
    {

        $this->queryData['sort'] = $sort;

        return $this;

    }

    /**
     * This constructor will define which fields NEEDs to be define
     * @param array $queryData
     */
    public function __construct($queryData = [])
    {

        $this->apiDriver = new ActionPlansAPI();

        $this->queryData = $queryData;

    }

    /**
     * Sets the status query for the action plan
     * @param array $status String[]
     * @return $this
     */
    public function whereStatus($status = [])
    {

        $this->queryData['status'] = $status;

        return $this;
    }

}