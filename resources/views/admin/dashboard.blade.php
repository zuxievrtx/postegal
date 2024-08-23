@extends(backpack_view('blank'))

@section('content')
    <div class="container-fluid">
        <h2 class="mb-4">{{ trans('backpack::base.dashboard') }}</h2>

        @if (backpack_user()->hasRole('Member'))
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <iframe src="{{ $spreadsheetUrl }}" frameborder="0" width="100%" height="600px"></iframe>
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
