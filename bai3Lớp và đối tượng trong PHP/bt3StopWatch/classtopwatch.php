<?php
/*
*
 * Created by PhpStorm.
 * User: VTA
 * Date: 2/14/2019
 * Time: 3:19 PM
 */
class Stopwatch {
    private $startTime;
    private $endtime;

    public function Stopwatch(){
        $this->startTime = microtime(true);
    }
    public function get_startTime(){
      return $this->startTime . date();
    }
    public function start() {
        $this->startTime = microtime(true);
    }

    public function stop(){
        $this->endtime = microtime(true);
    }
    public function getElapsedtime(){
        return $this->endtime - $this->startTime;
    }
}
?>
