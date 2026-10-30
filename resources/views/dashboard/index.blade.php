@extends('layouts.app')
@section('title', $title)
@section('content')
<h1 class="text-xl sm:text-2xl font-semibold mb-4">{{ $title }}</h1>

@if ($alerts->count() > 0)
    <div class="bg-red-600 text-white p-3 mb-4">
        {{ $alerts->count() }} overdue {{ \Illuminate\Support\Str::plural('vaccination', $alerts->count()) }} need follow-up.
    </div>
@elseif (count($outOfStock) > 0)
    <div class="bg-amber-500 text-white p-3 mb-4">
        Out of stock: {{ implode(', ', $outOfStock) }}
    </div>
@else
    <div class="bg-emerald-700 text-white p-3 mb-4">All clear</div>
@endif

<div class="grid gap-3 sm:gap-4 grid-cols-2 md:grid-cols-4 mb-6">
    @foreach ($stats as $stat)
        <x-stat-card :title="$stat['label']" :value="$stat['value']" />
    @endforeach
</div>

<div class="grid gap-6 lg:grid-cols-3">
    <div class="lg:col-span-2">
        <x-panel title="Upcoming schedule">
            <x-schedule-table :schedules="$schedules" />
        </x-panel>
    </div>

    <x-panel title="Needs follow-up">
        <ul class="divide-y divide-gray-200 text-sm">
            @forelse ($alerts as $alert)
                <li class="px-4 py-2">
                    <span class="font-semibold">{{ $alert->patient_name }}</span><br>
                    {{ $alert->vaccine }} · {{ $alert->scheduled_at->format('M d') }}
                </li>
            @empty
                <li class="px-4 py-3 text-gray-500">Nobody is overdue.</li>
            @endforelse
        </ul>
    </x-panel>
</div>
@endsection
