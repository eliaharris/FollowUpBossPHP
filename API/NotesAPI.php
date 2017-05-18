<?php
/**
 * Created by IntelliJ IDEA.
 * User: eliaharris
 * Date: 5/14/17
 * Time: 7:34 PM
 */

namespace App\FollowUpBoss\Api;

use App\FollowUpBoss\FollowUpBoss;
use App\FollowUpBoss\Note;


class NotesAPI extends FollowUpBoss
{


    /**
     * @param array $query
     * @return Note[]
     */
    public function get($query = [])
    {

        // Get cURL resource
        $ch = curl_init();

        // Set url
        curl_setopt($ch, CURLOPT_URL, 'https://api.followupboss.com/' . $this->version . '/notes?' . http_build_query($query));

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

        $NoteArray = array();

        //If the response is empty we need to return nothing
        if ($results == null || $results['notes'] == null)
            return array();

        foreach ($results['notes'] as $value) {

            array_push($NoteArray, new Note($value));
        }

        return $NoteArray;

    }


    /**
     * @param array $data
     * @return Note
     */
    public function create($data = [])
    {

        // Get cURL resource
        $ch = curl_init();

        // Set url
        curl_setopt($ch, CURLOPT_URL, 'https://api.followupboss.com/' . $this->version . '/notes');

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

        return new Note($data);


    }
}