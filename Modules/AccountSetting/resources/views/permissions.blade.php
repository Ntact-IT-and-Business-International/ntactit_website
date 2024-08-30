@extends('admin')
@section('content')
   @livewire('admin.account-setting.permissions',['employee_id'=>$employee_id])

@endsection
