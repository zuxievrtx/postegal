@if (!backpack_user()->hasRole('Member'))
{{-- Menu items untuk non-member users --}}
<x-backpack::menu-item title="Users" icon="la la-user" :link="backpack_url('user')" />
<x-backpack::menu-item title="Roles" icon="la la-group" :link="backpack_url('role')" />
<x-backpack::menu-item title="Permissions" icon="la la-key" :link="backpack_url('permission')" />
@endif

{{-- Menu item Dashboard yang selalu ditampilkan --}}
<x-backpack::menu-item title="Dashboard - Data" icon="la la-dashboard" :link="backpack_url('dashboard')" />
<x-backpack::menu-item title="Kinerja" icon="la-info-circle" :link="backpack_url('index.kinerja')" />