<?php

namespace DTSIslam\App\Controllers;

use DTSIslam\App\Views\View;

class SubjectController
{
    function merge()
    {
        $title = __('Merge - DTS Islam');
        $description = __('Menu ini untuk menggabungkan DTS Islam dengan subjek-subjek di database');
        View::load('merge', ['title' => $title, 'description' => $description]);
    }

    function use()
    {
        $title = __('Use - DTS Islam');
        $description = __('Menu ini untuk menerapkan kosakata terkendali DTS Islam dengan data bibliografi saat ini');
        View::load('use', ['title' => $title, 'description' => $description]);
    }

    function drop()
    {
        $title = __('Drop - DTS Islam');
        $description = __('Menu ini untuk menghapus subjek-subjek DTS Islam dari database');
        View::load('drop', ['title' => $title, 'description' => $description]);
    }
}
