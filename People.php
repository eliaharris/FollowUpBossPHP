<?php
/**
 * Created by IntelliJ IDEA.
 * User: eliaharris
 * Date: 5/14/17
 * Time: 6:48 PM
 */

namespace App\FollowUpBoss;


use App\FollowUpBoss\Builders\Query\PersonQuery;

class People
{

    /**
     * Get a query that will start the process of querying
     * @return PersonQuery
     */
    public function query()
    {

        return (new PersonQuery());

    }
    //Override functions can be placed here
}