<?php
/**
 * Created by IntelliJ IDEA.
 * User: eliaharris
 * Date: 5/14/17
 * Time: 7:33 PM
 */

namespace App\FollowUpBoss;

use App\FollowUpBoss\Builders\Query\NoteQuery;

class Notes
{


    /**
     * Get a query that will start the process of querying
     * @return NoteQuery
     */
    public static function query()
    {

        return (new NoteQuery());

    }

    /**
     * @param array $data
     * @return mixed
     */
    public static function create($data = [])
    {

        return (new NoteQuery())->create($data);

    }

}