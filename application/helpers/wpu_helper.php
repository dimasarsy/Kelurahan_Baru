<?php 

function is_admin()
{
    $ci = get_instance();
    if (!$ci->session->userdata('email')) {
        redirect('auth');
    } else {
        $role_id = $ci->session->userdata('role_id');

        if ($role_id ==  2) {
            redirect('auth/blocked');
        }
    }
}
function is_user()
{
    $ci = get_instance();
    if (!$ci->session->userdata('email')) {
        redirect('auth');
    } else {
        $role_id = $ci->session->userdata('role_id');
            
        if ($role_id ==  1) {
            redirect('auth/blocked');
        }    
    }
}

// function is_user_full()
// {
//     $ci = get_instance();
//     if (!$ci->session->userdata('email')) {
//         redirect('auth');
//     } else {
//         $status = $ci->session->userdata('status');
            
//         if ($status == 0) {
//             redirect('user/profil');
//         }    
//     }
// }


function check_access($role_id, $menu_id)
{
    $ci = get_instance();

    $ci->db->where('role_id', $role_id);
    $ci->db->where('menu_id', $menu_id);
    $result = $ci->db->get('user_access_menu');

    if ($result->num_rows() > 0) {
        return "checked='checked'";
    }
}