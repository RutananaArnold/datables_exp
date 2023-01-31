@extends('layouts.app')

@section('content')
<div class="container">
            <div>
                <form action="{{ url('/addPrice') }}" method="post">
                @csrf
                <button type="submit"  class="btn btn-primary">Add Price</button>
                </form>
              
            </div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
    
            
            <div class="card">
             <div class="card-header"> Data Tables</div>
             <div class="card-body">
               <!-- datatables content -->
               <div class="card-header">Manage Prices</div>
                <div class="card-body">
                    {{ $dataTable->table() }}
                </div>
             </div>
            </div>

        </div>
    </div>
</div>
@endsection

@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush




