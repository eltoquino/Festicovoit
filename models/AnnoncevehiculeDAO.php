<?php
class VehicleAnnouncementDAO {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getAllAnnouncements() {
        $query = "SELECT * FROM vehicle_announcements";
        $result = $this->db->query($query);

        $announcements = [];
        while ($row = $result->fetch_assoc()) {
            $announcements[] = $row;
        }

        return $announcements;
    }

    public function getAnnouncementById($announcementId) {
        $query = "SELECT * FROM vehicle_announcements WHERE id = $announcementId";
        $result = $this->db->query($query);

        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return null;
        }
    }

    public function createAnnouncement($vehicleType, $availableSeats, $departureDate, $returnDate = null) {
        $vehicleType = $this->db->escape_string($vehicleType);
        $availableSeats = $this->db->escape_string($availableSeats);
        $departureDate = $this->db->escape_string($departureDate);
        $returnDate = $returnDate ? $this->db->escape_string($returnDate) : null;

        $query = "INSERT INTO vehicle_announcements (vehicle_type, available_seats, departure_date, return_date) VALUES ('$vehicleType', '$availableSeats', '$departureDate', '$returnDate')";
        $this->db->query($query);
    }

    public function updateAnnouncement($announcementId, $vehicleType, $availableSeats, $departureDate, $returnDate = null) {
        $vehicleType = $this->db->escape_string($vehicleType);
        $availableSeats = $this->db->escape_string($availableSeats);
        $departureDate = $this->db->escape_string($departureDate);
        $returnDate = $returnDate ? $this->db->escape_string($returnDate) : null;

        $query = "UPDATE vehicle_announcements SET vehicle_type = '$vehicleType', available_seats = '$availableSeats', departure_date = '$departureDate', return_date = '$returnDate' WHERE id = $announcementId";
        $this->db->query($query);
    }

    public function deleteAnnouncement($announcementId) {
        $query = "DELETE FROM vehicle_announcements WHERE id = $announcementId";
        $this->db->query($query);
    }
}
?>