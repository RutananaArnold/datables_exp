@extends('layouts.app')
 
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Add new Price</div>
            <div class="card-body">
            <form action="{{ url('/addFunction') }}" method="post">
            @csrf
            <!-- currency -->
            <div class="row mb-3">
                <label for="currency" class="col-md-4 col-form-label text-md-end">{{ __('currency') }}</label>

                <div class="col-md-6">
                    <input id="currency" type="text" class="form-control @error('currency') is-invalid @enderror" name="currency" value="{{ old('currency') }}" required autocomplete="currency" autofocus>

                    @error('currency')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <!-- quantity -->
            <div class="row mb-3">
                <label for="quantity" class="col-md-4 col-form-label text-md-end">{{ __('quantity') }}</label>

                <div class="col-md-6">
                    <input id="quantity" type="quantity" class="form-control @error('quantity') is-invalid @enderror" name="quantity" value="{{ old('quantity') }}" required autocomplete="quantity">

                    @error('quantity')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <!-- amount -->
            <div class="row mb-3">
                <label for="amount" class="col-md-4 col-form-label text-md-end">{{ __('amount') }}</label>

                <div class="col-md-6">
                    <input id="amount" type="text" class="form-control @error('amount') is-invalid @enderror" name="amount" value="{{ old('amount') }}" required autocomplete="amount" autofocus>

                    @error('amount')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>


            <!-- button -->
            <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Add') }}
                                </button>
                            </div>
                        </div>
            </form>
            </div>
        </div>
    </div>
@endsection