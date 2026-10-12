<?php
class AuthController extends Controller
{
    public function register()
    {
        $this->call->library('auth');

        if ($this->io->method() == 'post') {
            $username = $this->io->post('username');
            $password = $this->io->post('password');
            $role = strtolower((string) ($this->io->post('role') ?? 'user'));
            $role = in_array($role, ['user', 'admin'], true) ? $role : 'user';

            if ($this->auth->register($username, $password, $role)) {
                redirect('auth/login');
            }
        }

        $this->call->view('auth/register');
    }

    public function login()
    {
        $this->call->library('auth');

        if ($this->io->method() == 'post') {
            $username = $this->io->post('username');
            $password = $this->io->post('password');

            if ($this->auth->login($username, $password)) {
                redirect('products');
            } else {
                echo 'Login failed!';
            }
        }

        $this->call->view('auth/login');
    }

    public function dashboard()
    {
        $this->call->library(['auth', 'session']);

        if (!$this->auth->is_logged_in()) {
            redirect('auth/login');
        }

        if (!$this->auth->has_role('admin')) {
            echo 'Access denied!';
            exit;
        }

        $this->call->view('auth/dashboard', ['session' => $this->session]);
    }

    public function logout()
    {
        $this->call->library('auth');
        $this->auth->logout();
        redirect('auth/login');
    }
}
?>