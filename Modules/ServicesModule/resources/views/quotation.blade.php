@extends('template')

@section('content')
@livewire('front.quotation',['quotationId'=>$quotationId])
@endsection
