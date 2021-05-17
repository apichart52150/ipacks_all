@extends('layouts.main')

@section('page-title')
    <div class="row">
        <div class="col-12 m-0">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><i class="fas fa-home"></i> <a href="{{ url('/isac/listening') }}">Home</a></li>
                        <!-- <li class="breadcrumb-item"><a href="#">Topic </a></li> -->
                        <li class="breadcrumb-item active">iSAC Listening</li>
                    </ol>
                </div>
                <h4 class="page-title">iSAC Listening</h4>
            </div>
        </div>
    </div>
@stop


@section('content')
<div class="row">
    @foreach ($sub_menu as $sub_menu)
        <div class="col-lg-4">
            <div class="card card-body border-top border-{{$color}} border border-1">
                <h4 class="card-title text-center">{{$sub_menu->sub_menu_name}}</h4>
                <a href="audio/{{$sub_menu->sub_menu_type}}" class="btn btn-{{$color}}">Start Listen</a>
            </div>
        </div>
    @endforeach
</div>
<!-- end row -->
@endsection