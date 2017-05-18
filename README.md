# FollowUpBossPHP

FollowUpBoss::$APIKEY = "Key Goes Here";

```
/* Query base on all the available parameters Follow Up Boss supplies */

$people = (new PersonQuery())->whereStage("Lead")->whereContacted(true)->get();

/* Grab all the notes for a user */

$notes =  $people[0]->Notes()->whereLimit(10)->get();

/* Grab all the events of a user */

$events = $people[0]->Events()->get(); 
```
