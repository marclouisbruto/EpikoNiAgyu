<?php
require_once 'config.php';
class Dialog {
    private $db;

    public function __construct() {
        $this->db = (new Database())->getConnection();
    }

    public function getAll() {
        $sql = "SELECT dialog.script AS script, characters.name AS names, characters.image AS pics FROM dialog LEFT JOIN characters ON dialog.character_id = characters.id;";
        $result = $this->db->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

}

