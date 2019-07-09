@extends('sp_mawdoo3_laravel::templates.index')

@section('content');
<div class="col-12">
    <form class="needs-validation" novalidate method="GET" action="/getResult">
        @csrf
        <div class="input-group">
            <input type="text" maxlength="250" name="search" value="{{ old('search') }}" class="form-control" id="search" placeholder="Search" aria-describedby="inputGroupPrepend2" required="required">
            <div class="input-group-append">
                <button class="input-group-text" type="submit" id="inputGroupPrepend2">Search</button>
            </div>
        </div>
        @error('search')
        <div class="alert alert-danger mt-2">{{ $message }}</div>
        @endif
    </form>
</div>

@if(isset($data) &&  count($data))

@include('sp_mawdoo3_laravel::search.searchResult')

@endif

@endsection