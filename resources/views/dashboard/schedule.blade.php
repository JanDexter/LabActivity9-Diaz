@extends('layouts.app')
@section('title', $title)
@section('content')
<h1 class="text-xl sm:text-2xl font-semibold mb-4">{{ $title }}</h1>

<x-panel title="All vaccinations">
    <x-schedule-table :schedules="$schedules" />
</x-panel>
@endsection
