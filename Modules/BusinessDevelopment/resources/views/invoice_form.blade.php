@extends('admin')
@section('content')
   @livewire('admin.client.invoice-form',['client_id'=>$client_id])

@endsection
