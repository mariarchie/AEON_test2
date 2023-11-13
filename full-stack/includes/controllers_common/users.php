<?php

function controller_users() {

    $offset = isset($_GET['offset']) ? flt_input($_GET['offset']) : 0;
    $search = $_GET['search'] ?? '';

    $users = User::users_list(['mode' => 'page', 'offset' => $offset, 'search' => $search]);


    HTML::assign('users', $users['items']);
    HTML::assign('paginator', $users['paginator']);
    HTML::assign('search', $search);
    HTML::assign('offset', $offset);
    HTML::assign('section', 'users.html'); 
    HTML::assign('main_content', 'home.html'); 
}
