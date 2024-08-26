@extends('admin')
@section('content')
   @livewire('admin.finance.forward-requisition',['requisition_id'=>$requisition_id])

@endsection
