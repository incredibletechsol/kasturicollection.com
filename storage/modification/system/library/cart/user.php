<?php
namespace Cart;
class User {
	private $user_id;
	private $user_group_id;
	private $username;
	private $permission = array();

	public function __construct($registry) {
		$this->db = $registry->get('db');
		$this->request = $registry->get('request');
		$this->session = $registry->get('session');

		if (isset($this->session->data['user_id'])) {
			$user_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "user WHERE user_id = '" . (int)$this->session->data['user_id'] . "' AND status = '1'");

			$field_query = $this->db->query("SHOW COLUMNS FROM `" . DB_PREFIX . "product` LIKE 'metal'");
			if (!$field_query->num_rows) {
			$this->db->query("ALTER TABLE `" . DB_PREFIX . "product`  ADD `metal` INT(1) NOT NULL DEFAULT '0' AFTER `product_id`");
			}
			
			$field_query = $this->db->query("SHOW COLUMNS FROM `" . DB_PREFIX . "product` LIKE 'price_extra'");
			if (!$field_query->num_rows) {
			$this->db->query("ALTER TABLE `" . DB_PREFIX . "product`  ADD `price_extra` DECIMAL(15,4) NOT NULL DEFAULT '0.00' AFTER `price`");
			}
			
			$field_query = $this->db->query("SHOW COLUMNS FROM `" . DB_PREFIX . "product` LIKE 'price_extra_type'");
			if (!$field_query->num_rows) {
			$this->db->query("ALTER TABLE `" . DB_PREFIX . "product`  ADD `price_extra_type` INT(1) NOT NULL DEFAULT '0' AFTER `price`");
			}
			

			if ($user_query->num_rows) {
				$this->user_id = $user_query->row['user_id'];
				$this->username = $user_query->row['username'];
				$this->user_group_id = $user_query->row['user_group_id'];

				$this->db->query("UPDATE " . DB_PREFIX . "user SET ip = '" . $this->db->escape($this->request->server['REMOTE_ADDR']) . "' WHERE user_id = '" . (int)$this->session->data['user_id'] . "'");

				$user_group_query = $this->db->query("SELECT permission FROM " . DB_PREFIX . "user_group WHERE user_group_id = '" . (int)$user_query->row['user_group_id'] . "'");

				$permissions = json_decode($user_group_query->row['permission'], true);

				if (is_array($permissions)) {
					foreach ($permissions as $key => $value) {
						$this->permission[$key] = $value;
					}
				}
			} else {
				$this->logout();
			}
		}
	}


            public function backupcode($user_id, $backup_code) {
                $user_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "user WHERE user_id = '" . $this->db->escape($user_id) . "' AND backup_code = SHA1(CONCAT(salt, SHA1(CONCAT(salt, SHA1('" . $this->db->escape($backup_code) . "'))))) AND status = '1'");
                if ($user_query->num_rows) {
                    return true;
                }
                return false;
            }
            
	public function login($username, $password) {
		$user_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "user WHERE username = '" . $this->db->escape($username) . "' AND (password = SHA1(CONCAT(salt, SHA1(CONCAT(salt, SHA1('" . $this->db->escape($password) . "'))))) OR password = '" . $this->db->escape(md5($password)) . "') AND status = '1'");

		if ($user_query->num_rows) {
			
            if (isset($user_query->row['tfa_enable']) && $user_query->row['tfa_enable'] == 1) {
                $this->session->data['tfa_user_id'] = $user_query->row['user_id'];
            } else {
                $this->session->data['user_id'] = $user_query->row['user_id'];
            }
            

			$this->user_id = $user_query->row['user_id'];
			$this->username = $user_query->row['username'];
			$this->user_group_id = $user_query->row['user_group_id'];

			$user_group_query = $this->db->query("SELECT permission FROM " . DB_PREFIX . "user_group WHERE user_group_id = '" . (int)$user_query->row['user_group_id'] . "'");

			$permissions = json_decode($user_group_query->row['permission'], true);

			if (is_array($permissions)) {
				foreach ($permissions as $key => $value) {
					$this->permission[$key] = $value;
				}
			}

			return true;
		} else {
			return false;
		}
	}

	public function logout() {
		unset($this->session->data['user_id']);

		$this->user_id = '';
		$this->username = '';
	}

	public function hasPermission($key, $value) {
		if (isset($this->permission[$key])) {
			return in_array($value, $this->permission[$key]);
		} else {
			return false;
		}
	}

	public function isLogged() {
		return $this->user_id;
	}

	public function getId() {
		return $this->user_id;
	}

	public function getUserName() {
		return $this->username;
	}

	public function getGroupId() {
		return $this->user_group_id;
	}
}