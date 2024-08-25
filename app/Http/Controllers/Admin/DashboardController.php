<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\AdminController;

class DashboardController extends AdminController
{
    public function dashboard()
    {
        $this->data['title'] = trans('backpack::base.dashboard');
        $this->data['breadcrumbs'] = [
            trans('backpack::crud.admin') => backpack_url('dashboard'),
            trans('backpack::base.dashboard') => false,
        ];

        // URL Google Spreadsheet yang ingin Anda tampilkan
        $spreadsheetUrl = "https://docs.google.com/spreadsheets/d/1E_fA3kW_TmK8aYpdRGqWPdk7xiABrJEjZMcpznuaNRg/pubhtml?widget=true&amp;headers=false";

        // Menyimpan URL spreadsheet untuk digunakan di view
        $this->data['spreadsheetUrl'] = $spreadsheetUrl;

        return view('admin.dashboard', $this->data);
    }
}
