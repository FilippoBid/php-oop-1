<?php
class Movie {
    private $title;
    private $lenguage;
    private $director;  
    private $releasedate;

    function __construct($_title, $_lenguage, $_director, $_releasedate) {
        $this->setTitle($_title);
        $this->setLenguage($_lenguage);
        $this->setDirector($_director);
        $this->setRelease($_releasedate);
    }
    // creo tutte le funzioni set 
    public function setTitle($_title)
    {
        $this->title = $_title;

        return $this;
    }

    public function setLenguage($_lenguage)
    {
        $this->lenguage = $_lenguage;

        return $this;
    }
    public function setDirector($_director)
    {
        $this->director = $_director;

        return $this;
    }
    public function setRelease($_releasedate)
    {
        $this->releasedate = $_releasedate;

        return $this;
    }
}
