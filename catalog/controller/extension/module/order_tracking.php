<?php
class ControllerExtensionModuleOrderTracking extends Controller {
	private $error =  array();
	public function index() {




		
		if( $this->config->get('order_tracking_status') ){
			$this->load->language("extension/module/order_tracking");
			$this->document->addStyle('catalog/view/theme/default/stylesheet/order_tracking.css');
			$this->document->addScript('catalog/view/theme/default/javascript/order_tracking.js');
			// Captcha
			//fix captcha basic 
			$this->request->get['route'] = isset($this->request->get['route']) && $this->request->get['route'] ? $this->request->get['route'] : '';
			$data['captcha'] = $this->load->controller('extension/captcha/' . $this->config->get('config_captcha'), $this->error);
		
			return $this->load->view('extension/module/order_tracking', $data);
	 	}
	}


	public function get_status(){
		$json = array();
		try {
			$this->load->language("extension/module/order_tracking");
			$order_id_or_email  = isset($this->request->post['order_id_or_email']) && $this->request->post['order_id_or_email'] ? $this->request->post['order_id_or_email'] : false;
			if( !$order_id_or_email ){
				throw new Exception($this->language->get("error_empty_order_id"));
				
			}

			$email = filter_var($order_id_or_email, FILTER_VALIDATE_EMAIL);
			$order_id = filter_var($order_id_or_email, FILTER_SANITIZE_NUMBER_INT);

			
			if ( !$email && !$order_id ) {
				throw new Exception($this->language->get("error_invalid_order_id"));
			}


			if ($this->config->get('captcha_' . $this->config->get('config_captcha') . '_status') ) {
				$captcha = $this->load->controller('extension/captcha/' . $this->config->get('config_captcha') . '/validate');

				if ($captcha) {
					$this->error['captcha'] = $captcha;
					throw new Exception($captcha);
				}
			}

			$os_id = $this->config->get('order_tracking_order_status_id');

			$order_status = " > 0";

			if( $os_id ){
				$order_status  = ' =  '.(int)$os_id;
			}



			$sql = ' SELECT o.order_id, os.name as order_status, o.date_added  FROM '.DB_PREFIX.'order o JOIN '.DB_PREFIX.'order_status os ON os.language_id = "' . (int)$this->config->get('config_language_id') . '" AND os.order_status_id  = (SELECT oh.order_status_id FROM '.DB_PREFIX.'order_history oh WHERE oh.order_id=o.order_id  ORDER BY oh.date_added DESC LIMIT 1)  WHERE o.order_id="'.$this->db->escape($order_id_or_email) .'" OR o.email =  "'.$this->db->escape($order_id_or_email) .'" ';
			$query = $this->db->query($sql);
			$res = $query->rows;
			for ($i=0; $i < count($res); $i++) { 
				$res[$i]['view'] = $this->url->link('account/order/info','order_id='.$res[$i]['order_id'] ,true);
				$res[$i]['date_added'] =date('Y/m/d H:i:s',strtotime($res[$i]['date_added']));
			}
			$message="";
			if (count($res) == 0) {
				$message = $this->language->get("text_no_orders");
			}
			$json['result'] = $res;
			$json['message'] = $message;
			$json['heading'] = $this->language->get("text_info_orders");


		} catch (Exception $e) {
				$json['error'] = $e->getMessage();
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}