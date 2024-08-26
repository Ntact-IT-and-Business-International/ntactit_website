@extends('admin')
@section('content')
   @livewire('admin.finance.reject-requisition',['requisition_id'=>$requisition_id])

@endsection
