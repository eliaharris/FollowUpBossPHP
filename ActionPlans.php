<?php
/**
 * Created by IntelliJ IDEA.
 * User: eliaharris
 * Date: 5/14/17
 * Time: 7:33 PM
 */

namespace App\FollowUpBoss;

use App\FollowUpBoss\Builders\Query\ActionPlanQuery;

/**
 * Defines a generic helper class for all things Action Plans
 * Class ActionPlans
 * @package App\FollowUpBoss
 */
class ActionPlans
{


    /**
     * Get a query that will start the process of querying
     * @return ActionPlanQuery
     */
    public function query()
    {

        return (new ActionPlanQuery());

    }

}