<?php
class ModelLocalisationPayselect extends Model {
	public function addSelection($data) {
		$this->db->query("INSERT INTO " . DB_PREFIX . "payselect SET status = '" . (int)$data['status'] . "', name = '" . $this->db->escape($data['name']) . "', href = '" . $this->db->escape($data['href']) . "'");

		$this->cache->delete('payselect');
	}

	public function editSelection($select_id, $data) {
		$this->db->query("UPDATE " . DB_PREFIX . "payselect SET status = '" . (int)$data['status'] . "', name = '" . $this->db->escape($data['name']) . "', href = '" . $this->db->escape($data['href']) . "' WHERE select_id = '" . (int)$select_id . "'");

		$this->cache->delete('payselect');
	}

	public function deleteSelection($select_id) {
		$this->db->query("DELETE FROM " . DB_PREFIX . "payselect WHERE select_id = '" . (int)$select_id . "'");

		$this->cache->delete('payselect');
	}

	public function getSelection($select_id) {
		$query = $this->db->query("SELECT DISTINCT * FROM " . DB_PREFIX . "payselect WHERE select_id = '" . (int)$select_id . "'");

		return $query->row;
	}

	public function getSelections($data = array()) {
		$sql = "SELECT * FROM " . DB_PREFIX . "payselect";

		$sort_data = array(
			'name',
			'href',
			'status'
		);

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY " . $data['sort'];
		} else {
			$sql .= " ORDER BY name";
		}

		if (isset($data['order']) && ($data['order'] == 'DESC')) {
			$sql .= " DESC";
		} else {
			$sql .= " ASC";
		}

		if (isset($data['start']) || isset($data['limit'])) {
			if ($data['start'] < 0) {
				$data['start'] = 0;
			}

			if ($data['limit'] < 1) {
				$data['limit'] = 20;
			}

			$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
		}

		$query = $this->db->query($sql);

		return $query->rows;
	}

	public function getTotalSelections() {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "payselect");

		return $query->row['total'];
	}

}
