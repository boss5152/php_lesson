<?php
    class students{
        private $ch,$eng,$math;
        public function __construct($ch,$eng,$math){
            $this->ch = $ch;
            $this->eng = $eng;
            $this->math = $math;
        }
        public function sum(){
            return $this->ch + $this->eng + $this->math;
        }
        public function avg(){
            return sum()/3;
        }
        public function setch($newch){
            $this->ch = $newch;
        }
    }
?>