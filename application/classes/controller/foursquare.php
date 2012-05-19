<?php

defined('SYSPATH') or die('No direct script access.');

Kohana::load(Kohana::find_file('vendor/foursquare', 'foursquare'));

class Controller_Foursquare extends Controller_Layout
{

    public $myLocation = false;
    public $myPosition = array();

    const CLIENT_KEY = 'YMJ1W0C2FYESV25T5FSCC3EHZSJGDWRN1GWTFAXKKBJNOAND';
    const CLIENT_SECRET = 'ZWAGZJOHWY3D5WZHFDTGBO2HPDUJFWVVPHSJM3GIFIAG2OXJ';

    public function action_index()
    {
        $this->setPositionByHtml('Sofia, BG');

        $location = array_key_exists("location", $_GET) ? $_GET['location'] : "Sofia, BG";
        $foursquare = new FoursquareAPI(self::CLIENT_KEY, self::CLIENT_SECRET);
        list($lat, $lng) = $foursquare->GeoLocate($location);
        $params = array("ll" => "$lat,$lng", 'query' => 'cinema', 'radius' => 39000);
        $response = $foursquare->GetPublic("venues/explore", $params);
        $venues = json_decode($response);
 
        foreach ($venues->response->groups as $group):
           // echo $group->name;
            foreach ($group->items as $venue):
                $result[] = $venue->venue;
            // print_r($venue->venue);
//                if (property_exists($venue->contact, "twitter"))
//                {
//                    echo " -- follow this venue <a href=\"http://www.twitter.com/{$venue->contact->twitter}\">@{$venue->contact->twitter}</a>";
//                }
            endforeach;
        endforeach;
        $this->view_data['data'] = $result;
        $this->view_data['position'] = $this->myPosition;
    }

    public function action_setPosition()
    {
        $this->auto_render = false;
        $this->setPositionByHtml();
    }

    public function setPositionByHtml($position = false)
    {
        if (!isset($_SESSION['position']))
        {
            if (!$position)
            {
                unset($_SESSION['position']);
                $this->myPosition = array(
                    'latitude' => isset($_POST['latitude']) ? $_POST['latitude'] : false,
                    'longitude' => isset($_POST['longitude']) ? $_POST['longitude'] : false,
                );
                $_SESSION['position'] = $this->myPosition;
                var_dump($_SESSION['position']);
            }
            else
            {
                $foursquare = new FoursquareAPI(self::CLIENT_KEY, self::CLIENT_SECRET);
                list($lat, $lng) = $foursquare->GeoLocate($position);

                $this->myPosition = array(
                    'latitude' => isset($lat) ? $lat : false,
                    'longitude' => isset($lng) ? $lng : false,
                );
            }
        }
        else
        {
            $this->myPosition = $_SESSION['position'];
        }
    }

    public function setPositionByIp()
    {
        //Todo
    }

}

