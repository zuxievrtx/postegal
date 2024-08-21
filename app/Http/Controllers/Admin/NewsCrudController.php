<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\NewsRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Storage;

class NewsCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        CRUD::setModel(\App\Models\News::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/news');
        CRUD::setEntityNameStrings('news', 'news');
    }

    protected function setupListOperation()
    {
        CRUD::column('title');
        CRUD::column('date');
        CRUD::column('url');
    }

    protected function setupCreateOperation()
    {
        CRUD::setValidation(NewsRequest::class);

        CRUD::field('title');
        CRUD::field('content')->type('text');
        CRUD::field('image')
            ->type('upload')
            ->upload(true)
            ->disk('public')
            ->uploadFileNameFieldName('image_filename') // Tambahkan ini
            ->prefix('news/'); // Tambahkan ini untuk menyimpan gambar dalam subfolder
        CRUD::field('date')->type('date');
        CRUD::field('url')->type('url');
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }

    // Fungsi kustom untuk edit
    public function edit($id)
    {
        $this->crud->hasAccessOrFail('update');

        // Dapatkan entri yang akan diedit
        $entry = $this->crud->getEntry($id);

        // Persiapkan data untuk form edit
        $this->data['entry'] = $entry;
        $this->data['crud'] = $this->crud;
        $this->data['saveAction'] = $this->crud->getSaveAction();
        $this->data['fields'] = $this->crud->getUpdateFields();
        $this->data['title'] = $this->crud->getTitle() ?? 'Edit ' . $this->crud->entity_name;

        // Tampilkan form edit
        return view('crud::edit', $this->data);
    }

    // Fungsi kustom untuk update
    public function update()
    {
        $this->crud->hasAccessOrFail('update');

        // Validasi input
        $request = $this->crud->validateRequest();

        $item = $this->crud->update(
            $request->input($this->crud->model->getKeyName()),
            $request->except(['save_action', '_token', '_method', 'current_tab'])
        );


        // Simpan tindakan yang dipilih
        $this->crud->setSaveAction();

        return $this->crud->performSaveAction($item->getKey());
    }

    // Fungsi kustom untuk delete
    public function destroy($id)
    {
        $this->crud->hasAccessOrFail('delete');

        // Dapatkan entri yang akan dihapus
        $entry = $this->crud->getEntry($id);

        // Hapus entri dari database
        $this->crud->delete($id);

        // Hapus gambar terkait jika ada
        if ($entry->image) {
            Storage::disk('public')->delete($entry->image);
        }

        return response()->json(['success' => true]);
    }
}
