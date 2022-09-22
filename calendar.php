<?php
class calendar
{
    function display_event($event)
    {
       // $event =['name' => $event[0], 'date' => $event[1], 'location' => $event[2]];
       
        echo "The ".$event['name']." event will take place on ".$event['date']." in ".$event['location']."\n";
    }
    function display_events_by_month ($event1,$event2,$event3,$event4)
    {
       // var_dump($events);
      //  $events =['name' => $events[0],'date'=> $events[1],'location'=>$events[2]];
         echo "The ".$event1['name']." event will take place on ".$event1['date']." in ".$event1['location']."\n";
         echo "The ".$event2['name']." event will take place on ".$event2['date']." in ".$event2['location']."\n";
         echo "The ".$event3['name']." event will take place on ".$event3['date']." in ".$event3['location']."\n";
         echo "The ".$event4['name']." event will take place on ".$event4['date']." in ".$event4['location']."\n";
            
    }
}
$suci = new calendar;
$suci->display_events_by_month(['name'=>'"Reunion Client"','date'=>'05-05-2020','location'=>'Nantes'],['name'=>'"Affinage sprint 2"','date'=>'05-07-2020','location'=>'Nantes'],['name'=>'"RDV Pro"','date'=>'05-07-2020','location'=>'Paris'],['name'=>'"Brainstorning"','date'=>'05-07-2019','location'=>'Lyon'],['name'=>'"Demonstration client"','date'=>'05-02-2020','location'=>'Lille']);
