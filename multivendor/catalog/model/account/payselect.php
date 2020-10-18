<?php
class ModelAccountPayselect extends Model {
	public function getSelection($select_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "payselect WHERE select_id = '" . (int)$select_id . "'");

		return $query->row;
	}

	public function getSelections() {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "payselect WHERE status = '1'");

		return $query->rows;
	}

	public function getSelectionLink($select_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "payselect WHERE select_id = '" . (int)$select_id . "'");

        $result = $query->row;
        
        $select_link = $result['href'];

		return $select_link;
	}

}
