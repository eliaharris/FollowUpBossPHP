<?php

/**
 * Created by IntelliJ IDEA.
 * User: eliaharris
 * Date: 5/14/17
 * Time: 6:49 PM
 */

namespace App\FollowUpBoss;


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


}