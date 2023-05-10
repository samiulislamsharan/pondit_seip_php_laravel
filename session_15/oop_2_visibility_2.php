<?php
trait DB
{
    public function connect()
    {
        return 'connected to DB';
    }
}
trait Notification
{
    public function notify($contact, $message)
    {
        return 'Sending notification';
    }
}

class Student
{
    public $name = 'A';
}
class Emoloyee extends Student
{
    use DB, Notification;
}

$employee = new Emoloyee;
echo $employee -> notify('12345', 'ABCD');