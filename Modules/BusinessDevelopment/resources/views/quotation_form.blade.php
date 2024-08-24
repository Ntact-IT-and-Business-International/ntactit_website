@extends('admin')
@section('content')
   @livewire('admin.client.quotation-form',['client_id'=>$client_id])

@endsection
