<?php

class ModelToolPostCodepro extends Model {


	public function getDynamic($id) {

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "postcodesetting WHERE lang_id = '".(int)$id."'");

		return $query->row;

	}



	public function checkpin($data) {

		$ogpincode = $data['pincode'];

		if($this->config->get('imdev_config_wildcardpostcode')) {

			$pinentered = explode(" ", $data['pincode']);

			$data['pincode'] = $pinentered[0];

		}	

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "post_code WHERE zip_code = '".$this->db->escape($data['pincode'])."' LIMIT 1");

		

		if(!$query->num_rows) {

			
			$query->row['html'] = "<table><tr><td><img src='catalog/view/theme/default/image/alert-icon	.png' /> </td><td>No Serivce Found</td></tr>";

			

			$query->row['html'] .= "</table>";

			$query->row['failed'] = 1;

			setcookie("mdevpc","",time() - 3600);

			setcookie("mdevpcm","",time() -3600);

			return $query->row;

		} else {

			$version = str_replace(".","",VERSION);

			if($version < 2300) {

				$this->language->load('module/postcodecheck');

			} else {

				$this->language->load('extension/module/postcodecheck');

			}

				setcookie("mdevpc",$ogpincode,time() + (86400 * 30));

				setcookie("mdevpcm",$query->row['message'],time() + (86400 * 30));
$query->row['html'] = "<table>";
				$query->row['html'] .= "<tr><td><img src='catalog/view/theme/default/image/tick.png' /></td><td>".html_entity_decode($query->row['message'])."</td></tr>";
			$query->row['html'] .= "</table>";

			$query->row['failed'] = 0;

			return $query->row;

		}

	}

}

?>