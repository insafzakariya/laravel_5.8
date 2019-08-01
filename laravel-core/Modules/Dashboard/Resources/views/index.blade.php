@extends('layouts.master')
@section('content')
    @component('component.page-header',['page_header' => 'User Management','description'=>'new user you can add here'])
    <ul class="breadcrumb-title">
        <li class="breadcrumb-item">
            <a href="index-2.html"> <i class="feather icon-home"></i> </a>
        </li>
        <li class="breadcrumb-item"><a href="#!">Form Components</a>
        </li>
        <li class="breadcrumb-item"><a href="#!">Form Components</a>
        </li>
    </ul>
    @endcomponent
@endsection