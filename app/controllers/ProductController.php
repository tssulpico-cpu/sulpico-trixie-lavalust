<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class ProductController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    private function require_admin()
    {
        $this->call->library('auth');

        if (!$this->auth->is_logged_in()) {
            redirect('auth/login');
        }

        if (!$this->auth->has_role('admin')) {
            show_error(
                '403 Forbidden Error',
                'The action you have requested is not allowed.',
                'error_general',
                403
            );
        }
    }

    public function index()
    {
        $this->call->library('auth');

        if (!$this->auth->is_logged_in()) {
            redirect('auth/login');
        }

        $this->call->database();
        $this->call->model('ProductModel');

        $data = [
            'products' => $this->ProductModel->all(),
            'is_admin' => $this->auth->has_role('admin'),
        ];

        $this->call->view('products', $data);
    }

    public function create()
    {
        $this->require_admin();

        if ($this->io->method() === 'post') {

            $this->call->database();
            $this->call->model('ProductModel');

            $product_data = [
                'product_name' => trim((string) $this->io->post('product_name')),
                'description'  => trim((string) $this->io->post('description')),
                'price'        => (float) $this->io->post('price'),
                'quantity'     => (int) $this->io->post('quantity'),
            ];

            $this->ProductModel->insert($product_data);

            redirect('products');
        }

        $this->index();
    }

    public function update($id = null)
    {
        $this->require_admin();

        $this->call->database();
        $this->call->model('ProductModel');

        if ($this->io->method() === 'post') {

            $product_data = [
                'product_name' => trim((string) $this->io->post('product_name')),
                'description'  => trim((string) $this->io->post('description')),
                'price'        => (float) $this->io->post('price'),
                'quantity'     => (int) $this->io->post('quantity'),
            ];

            $this->ProductModel->update((int) $id, $product_data);

            redirect('products');
        }

        $product = $this->ProductModel->find((int) $id);

        $this->call->view('products', [
            'products' => $this->ProductModel->all(),
            'product'  => $product,
            'is_admin' => true,
        ]);
    }

    public function delete($id)
    {
        $this->require_admin();

        $this->call->database();
        $this->call->model('ProductModel');

        $this->ProductModel->delete((int) $id);

        redirect('products');
    }
}

?>