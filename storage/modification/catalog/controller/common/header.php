<?php
class ControllerCommonHeader extends Controller {
	public function index() {

      //progress bar
      $this->document->addStyle('catalog/view/javascript/pace/pace.css');
      $this->document->addScript('catalog/view/javascript/pace/pace.min.js');
      //progress bar end
      
$data['d_ajax_search'] = $this->load->controller('extension/module/d_ajax_search');
		// Analytics
		$this->load->model('setting/extension');
     $this->load->model('setting/setting');

		$data['analytics'] = array();

		$analytics = $this->model_setting_extension->getExtensions('analytics');

		foreach ($analytics as $analytic) {
			if ($this->config->get('analytics_' . $analytic['code'] . '_status')) {
				$data['analytics'][] = $this->load->controller('extension/analytics/' . $analytic['code'], $this->config->get('analytics_' . $analytic['code'] . '_status'));
			}
		}

		if ($this->request->server['HTTPS']) {
			$server = $this->config->get('config_ssl');
		} else {
			$server = $this->config->get('config_url');
		}

		if (is_file(DIR_IMAGE . $this->config->get('config_icon'))) {
			$this->document->addLink($server . 'image/' . $this->config->get('config_icon'), 'icon');
		}


               $data['quickview'] = $this->load->controller('extension/module/pavquickview');
            
		$data['title'] = $this->document->getTitle();

		$data['base'] = $server;
		$data['description'] = $this->document->getDescription();
		$data['keywords'] = $this->document->getKeywords();
		$data['links'] = $this->document->getLinks();
		$data['styles'] = $this->document->getStyles();
		$data['scripts'] = $this->document->getScripts('header');
		$data['lang'] = $this->language->get('code');
		$data['direction'] = $this->language->get('direction');

		$data['name'] = $this->config->get('config_name');

		if (is_file(DIR_IMAGE . $this->config->get('config_logo'))) {
			$data['logo'] = $server . 'image/' . $this->config->get('config_logo');
		} else {
			$data['logo'] = '';
		}

		$this->load->language('common/header');

				$data["wa_whatsapp_no"] = preg_replace('/[^A-Za-z0-9\-]/', '', $this->config->get('config_whatsapp_no'));
				$data["wa_whatsapp_btntext"] = $this->config->get('config_whatsapp_btntext');
				$data["wa_whatsapp_msg"] = $this->config->get('config_whatsapp_msg');
				$data["wa_whatsapp_ontop"] = $this->config->get('config_whatsapp_ontop');
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
			

		// Wishlist
		if ($this->customer->isLogged()) {
			$this->load->model('account/wishlist');

			$data['text_wishlist'] = sprintf($this->language->get('text_wishlist'), $this->model_account_wishlist->getTotalWishlist());
		} else {
			$data['text_wishlist'] = sprintf($this->language->get('text_wishlist'), (isset($this->session->data['wishlist']) ? count($this->session->data['wishlist']) : 0));
		}

		$data['text_logged'] = sprintf($this->language->get('text_logged'), $this->url->link('account/account', '', true), $this->customer->getFirstName(), $this->url->link('account/logout', '', true));
		

                $fb_settings = $this->model_setting_setting->getSetting('module_fb_chat');
                if(!empty($fb_settings)){
                $data['module_fb_js_sdk']  = html_entity_decode($fb_settings['module_fb_chat_sdk']);
                $data['module_fb_chat_status']  = html_entity_decode($fb_settings['module_fb_chat_status']);}
		$data['home'] = $this->url->link('common/home');
		$data['wishlist'] = $this->url->link('account/wishlist', '', true);
		$data['logged'] = $this->customer->isLogged();
		$data['account'] = $this->url->link('account/account', '', true);
		$data['register'] = $this->url->link('account/register', '', true);
		$data['login'] = $this->url->link('account/login', '', true);
		$data['order'] = $this->url->link('account/order', '', true);
		$data['transaction'] = $this->url->link('account/transaction', '', true);
		$data['download'] = $this->url->link('account/download', '', true);
		$data['logout'] = $this->url->link('account/logout', '', true);
		$data['shopping_cart'] = $this->url->link('checkout/cart');
		$data['checkout'] = $this->url->link('checkout/checkout', '', true);
		$data['contact'] = $this->url->link('information/contact');
		$data['telephone'] = $this->config->get('config_telephone');
		
		$data['language'] = $this->load->controller('common/language');
		$data['currency'] = $this->load->controller('common/currency');
		$data['search'] = $this->load->controller('common/search');
		$data['cart'] = $this->load->controller('common/cart');

			/***** Show browse seller link in header ******/
			$this->load->language('account/ptsregister');
			 $data['direction'] = $this->language->get('direction');
			 $data['module_purpletree_multivendor_browse_sellers'] = $this->config->get('module_purpletree_multivendor_browse_sellers');
			$data['text_browse_sellers'] = $this->language->get('text_browse_sellers');
			$data['browse_seller_link'] = $this->url->link('extension/account/purpletree_multivendor/sellers');
			
		$data['menu'] = $this->load->controller('common/menu');

$data['text_email'] = $this->language->get('text_email');
            $data['text_login'] = $this->language->get('text_login');
            $data['text_password'] = $this->language->get('text_password');
               
   
$data['order_tracking_module'] = $this->config->get('order_tracking_status');
$data['order_tracking_custom_html'] = html_entity_decode($this->config->get('order_tracking_custom_html'));
$data['order_tracking_module'] = $this->load->controller('extension/module/order_tracking');


		return $this->load->view('common/header', $data);
	}
}
