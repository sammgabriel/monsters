<?php
/**
 * Created by PhpStorm.
 * User: sammgabriel
 * Date: 2019-02-19
 * Time: 13:10
 */

class Vampire extends Monster {

    private $_victims;

    /**
     * Vampire constructor.
     * @param $name
     */
    function __construct($name = "Edward Cullen")
    {

        parent::__construct($name);
        $this->_victims = 0;
    }

    /**
     *
     * specifies who is attacking and
     * increases the number of victims
     *
     */
    public function attack()
    {

        parent::attack();
        $this->_victims = $this->_victims + 1;
    }

    /**
     * @return int
     */
    public function getVictims()
    {
        return $this->_victims;
    }
}