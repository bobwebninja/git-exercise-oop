<?php
use App\AbstractApplication;
use Entity\Commission;
use Person\Human;
use Person\President;
use Person\VicePresident;
use Person\Commissionner;
use Person\Bodyguard;
use Date\Date;
use Place\Address;
use Symfony\Component\HttpFoundation\Response;

/**
 * This class is the main application. You will overwrite the "run" method to implement your code
 *
 * @author matthieu vallance <matthieu.vallance@vesperiagroup.com>
 */
class Application extends AbstractApplication
{
    /**
     * Run
     *
     * Execute the request process
     *
     * @return string|NULL
     */
    protected function run() : ?string
    {
        // Get the request, from this
        $request = $this->getRequest();
        
        // if the request is a POST
        if ($request->getMethod() == 'POST') {
            // create a new object date
            $date = new Date();
            // get the day from the request and insert into date
            $date->setDay($request->request->get('day'));
            // get the month from the request and insert into date
            // get the year from the request and insert into date
            // return the json encoded date
        }
        // else
        return '
<form method="POST">
    <label for="day">day</label>
    <input type="number" name="day"/>

    <label for="month">month</label>
    <input type="number" name="month"/>

    <label for="year">year</label>
    <input type="number" name="year"/>

    <button type="submit">Submit</button>
</form>
';
    }
}

