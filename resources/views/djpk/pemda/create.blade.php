@extends('app')
<!-- end content -->
@push('styles') @endpush
<!-- end content -->

@section('pagetitle')
<h1>Data Master Pemda </h1> @endsection

<!-- end content -->
@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
        <div class="panel-title">Pembuatan Data Baru</div>
    </div>
    <div class="panel-body">
        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <button class="close" data-dismiss="alert"></button>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <!-- start form -->
        {!! Form::open(['url'=>'djpk/pemda']) !!}
        <div class="form-group form-group-default required ">
            <label>Prov</label>
            {!! Form::text('prov',old('prov'),['class'=>'form-control']) !!}
        </div>
        <div class="form-group form-group-default required ">
            <label>Kab</label>
            {!! Form::text('kab',old('kab'),['class'=>'form-control']) !!}
        </div>
        <div class="form-group form-group-default required ">
            <label>nama</label>
            {!! Form::text('nama',old('nama'),['class'=>'form-control']) !!}
        </div>
        <div class="form-group form-group-default required ">
            <label>ID PEMDA</label>
            {!! Form::text('idpemda',old('idpemda'),['class'=>'form-control']) !!}
        </div>
        <button class="btn btn-success" type="submit">Simpan Data</button>
        <a href="{{url('djpk/pemda')}}" class="btn btn-default"><i class="pg-close"></i> batal</a>
        <!-- -->
        {!! Form::close() !!}
    </div>
</div>
@endsection
<!-- end content -->

@push('scripts') @endpush
