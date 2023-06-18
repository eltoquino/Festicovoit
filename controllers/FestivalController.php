<?php
class FestivalController {
    private $festivalDAO;

    public function __construct($festivalDAO) {
        $this->festivalDAO = $festivalDAO;
    }

    public function listFestivals() {
        $festivals = $this->festivalDAO->getAllFestivals();
        require_once 'views/festivals.php';
    }

    public function getFestival($festivalId) {
        $festival = $this->festivalDAO->getFestivalById($festivalId);
        require_once 'views/festival.php';
    }

}
?>