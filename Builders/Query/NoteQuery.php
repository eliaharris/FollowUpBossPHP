<?php
/**
 * Created by IntelliJ IDEA.
 * User: eliaharris
 * Date: 5/15/17
 * Time: 7:00 PM
 */

namespace App\FollowUpBoss\Builders\Query;
use App\FollowUpBoss\Api\NotesAPI;


/**
 * This builder allows for notes to be build with a unique builder. Easy access to change attributes.
 * Class NoteQuery
 * @package App\FollowUpBoss\Builders\Query
 */
class NoteQuery extends Query
{
    /**
     * Specify all the possible fields for this query
     * 'personID' => '', 'offset' => '', 'limit' => ''
     * @var array
     */

    protected $queryData = [];


    /**
     * This constructor will define which fields NEEDs to be defined
     * NoteQuery constructor.
     * @param array $queryData
     */
    public function __construct($queryData = [])
    {

        $this->apiDriver = new NotesAPI();

        $this->queryData = $queryData;
    }


    /**
     * Sets the personID for this query
     * @param $personID
     * @return $this
     */
    public function wherePersonID($personID)
    {

        $this->queryData['personID'] = $personID;

        return $this;

    }


}