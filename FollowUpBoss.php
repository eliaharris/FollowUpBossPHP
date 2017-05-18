<?php

/**
 * Created by IntelliJ IDEA.
 * User: eliaharris
 * Date: 5/14/17
 * Time: 6:49 PM
 */

namespace App\FollowUpBoss;


/**
 * Helper class for access to all the Follow Up Boss query methods for models
 * Class FollowUpBoss
 * @package App\FollowUpBoss
 */
class FollowUpBoss
{

    public static $APIKEY = "";
    /**
     * @var string
     */
    protected $version = "v1";

    /**
     * @return People
     */
    static function People()
    {

        return new People();

    }

    /**
     * @return Notes
     */
    static function Notes()
    {

        return new Notes();

    }


    /**
     * @return ActionPlans
     */
    static function ActionPlans()
    {

        return new ActionPlans();

    }

    /**
     * @return ActionPlansPerson
     */
    static function ActionPlansPeople()
    {

        return new ActionPlansPerson();

    }


}