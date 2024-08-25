@extends(backpack_view('blank'))

@section('content')
<div class="container-fluid">
    <h2 class="mb-4">{{ trans('backpack::base.dashboard') }}</h2>

    @if (backpack_user()->hasRole('Member'))
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div style="position:relative; padding-bottom:56.25%; height:0; overflow:hidden; max-width:100%; background:#f0f0f0;">
                        <iframe src="{{ $spreadsheetUrl }}" frameborder="0" style="position:absolute; top:0; left:0; width:100%; height:100%;" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @else
    {{-- Tampilan dashboard untuk role non-member --}}
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <p>Selamat datang di dashboard admin.</p>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
@endsection