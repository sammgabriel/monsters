<?php
/**
 * Created by PhpStorm.
 * User: sammgabriel
 * Date: 2019-02-19
 * Time: 13:31
 */

class Hydra extends Monster {

    private $_heads;

    public function __construct($name = "Bob")
    {
        parent::__construct($name);
        $this->_heads = 1;
    }

    public function attack()
    {
        parent::attack();
        echo "Someone cut off a head, but two grow back!";
        $this->_heads = $this->_heads * 2;
    }

    /**
     * @return int
     */
    public function getHeads()
    {
        return $this->_heads;
    }
}