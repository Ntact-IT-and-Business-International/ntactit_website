@extends('admin')
@section('content')
   @livewire('admin.human-resource.view-mor-on-employee',['employee_record_id'=>$employee_record_id])

@endsection
