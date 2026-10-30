<?php

namespace Database\Seeders;

use App\Models\Vaccination;
use Illuminate\Database\Seeder;

class VaccinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rows = [
            ['patient_name' => 'Baby Andrea Villanueva', 'purok' => 'Purok 2', 'vaccine' => 'BCG',
             'dose' => '1st dose', 'scheduled_at' => '2026-11-04', 'status' => 'Scheduled'],
            ['patient_name' => 'Baby Miguel Tan', 'purok' => 'Purok 5', 'vaccine' => 'Pentavalent',
             'dose' => '2nd dose', 'scheduled_at' => '2026-10-12', 'status' => 'Done'],
            ['patient_name' => 'Baby Chloe Ramos', 'purok' => 'Purok 3', 'vaccine' => 'OPV',
             'dose' => '3rd dose', 'scheduled_at' => '2026-10-15', 'status' => 'Overdue'],
            ['patient_name' => 'Jomar Sumalinog', 'purok' => 'Purok 1', 'vaccine' => 'MMR',
             'dose' => '1st dose', 'scheduled_at' => '2026-11-10', 'status' => 'Scheduled'],
            ['patient_name' => 'Lolo Ernesto Bacalso', 'purok' => 'Purok 4', 'vaccine' => 'Anti-Flu',
             'dose' => 'Annual', 'scheduled_at' => '2026-10-20', 'status' => 'Overdue'],
            ['patient_name' => 'Mang Roberto Cabahug', 'purok' => 'Purok 2', 'vaccine' => 'Hepatitis B',
             'dose' => 'Booster', 'scheduled_at' => '2026-11-18', 'status' => 'Scheduled'],
            // birthday row (Jan 23)
            ['patient_name' => 'Baby Dexter Jr. Diaz', 'purok' => 'Purok Diaz', 'vaccine' => 'BCG',
             'dose' => '1st dose', 'scheduled_at' => '2026-01-23', 'status' => 'Done'],
        ];

        foreach ($rows as $row) {
            Vaccination::create($row);
        }
    }
}
