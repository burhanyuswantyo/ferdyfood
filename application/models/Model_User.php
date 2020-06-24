<?php
class Model_User extends CI_Model
{
    public function login($username, $password)
    {
        $user = $this->db->get_where('tb_user', ['username' => $username])->row_array();

        if ($user) {
            if ($password == $user['password']) {
                $data = [
                    'id' => $user['id_user'],
                    'nama' => $user['nama'],
                    'role' => $user['role']
                ];
                $this->session->set_userdata($data);
                if ($user['role'] == 1) {
                    redirect('admin');
                } else {
                    redirect('kasir');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username atau password salah!</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username atau password salah!</div>');
            redirect('auth');
        }
    }
}
