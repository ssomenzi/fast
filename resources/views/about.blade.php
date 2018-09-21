@extends('layouts.app')

@section('content')
<div class="flex items-center">
    <div class="md:w-1/2 md:mx-auto">
        <div class="rounded shadow">
            <div class="font-medium text-lg text-teal-darker bg-teal p-3 rounded-t">
                About
            </div>
            <div class="bg-white p-3 rounded-b">
                <center>
                    <example-component></example-component>
                </center>
            </div>
        </div>
    </div>
</div>
@endsection
