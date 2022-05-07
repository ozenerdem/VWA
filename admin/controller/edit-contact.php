<?php

$id = get('id');
if (!$id){
    header('Location:' . admin_url('users'));
    exit;
}

$row = $db->from('contact')
    ->where('contact_id', $id)
    ->first();
if (!$row){
    header('Location:' . admin_url('contact'));
    exit;
}

if($row['contact_read'] == 0){
    $db->update('contact')
        ->where('contact_id', $id)
        ->set([
           'contact_read' => 1,
           'contact_read_date' => date('Y-m-d H:i:s')
        ]);
}

if (post('submit')){

    //if ($data = form_control('user_email')){
    if ($data = form_control()){

        $data['user_url'] = permalink($data['user_name']);

        $query = $db->update('users')
            ->where('user_id', $id)
            ->set($data);

        if ($query){
            header('Location:' . admin_url('users'));
        } else {
            $error = 'Bir sorun oluştu.';
        }

    } else {
        $error = 'Eksik alanlar var, lütfen kontrol edin.';
    }

}

require admin_view('edit-contact');