<?php

class Movie
{
        private $name = null;
        private $duration = null;
        private $description = null;
        
        public function __construct($name = "")
        {
          $this-> name = $name;
        }
        
        public function getName()
        {
         return $this-> name;
        }
        
        public function setName($name = "")
        {
          $this-> name = $name;
        }
        
        public function getDuration()
        {
         return $this-> duration;
        }
        
        public function setDuration($duration = "")
        {
          $this-> duration = $duration;
        }
        
        public function getDescription()
        {
         return $this-> description;
        }
        
        public function setDescription($description = "")
        {
          $this-> description = $description;
        }
}


$movie = new Movie();

echo $movie -> getName();
$movie -> setName("Django Unchained\n");
echo $movie -> getName();

echo $movie -> getDescription();
$movie -> setDescription("A Description\n");
echo $movie -> getDescription();

echo $movie -> getDuration();
$movie -> setDuration(165);
echo $movie -> getDuration();
?>