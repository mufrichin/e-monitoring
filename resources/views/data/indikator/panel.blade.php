@extends('panel.app')

@section('menu-2','active')

@section('title','Data Indikator Kinerja')

@section('content')

<div class="content">
    <div class="container-fluid">
            <div class="row">


                    <div class="col-lg-2 col-sm-6">
                            <a href="{{url ("data/indikator")}}">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                        <div class="icon-big icon-warning text-center">
                                            <i class="ti-list"></i>
                                        </div>
                                            <p align="center">DAFTAR</p>
                                        </div>
                                </div>
                            </div>
                        </a>
                    </div>
                 
                    <div class="col-lg-2 col-sm-6">
                        <a href="{{url ("data/indikator/input")}}">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                        <div class="icon-big icon-danger text-center">
                                            <i class="ti-plus"></i>
                                        </div>
                                            <p align="center">INPUT</p>
                                        </div>
                                </div>
                            </div>
                        </a>
                        </div>
                 
                </div>
              
            </div>
            <hr>
            @yield ('indikator')
        </div>

@endsection

