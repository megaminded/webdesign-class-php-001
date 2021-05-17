<?php
class AirCondition
{
    function __construct($value_of_fan)
    {
        // echo "Class is initialized, and the value of fan is: {$value_of_fan}";
        $this->fan = $value_of_fan;
    }

    private $fan = false;
    function cool()
    {
        if ($this->fan == true) {
            $this->start_fan();
            print("Cooling the room");
        } else {
            print("Cannot Cool the room, the fan must be on");
        }
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
$air_condition = new AirCondition(false);

$air_condition->cool();
$air_condition->hot();