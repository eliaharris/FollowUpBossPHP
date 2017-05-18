<?php
/**
 * Created by IntelliJ IDEA.
 * User: eliaharris
 * Date: 5/14/17
 * Time: 6:49 PM
 */

namespace App\FollowUpBoss\Api;


use App\FollowUpBoss\FollowUpBoss;
use App\FollowUpBoss\Person;

class PersonAPI extends FollowUpBoss
{


    /**
     * @param $id
     * @param $data
     * @return Person
     */
    public function update($id, $data = [])
    {

        // Get cURL resource
        $ch = curl_init();

        // Set url
        curl_setopt($ch, CURLOPT_URL, 'https://api.followupboss.com/' . $this->version . '/people/' . $id);

        // Set method
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');

        // Set options
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        // Set headers
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
                'Authorization: Basic ' . base64_encode(FollowUpBoss::$APIKEY . ":"),
                "Content-Type: application/x-www-form-urlencoded; charset=utf-8",
            ]
        );

        $body = json_encode($data);

        // Set body
        curl_setopt($ch, CURLOPT_POST, 1);

        curl_setopt($ch, CURLOPT_POSTFIELDS, $body);

        // Send the request & save response to $resp
        $resp = curl_exec($ch);

        // Close request to clear up some resources
        curl_close($ch);

        return new Person(json_decode($resp, true));

    }


    /**
     * @param $id
     */
    public function delete($id)
    {

        // Get cURL resource
        $ch = curl_init();

        // Set url
        curl_setopt($ch, CURLOPT_URL, 'https://api.followupboss.com/' . $this->version . '/people/' . $id);

        // Set method
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');

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


    }

}