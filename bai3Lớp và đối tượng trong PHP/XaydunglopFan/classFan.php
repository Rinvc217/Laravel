<?php
const SLOW = 1;
const MEDIUM = 2;
const FAST = 3;

class Fan
{
    private $speed = SLOW;
    private $on = false;
    private $radius = 5;
    private $color = "red";

    public function construct()
    {
        $this->speed = SLOW;
    }

    function __setspeed($mode)
    {
        switch ($mode) {
            case "FAST":
                $this->speed = $this->FAST;
                break;
            case "MEDIUM":
                $this->speed = $this->MEDIUM;
                break;
            case "SLOW":
                $this->speed = $this->SLOW;
                break;

        }
    }

    public function get_on()
    {
        return $this->on;
    }

    public function set_on($on)
    {
        if ($this->on = false) {
            return 'Quạt Đang Tắt';
        } else {
            return 'Quạt Đang Bật';
        }
    }

    public function get_radius()
    {
        return $this->radius;
    }

    public function set_radius($radius)
    {
        $this->radius = $radius;
    }

    public function get_color()
    {
        return $this->color();
    }

    public function set_color($color)
    {
        $this->color = $color;
    }

    public function onOfFan() {
        $this->on = !$this->on;
    }

    public function toString()
    {
        if ($this->on) {
            return 'Quạt Đang Tắt' . $this->speed . 'có màu ' . ' ' . $this->color . ' ' . ' bán kính quạt' . $this->radius . ' ';
        } else {
            return ' ' . 'Quạt Đang Bật' . ' ' . 'có màu ' . ' ' . $this->color . ' ' . 'bán kính quạt  ' . $this->radius;
        }
    }

}
$fan1 = new Fan();
//$fan1 = new Fan();
//$fan1 = set_speed("FAST");
//$fan1 = set_radius(10);
//$fan1 = set_color("yellow");
//$fan1 = set_toString("on","true");
echo $fan1->toString();
echo '<br>';
$fan1->onOfFan();
echo $fan1->toString();
?>