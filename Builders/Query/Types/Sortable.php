<?php

namespace App\FollowUpBoss\Builders\Quer\Types;


/**
 * This type of query can be sortable
 * Class Sortable
 * @package App\FollowUpBoss\Builders\Quer\Types
 */
trait Sortable
{


    /**
     * Set's the
     * @param $sort
     * @return $this
     */

    public function whereSort($sort)
    {

        $this->queryData['sort'] = $sort;

        return $this;

    }

}