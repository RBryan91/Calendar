<?php
include("calendar.php");
$suci = new calendar;
$suci->display_events_by_month(['name'=>'"Reunion Client"','date'=>'05-05-2020','location'=>'Nantes'],['name'=>'"Affinage sprint 2"','date'=>'05-07-2020','location'=>'Nantes'],['name'=>'"RDV Pro"','date'=>'05-07-2020','location'=>'Paris'],['name'=>'"Brainstorning"','date'=>'05-07-2019','location'=>'Lyon'],['name'=>'"Demonstration client"','date'=>'05-02-2020','location'=>'Lille']);
