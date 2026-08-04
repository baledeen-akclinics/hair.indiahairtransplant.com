<?php

namespace App\Controllers;

use CodeIgniter\HTTP\ResponseInterface;
use Config\Services;

class ContactController extends BaseController
{

    // ==========================================
    // PROCEDURE CATEGORY API
    // ==========================================

 public function procedureCategories()
    {
        $keyword = trim((string) $this->request->getGet('q'));
        $baseUrl = rtrim((string) env('api.procedureURL', 'https://crm.akclinics.com/book-appointment'), '/');
        $url     = $baseUrl . '/procedure-categories';

        if ($keyword !== '') {
            $url .= '?q=' . rawurlencode($keyword);
        }

        try {
            $response = Services::curlrequest()->get($url, [
                'headers' => ['Accept' => 'application/json'],
                'http_errors' => false,
                'timeout' => 10,
            ]);

            $payload = json_decode($response->getBody(), true);
            $items   = [];

            foreach (($payload['results'] ?? []) as $item) {
                $name = trim((string) ($item['text'] ?? $item['name'] ?? ''));

                if ($name !== '') {
                    $items[] = ['name' => $name];
                }
            }

            return $this->response->setJSON([
                'status' => true,
                'data'   => ['procedure_categories' => $items],
            ]);
        } catch (\Throwable $e) {
            $this->ihtLog('PROCEDURE LIST FAILED: ' . $e->getMessage());

            return $this->response->setStatusCode(500)->setJSON([
                'status'  => false,
                'message' => 'Unable to load procedures right now.',
                'data'    => ['procedure_categories' => []],
            ]);
        }
    }



    // ==========================================
    // FORM SUBMIT
    // ==========================================

    public function submit()
    {

        $data = $this->request->getJSON(true);

        if (!is_array($data)) {

            $data = $this->request->getPost();

        }

        $rules = [

            'name' => [
                'label' => 'Name',
                'rules' => 'required|min_length[3]|max_length[100]|regex_match[/^[A-Za-z ]+$/]'
            ],

            'email' => [
                'label' => 'Email',
                'rules' => 'required|valid_email'
            ],

            'phone' => [
                'label' => 'Phone',
                'rules' => 'required|regex_match[/^[6-9][0-9]{9}$/]'
            ],

            'city' => [
                'label' => 'City',
                'rules' => 'required'
            ],

            'concern' => [
                'label' => 'Procedure',
                'rules' => 'required'
            ],

            'source_url' => 'required',
            'source_id' => 'required',
            'campaign_id' => 'required',
            'campaign_name' => 'required',
            'form_id' => 'required',
            'form_name' => 'required'

        ];

        if (!$this->validateData($data, $rules)) {

            return $this->response
                ->setStatusCode(ResponseInterface::HTTP_UNPROCESSABLE_ENTITY)
                ->setJSON([

                    'status' => false,
                    'message' => 'Please fill all required fields.',

                    'errors' => $this->validator->getErrors()

                ]);

        }

        $message = trim($data['message'] ?? '');

        $description = $message;

        if (!empty($data['concern'])) {

            $description .= ' | Procedure : ' . $data['concern'];

        }

        $crmPayload = [

            'name' => $data['name'],
            'email' => $data['email'],

            'mobile_country_code' => '91',
            'mobile' => $data['phone'],

            'city' => $data['city'],

            'source_id' => $data['source_id'],
            'source_url' => $data['source_url'],

            'campaign_id' => $data['campaign_id'],
            'campaign_name' => $data['campaign_name'],

            'ad_id' => $data['ad_id'] ?? '',
            'ad_name' => $data['ad_name'] ?? '',

            'form_id' => $data['form_id'],
            'form_name' => $data['form_name'],

            'concern' => $data['concern'],
            'description' => $description

        ];

        $crm = $this->forwardToCrm($crmPayload);

        if (!$crm) {

            return $this->response->setJSON([

                'status' => false,
                'message' => 'Something went wrong.'

            ]);

        }

        return $this->response->setJSON([

            'status' => true,
            'message' => 'Thank you. Our team will contact you shortly.'

        ]);

    }

        private function forwardToCrm(array $payload): bool
    {
        $apiBase = trim((string) env('api.baseURL', ''));

        if ($apiBase === '') {
            return false;
        }

        try {

            $url = rtrim($apiBase, '/') . '/campaign-leads';

            $response = Services::curlrequest()->post($url, [

                'headers' => [

                    'Accept' => 'application/json',
                    'Content-Type' => 'application/json'

                ],

                'json' => $payload,

                'http_errors' => false,
                'timeout' => 15

            ]);

            $body = json_decode($response->getBody(), true);

            $status = (int) $response->getStatusCode();

            if (

                $status >= 200 &&
                $status < 300 &&
                ($body['status'] ?? false)

            ) {

                return true;

            }

            return false;

        } catch (\Throwable $e) {

            return false;

        }

    }

}