@extends('ws-app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                {!! $category->getTranslate('description') !!}
            </div>
        </div>
    </div>

@endsection