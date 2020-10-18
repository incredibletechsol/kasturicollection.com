<?php
class ControllerAccountPayselect extends Controller {
	public function index() {
		$this->load->language('account/payselect');

		$this->load->model('account/payselect');
		
		$this->document->setTitle($this->language->get('heading_title'));

		if ($this->request->server['REQUEST_METHOD'] == 'POST') {

          $link = $this->model_account_payselect->getSelectionLink($this->request->post['select_id']);

          $this->response->redirect($this->url->link($link));
        }

        $results = $this->model_account_payselect->getSelections();

		foreach ($results as $result) {
			$data['payselects'][] = array(
				'select_id' => $result['select_id'],
				'name'      => $result['name']
			);
		}

		$data['action'] = $this->url->link('account/payselect');
		
		if (isset($this->request->post['select_id'])) {
			$data['select_id'] = $this->request->post['select_id'];
		} else {
			$data['select_id'] = '';
		}

		$this->response->setOutput($this->load->view('account/payselect', $data));
	}
	
	public function page() {
		$this->load->language('account/payselect');

		$this->load->model('account/payselect');

		$this->document->setTitle($this->language->get('heading_title'));

		if ($this->request->server['REQUEST_METHOD'] == 'POST') {

          $link = $this->model_account_payselect->getSelectionLink($this->request->post['select_id']);

          $this->response->redirect($this->url->link($link));
        }

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_account'),
			'href' => $this->url->link('account/account', '', true)
		);

		$url = '';

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('account/payselect', $url, true)
		);

        $results = $this->model_account_payselect->getSelections();

		foreach ($results as $result) {
			$data['payselects'][] = array(
				'select_id' => $result['select_id'],
				'name'      => $result['name']
			);
		}

		$data['action'] = $this->url->link('account/payselect');

		if (isset($this->request->post['select_id'])) {
			$data['select_id'] = $this->request->post['select_id'];
		} else {
			$data['select_id'] = '';
		}

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('account/payselect_page', $data));
	}
}
