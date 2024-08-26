@extends('admin')
@section('content')
   @livewire('admin.finance.view-more-on-requisition',['requisition_id'=>$requisition_id])

@endsection
