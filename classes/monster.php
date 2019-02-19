<?php
/**
 * Created by PhpStorm.
 * User: sammgabriel
 * Date: 2019-02-19
 * Time: 12:48
 */

class Monster {

    private $_name;

    function __construct($name = "Sully")
    {

        $this->_name = $name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->_name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     *
     * specifies which monster is attacking
     *
     */
    public function attack()
    {

        echo "<p>" . $this->_name . " is attacking!</p>";
    }
}