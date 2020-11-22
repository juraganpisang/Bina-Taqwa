<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{

    public function check_login($data)
    {
        // cari user berdasarkan username
        $this->db->where('username', $data["username"]);
        $user = $this->db->get('user')->row();

        // jika user terdaftar
        if ($user) {
            // periksa password-nya
            $isPasswordTrue = password_verify($data["password"], $user->password);
            // periksa role-nya
            $isAdmin = $user->role == "1";

            // jika password benar dan dia admin
            if ($isPasswordTrue && $isAdmin) {
                // login sukses yay!
                $newdata = array(
                    'id_user' => $user->id_user,
                    'username'  => $user->username,
                    'role'     => $user->role,
                    'logged_in' => TRUE
                );

                $this->session->set_userdata($newdata);
                return true;
            } else {
                return false;
            }
        }
    }

    public function content($category)
    {
        $this->db->select('*');
        $this->db->from('content');
        $this->db->join('category', 'content.category_id = category.id_category');
        $this->db->where('id_category', $category);
        $result = $this->db->get();

        return $result->row_array();
    }

    public function edit_content($data)
    {
        $this->db->where('id_content', $data['id_content']);
        $this->db->update('content', $data);
    }
}
