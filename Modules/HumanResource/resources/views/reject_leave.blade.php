@extends('admin')
@section('content')
   @livewire('admin.human-resource.reject-leave',['LeaveId'=>$LeaveId])

@endsection
