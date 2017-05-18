<?php
/**
 * Created by IntelliJ IDEA.
 * User: eliaharris
 * Date: 5/15/17
 * Time: 7:02 PM
 */

namespace App\FollowUpBoss\Builders\Query;


use App\FollowUpBoss\FollowUpBoss;

abstract class Query
{

    /**
     * @var array
     */
    protected $queryData = [];

    /**
     * @var
     */

    protected $apiDriver;

    /**
     * Get the content of the query
     * @return mixed
     */
    public function get()
    {

        $this->beforeQuery();

        //Call the people API with the FollowUpBoss API
        $response = $this->apiDriver->get($this->queryData);

        //Reset the query data
        $this->queryData = [];

        return $response;
    }

    /**
     * Create a search query
     * @param array $query
     * @return $this
     */
    public function where($query = [])
    {

        $this->queryData = array_replace($query, $this->queryData);

        return $this;

    }


    /**
     * Function that will do numerous things before a query is actually called
     */
    private function beforeQuery()
    {

        if (FollowUpBoss::$APIKEY == "") {
            echo "Please supply api key";
            exit;
        }
    }
}