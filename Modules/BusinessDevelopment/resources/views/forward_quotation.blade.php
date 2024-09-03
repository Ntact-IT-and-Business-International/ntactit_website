@extends('admin')
@section('content')
   @livewire('admin.client.forward-quotation', ['client_id'=>$client_id])

@endsection
