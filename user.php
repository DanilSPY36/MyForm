<?php
class User{
    private $name = 'user name';
    private $age;
    private $sex = 'user sex';
    private $education = 'non';

    function __construct($name, $age, $sex, $education)
    {
        $this->name = $name;
        $this->age = $age;
        $this->sex = $sex;
        $this->education = $education;
    }
    function Info()
    {
        echo "Name: $this->name; <br> Age: $this->age; <br> Sex: $this->sex; <br> Education: $this->education;";
    }
}
?>