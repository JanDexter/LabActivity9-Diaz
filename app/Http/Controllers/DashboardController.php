<?php

namespace App\Http\Controllers;

use App\Models\Vaccination;

class DashboardController extends Controller
{
    public function index()
    {
        $title = 'Bakuna Tracker – Purok Diaz';
        $schedules = Vaccination::orderBy('scheduled_at')->get();
        $stats = [
            ['label' => 'Total', 'value' => $schedules->count()],
            ['label' => 'Done', 'value' => $schedules->where('status', 'Done')->count()],
            ['label' => 'Scheduled', 'value' => $schedules->where('status', 'Scheduled')->count()],
            ['label' => 'Overdue', 'value' => $schedules->where('status', 'Overdue')->count()],
        ];
        $alerts = $schedules->where('status', 'Overdue');
        $outOfStock = ['Anti-Flu'];

        return view('dashboard.index', compact('title', 'stats', 'schedules', 'alerts', 'outOfStock'));
    }

    public function schedule()
    {
        $title = 'Vaccine Schedule';
        $schedules = Vaccination::orderBy('scheduled_at')->get();

        return view('dashboard.schedule', compact('title', 'schedules'));
    }
}
