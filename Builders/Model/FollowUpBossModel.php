<?php
/**
 * Created by IntelliJ IDEA.
 * User: eliaharris
 * Date: 5/17/17
 * Time: 7:37 PM
 */

namespace App\FollowUpBoss\Builders\Model;


class FollowUpBossModel
{

    /**
     * @var array
     */

    protected $data = [];

    /**
     * Return the data array associated with this user
     * @return array
     */
    public function getData()
    {

        return $this->data;
    }

}