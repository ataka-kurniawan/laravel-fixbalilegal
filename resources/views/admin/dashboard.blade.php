@extends('admin.layouts.admin')

@section('title', 'Dashboard')

@section('content')
<x-alert-success />
    <h1 class="text-2xl font-bold text-blue-700 mb-6">Selamat Datang di Dashboard</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white p-6 rounded shadow">
            <h3 class="text-lg font-semibold text-blue-600">Total Rental</h3>
            <p class="text-3xl font-bold mt-2">{{$rents}}</p>
        </div>
        <div class="bg-white p-6 rounded shadow">
            <h3 class="text-lg font-semibold text-blue-600">Total Properti</h3>
            <p class="text-3xl font-bold mt-2">{{$properties}}</p>
        </div>
        <div class="bg-white p-6 rounded shadow">
            <h3 class="text-lg font-semibold text-blue-600">Total Artikel</h3>
            <p class="text-3xl font-bold mt-2">{{$articles}}</p>
        </div>
    </div>
@endsection
