<?php 
namespace Anuddev\TestAppSample;

use Exception; 

class User 
{
    // declare vars
    public array $favouriteColor = [];

    function __construct(string $name, int $age) {
        // 
        $this->name = $name;
        $this->age = $age;
    }

    public function sayName() : string {
        return "My name is: " . $this->name;
    }

    public function sayAge() : string {
        return 'I am '.$this->age.' years old';
    }

    public function addFavouriteColor(string $color) : bool {
        $this->favouriteColor[] = $color;
        // 
        return true;
    }

    public function removeFavouriteColor(string $color) : bool|string
    {
        if ( !in_array($color, $this->favouriteColor) ) throw new Exception("Invalid Request $color color not found!", 1);
        // 
        $searchVal = array_search($color, $this->favouriteColor);
        unset($this->favouriteColor[$searchVal]);
        // 
        return true;
    }
}
