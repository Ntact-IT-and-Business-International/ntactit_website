@extends('admin')
@section('content')
   @livewire('admin.account-setting.staff-permissions',['employee_id'=>$employee_id])

@endsection
