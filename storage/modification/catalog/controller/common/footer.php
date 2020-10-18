<?php
class ControllerCommonFooter extends Controller {
	public function index() {

            if (isset($this->request->get['route'])) {
            $data['rota'] = $this->request->get['route'];
            } else {
            $data['rota'] = $this->config->get('rota');         
            }
            

            if (isset($this->request->get['route'])) {
            $data['rota'] = $this->request->get['route'];
            } else {
            $data['rota'] = $this->config->get('rota');         
            }
            

					$data['seller_chat'] = '';
			if(NULL !== $this->config->get('module_purpletree_multivendor_status')){
			if($this->config->get('module_purpletree_multivendor_status')){
		
			}
			}
			
		$this->load->language('common/footer');

				$data["wa_whatsapp_no"] = preg_replace('/[^A-Za-z0-9\-]/', '', $this->config->get('config_whatsapp_no'));
				$data["wa_whatsapp_btntext"] = $this->config->get('config_whatsapp_btntext');
				$data["wa_whatsapp_msg"] = $this->config->get('config_whatsapp_msg');
				$data["wa_whatsapp_onbottom"] = $this->config->get('config_whatsapp_onbottom');
				$iphone = strpos($this->request->server['HTTP_USER_AGENT'],"iPhone");
				$android = strpos($this->request->server['HTTP_USER_AGENT'],"Android");
				$palmpre = strpos($this->request->server['HTTP_USER_AGENT'],"webOS");
				$berry =strpos($this->request->server['HTTP_USER_AGENT'],"BlackBerry");
				$ipod =strpos($this->request->server['HTTP_USER_AGENT'],"iPod");
				if ($iphone || $android || $palmpre || $ipod || $berry == true){
				$data["wa_link"] = "https://api.whatsapp.com/send?phone";
				}else{
				$data["wa_link"] = "https://web.whatsapp.com/send?phone";
				}
			

		$this->load->model('catalog/information');

		$data['informations'] = array();

		foreach ($this->model_catalog_information->getInformations() as $result) {
			if ($result['bottom']) {
				$data['informations'][] = array(
					'title' => $result['title'],
					'href'  => $this->url->link('information/information', 'information_id=' . $result['information_id'])
				);
			}
		}


               $data['user_popup'] = $this->load->controller('extension/module/pavuserpopup');
            
		$data['contact'] = $this->url->link('information/contact');
		$data['return'] = $this->url->link('information/information&information_id=8', '', true);
		$data['sitemap'] = $this->url->link('information/sitemap');
		$data['tracking'] = $this->url->link('information/tracking');
		$data['manufacturer'] = $this->url->link('product/manufacturer');
		$data['voucher'] = $this->url->link('account/voucher', '', true);
		$data['affiliate'] = $this->url->link('affiliate/login', '', true);
		$data['special'] = $this->url->link('product/special');
		$data['account'] = $this->url->link('account/account', '', true);
		$data['order'] = $this->url->link('account/order', '', true);
		$data['wishlist'] = $this->url->link('account/wishlist', '', true);
		$data['newsletter'] = $this->url->link('account/newsletter', '', true);


$data['action'] = $this->url->link('account/login', '', true);
$data['register'] = $this->url->link('account/register', '', true);
$data['forgotten'] = $this->url->link('account/forgotten', '', true);

		$data['powered'] = sprintf($this->language->get('text_powered'), $this->config->get('config_name'), date('Y', time()));

    $this->load->model('tool/image');
    $data['module_scrollUp_status']=$this->config->get('module_scrollUp_status');
    $data['arrow']=$this->config->get('module_scrollUp_optradio');
   
      
   

		// Whos Online
		if ($this->config->get('config_customer_online')) {
			$this->load->model('tool/online');

			if (isset($this->request->server['REMOTE_ADDR'])) {
				$ip = $this->request->server['REMOTE_ADDR'];
			} else {
				$ip = '';
			}

			if (isset($this->request->server['HTTP_HOST']) && isset($this->request->server['REQUEST_URI'])) {
				$url = ($this->request->server['HTTPS'] ? 'https://' : 'http://') . $this->request->server['HTTP_HOST'] . $this->request->server['REQUEST_URI'];
			} else {
				$url = '';
			}

			if (isset($this->request->server['HTTP_REFERER'])) {
				$referer = $this->request->server['HTTP_REFERER'];
			} else {
				$referer = '';
			}

			$this->model_tool_online->addOnline($ip, $this->customer->getId(), $url, $referer);
		}

		$data['scripts'] = $this->document->getScripts('footer');
		
   
$data['order_tracking_module'] = $this->load->controller('extension/module/order_tracking');


		return $this->load->view('common/footer', $data);
	}
}
