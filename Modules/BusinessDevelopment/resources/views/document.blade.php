@extends('admin')
@section('content')
   @livewire('admin.client.document',['document_type'=>$document_type])

@endsection
