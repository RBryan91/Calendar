<?php
include('calendar.php');
$suci = new calendar;
$suci->display_event(['name'=>'"RDV Client Smith"',
                    'date'=>'31-12-2019',
                    'location'=>'Nantes'
                    ]);