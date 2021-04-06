<?php
class AirCondition
{
    function cool()
    {
        $this->gas();
        $this->start_fan();
        print("Cooling the room");
    }
    function hot()
    {
        print("Make the room hot");
    }
    function gas()
    {
        print('Using nitrogen gas');
    }
    function start_fan()
    {
        print('Starting fan');
    }
}

class Monitor
{
    function display()
    {
        print("Display the desktop");
    }
}

class Printer
{
    function print()
    {
        print("Print the file");
    }
}

class Startimes
{
    function entertain()
    {
        print("Showing sport");
    }
}
// Instantiation
$air_condition = new AirCondition();

$air_condition->cool();