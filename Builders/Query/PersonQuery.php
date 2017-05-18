<?php

/**
 * Created by IntelliJ IDEA.
 * User: eliaharris
 * Date: 5/15/17
 * Time: 7:13 PM
 */

namespace App\FollowUpBoss\Builders\Query;

use App\FollowUpBoss\PeopleAPI;

/**
 * Class PersonQuery
 * @package App\FollowUpBoss\Builders\Query
 */
class PersonQuery extends Query
{


    /**
     * People constructor.
     */

    public function __construct()
    {

        $this->apiDriver = new PeopleAPI();

    }

    /**
     * Defines all the possible query parameters for this class
     * 'sort' => '',
     * 'limit' => '',
     * 'offset' => '',
     * 'fields' => '',
     * 'lastActivityAfter' => '',
     * 'lastActivityBefore' => '',
     * 'name' => '',
     * 'firstName' => '',
     * 'lastName' => '',
     * 'email' => '',
     * 'phone' => '',
     * 'stage' => '',
     * 'source' => '',
     * 'assignedTo' => '',
     * 'assignedUserId' => '',
     * 'assignedLenderName' => '',
     * 'contacted' => '',
     * 'priceAbove' => '',
     * 'priceBelow' => '',
     * 'smartListId' => ''
     * @var array
     */

    protected $queryData = [''];


    /**
     * Sets the sort for this query
     *
     * id, created, updated, name, firstName,
     * lastName, price, stage, lastActivity,
     * lastReceivedEmail, lastSentEmail, lastEmail,
     * emailsReceived, emailsSent, lastIncomingCall,
     * lastOutgoingCall, lastCall, firstCall, callsIncoming,
     * callsOutgoing, callsDuration, lastReceivedText,
     * lastSentText, lastText, lastLeadActivity,
     * lastIdxVisit, textsReceived, textsSent,
     * propertiesViewed, propertiesSaved,
     * pagesViewed or nextTask
     *
     * @param string $sort
     * @return $this
     */

    public function whereSort($sort)
    {

        $this->queryData['sort'] = $sort;

        return $this;

    }

    /**
     * Sets the limit for this query
     * @param int $limit
     * @return $this
     */
    public function whereLimit($limit)
    {

        $this->queryData['limit'] = $limit;

        return $this;

    }

    /**
     * Sets the offset for this query
     * @param int $offset
     * @return $this
     * @internal param $offset
     */
    public function whereOffset($offset)
    {

        $this->queryData['offset'] = $offset;

        return $this;

    }

    /**
     * Set the fields that will be returned when the query executes
     *
     * @param array $fields
     * @return $this
     */
    public function whereFields($fields = [])
    {

        $this->queryData['fields'] = $fields;

        return $this;

    }

    /**
     * Sets the last activity after a given time
     * @param string $lastActivityAfter
     * @return $this
     */
    public function whereLastActivityAfter($lastActivityAfter)
    {

        $this->queryData['lastActivityAfter'] = $lastActivityAfter;

        return $this;

    }


    /**
     * Sets the last activity after a given time
     * @param string $lastActivityBefore
     * @return $this
     */
    public function whereLastActivityBefore($lastActivityBefore)
    {

        $this->queryData['lastActivityBefore'] = $lastActivityBefore;

        return $this;

    }


    /**
     * Sets the last activity after a given time
     * @param string $name
     * @return $this
     */
    public function whereName($name)
    {

        $this->queryData['name'] = $name;

        return $this;

    }

    /**
     * Sets the first name
     * @param string $firstName
     * @return $this
     */
    public function whereFirstName($firstName)
    {

        $this->queryData['firstName'] = $firstName;

        return $this;
    }


    /**
     * Sets the first name
     * @param string $lastName
     * @return $this
     * @internal param $firstName
     */
    public function whereLastName($lastName)
    {

        $this->queryData['lastName'] = $lastName;

        return $this;
    }

    /**
     * Sets the email
     * @param string $email
     * @return $this
     */
    public function whereEmail($email)
    {

        $this->queryData['email'] = $email;

        return $this;
    }

    /**
     * Sets the first name
     * @param string $phone
     * @return $this
     * @internal param $lastName
     * @internal param $firstName
     */
    public function wherePhone($phone)
    {

        $this->queryData['phone'] = $phone;

        return $this;
    }


    /**
     * Sets the stage
     * @param string $stage
     * @return $this
     */
    public function whereStage($stage)
    {

        $this->queryData['stage'] = $stage;

        return $this;
    }

    /**
     * Sets the source
     * @param string $source
     * @return $this
     */
    public function whereSource($source)
    {

        $this->queryData['source'] = $source;

        return $this;
    }


    /**
     * Sets who the person is assigned to
     * @param string $assignedTo
     * @return $this
     */
    public function whereAssignedTo($assignedTo)
    {

        $this->queryData['assignedTo'] = $assignedTo;

        return $this;
    }

    /**
     * Sets who the person is assigned to
     * @param int $assignedUserId
     * @return $this
     */
    public function whereAssignedUserId($assignedUserId)
    {

        $this->queryData['assignedUserId'] = $assignedUserId;

        return $this;
    }

    /**
     * Sets who the person is assigned to a lender
     * @param string $assignedLenderName
     * @return $this
     */
    public function whereAssignedLenderName($assignedLenderName)
    {

        $this->queryData['assignedLenderName'] = $assignedLenderName;

        return $this;
    }


    /**
     * Sets who the person is assigned to a lender id
     * @param  int $assignedLenderId
     * @return $this
     */
    public function whereAssignedLenderId($assignedLenderId)
    {

        $this->queryData['assignedLenderId'] = $assignedLenderId;

        return $this;
    }


    /**
     * Sets who the person is assigned to a lender id
     * @param bool $contacted
     * @return $this
     */
    public function whereContacted($contacted)
    {

        $this->queryData['contacted'] = $contacted;

        return $this;
    }


    /**
     * Sets the price below
     * Sets who the person is assigned to a lender id
     * @param int $priceAbove
     * @return $this
     */
    public function wherePriceAbove($priceAbove)
    {

        $this->queryData['priceAbove'] = $priceAbove;

        return $this;
    }


    /**
     * Sets the price below
     * Sets who the person is assigned to a lender id
     * @param int $priceBelow
     * @return $this
     */
    public function wherePriceBelow($priceBelow)
    {

        $this->queryData['priceBelow'] = $priceBelow;

        return $this;
    }


    /**
     * Sets the smart list id
     * Sets who the person is assigned to a lender id
     * @param int $smartListId
     * @return $this
     */
    public function whereSmartListId($smartListId)
    {

        $this->queryData['smartListId'] = $smartListId;

        return $this;
    }


}



