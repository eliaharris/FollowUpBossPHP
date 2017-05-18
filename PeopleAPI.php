<?php
/**
 * Created by IntelliJ IDEA.
 * User: eliaharris
 * Date: 5/14/17
 * Time: 6:49 PM
 */

namespace App\FollowUpBoss;


class PeopleAPI extends FollowUpBoss
{

    /**
     * @param array $query
     * @return Person[]
     */
    public function get($query = [])
    {

        // Get cURL resource
        $ch = curl_init();

        // Set url
        curl_setopt($ch, CURLOPT_URL, 'https://api.followupboss.com/' . $this->version . '/people?' . http_build_query($query));

        // Set method
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

        // Set options
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        // Set headers
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
                'Authorization: Basic '. base64_encode(FollowUpBoss::$APIKEY . ":"),
                "Content-Type: application/x-www-form-urlencoded; charset=utf-8",
            ]
        );

        // Send the request & save response to $resp
        $resp = curl_exec($ch);

        // Close request to clear up some resources
        curl_close($ch);

        $results = json_decode($resp, true);

        $PeopleArray = array();

        //If the response is empty we need to return nothing
        if ($results == null || $results['people'] == null)
            return array();

        foreach ($results['people'] as $value) {

            array_push($PeopleArray, new Person($value));
        }

        return $PeopleArray;

    }

    /**
     * @param array $data
     * @return Person
     */
    public function create($data = [])
    {

        // Get cURL resource
        $ch = curl_init();

        // Set url
        curl_setopt($ch, CURLOPT_URL, 'https://api.followupboss.com/' . $this->version . '/events');

        // Set method
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');

        // Set options
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        // Set headers
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
                'Authorization: Basic '. base64_encode(FollowUpBoss::$APIKEY . ":"),
                "Content-Type: application/json; charset=utf-8",
            ]
        );
        // Create body
        $json_array = $data;

        $body = json_encode($json_array);

        // Set body
        curl_setopt($ch, CURLOPT_POST, 1);

        curl_setopt($ch, CURLOPT_POSTFIELDS, $body);

        // Send the request & save response to $resp
        $resp = curl_exec($ch);

        $data = json_decode($resp, true);

        curl_close($ch);

        return new Person($data);


    }
}