@props(['schedules'])

<table class="w-full text-xs sm:text-sm text-left">
    <thead class="text-gray-600 border-b border-gray-300">
        <tr>
            <th class="hidden sm:table-cell px-2 sm:px-4 py-2">#</th>
            <th class="px-2 sm:px-4 py-2">Patient</th>
            <th class="hidden md:table-cell px-2 sm:px-4 py-2">Purok</th>
            <th class="px-2 sm:px-4 py-2">Vaccine</th>
            <th class="hidden sm:table-cell px-2 sm:px-4 py-2">Dose</th>
            <th class="px-2 sm:px-4 py-2">Date</th>
            <th class="px-2 sm:px-4 py-2">Status</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($schedules as $row)
            <tr class="{{ $loop->odd ? 'bg-white' : 'bg-gray-50' }} {{ $loop->first ? 'font-semibold' : '' }}">
                <td class="hidden sm:table-cell px-2 sm:px-4 py-2">{{ $loop->iteration }}</td>
                <td class="px-2 sm:px-4 py-2">
                    {{ $row->patient_name }}
                    <span class="block md:hidden text-xs font-normal text-gray-500">{{ $row->purok }}</span>
                </td>
                <td class="hidden md:table-cell px-2 sm:px-4 py-2">{{ $row->purok }}</td>
                <td class="px-2 sm:px-4 py-2">{{ $row->vaccine }}</td>
                <td class="hidden sm:table-cell px-2 sm:px-4 py-2">{{ $row->dose }}</td>
                <td class="px-2 sm:px-4 py-2 whitespace-nowrap">{{ $row->scheduled_at->format('M d, Y') }}</td>
                <td class="px-2 sm:px-4 py-2">
                    @unless ($row->status !== 'Overdue')
                        <span class="bg-red-600 text-white px-2 py-0.5 text-xs">Overdue</span>
                    @endunless
                    @if ($row->status === 'Done')
                        <span class="bg-emerald-700 text-white px-2 py-0.5 text-xs">Done</span>
                    @elseif ($row->status === 'Scheduled')
                        <span class="bg-gray-200 px-2 py-0.5 text-xs">Scheduled</span>
                    @endif
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="7" class="px-4 py-6 text-center text-gray-500">No schedules yet.</td>
            </tr>
        @endforelse
    </tbody>
</table>
