<?php
/**
 * Created by IntelliJ IDEA.
 * User: eliaharris
 * Date: 5/17/17
 * Time: 7:43 PM
 */

namespace App\FollowUpBoss\Api;

use App\FollowUpBoss\ActionPlanPerson;
use App\FollowUpBoss\Event;

use App\FollowUpBoss\FollowUpBoss;


class ActionPlansPeopleAPI extends FollowUpBoss
{

    /**
     * @param array $query
     * @return Event[]
     */

    public function get($query = [])
    {

        // Get cURL resource
        $ch = curl_init();

        // Set url
        curl_setopt($ch, CURLOPT_URL, 'https://api.followupboss.com/' . $this->version . '/actionPlansPeople?' . http_build_query($query));

        // Set method
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

        // Set options
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        // Set headers
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
                'Authorization: Basic ' . base64_encode(FollowUpBoss::$APIKEY . ":"),
                "Content-Type: application/x-www-form-urlencoded; charset=utf-8",
            ]
        );

        // Send the request & save response to $resp
        $resp = curl_exec($ch);

        // Close request to clear up some resources
        curl_close($ch);

        $results = json_decode($resp, true);

        $ActionPlansPeopleArray = array();

        //If the response is empty we need to return nothing
        if ($results == null || $results['actionPlansPeople'] == null)
            return array();

        foreach ($results['actionPlansPeople'] as $value) {

            array_push($ActionPlansPeopleArray, new ActionPlanPerson($value));
        }

        return $ActionPlansPeopleArray;

    }


}