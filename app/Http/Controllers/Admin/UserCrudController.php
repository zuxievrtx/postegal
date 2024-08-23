<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UserRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

/**
 * Class UserCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class UserCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */

    use CrudTrait;

    public function setup()
    {
        CRUD::setModel(\App\Models\User::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/user');
        CRUD::setEntityNameStrings('user', 'users');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::setFromDb(); // set columns from db columns.

        // Add columns to display roles and permissions
        CRUD::addColumn([
            'name'  => 'roles',
            'label' => 'Roles',
            'type'  => 'select_multiple',
            'entity' => 'roles',
            'attribute' => 'name',
            'model' => Role::class,
        ]);

        CRUD::addColumn([
            'name'  => 'permissions',
            'label' => 'Permissions',
            'type'  => 'select_multiple',
            'entity' => 'permissions',
            'attribute' => 'name',
            'model' => Permission::class,
        ]);
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setFromDb(); // set fields from db columns.

        // Add role field
        CRUD::addField([
            'name'  => 'roles',
            'label' => 'Roles',
            'type'  => 'select_multiple',
            'entity' => 'roles',
            'attribute' => 'name',
            'model' => Role::class,
            'pivot' => true,
        ]);

        // Add permission field
        CRUD::addField([
            'name'  => 'permissions',
            'label' => 'Permissions',
            'type'  => 'select_multiple',
            'entity' => 'permissions',
            'attribute' => 'name',
            'model' => Permission::class,
            'pivot' => true,
        ]);
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
