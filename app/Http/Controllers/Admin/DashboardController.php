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

        $spreadsheetUrl = "https://docs.google.com/spreadsheets/d/1E_fA3kW_TmK8aYpdRGqWPdk7xiABrJEjZMcpznuaNRg/pubhtml?widget=true&amp;headers=false";

        return view('admin.dashboard', $this->data, compact('spreadsheetUrl'));
    }
}
