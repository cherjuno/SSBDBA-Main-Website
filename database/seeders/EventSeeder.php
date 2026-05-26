<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Upcoming Events
        Event::create([
            'title' => 'Big Data Analytics Workshop 2025',
            'description' => 'Workshop intensif tentang analisis big data menggunakan Python, Apache Spark, dan machine learning. Peserta akan belajar dari case study nyata dari industri.',
            'date' => Carbon::now()->addMonths(1)->setHour(14)->setMinute(0),
            'type' => 'upcoming',
            'link' => 'https://forms.google.com/register-workshop',
            'image' => 'workshop-big-data.jpg'
        ]);

        Event::create([
            'title' => 'Seminar: Social Simulation for Policy Making',
            'description' => 'Pembicara tamu dari University of Groningen berbagi pengalaman menggunakan agent-based modeling untuk kebijakan publik.',
            'date' => Carbon::now()->addWeeks(3)->setHour(10)->setMinute(0),
            'type' => 'upcoming',
            'link' => 'https://zoom.us/meeting/ssbda-seminar',
            'image' => 'seminar-social-sim.jpg'
        ]);

        // Past Events
        Event::create([
            'title' => 'Data Detective Challenge 2024',
            'description' => 'Kompetisi analisis data nasional yang diikuti oleh 150+ mahasiswa dari 20 universitas. Tim pemenang menerima beasiswa penelitian.',
            'date' => Carbon::now()->subMonths(6)->setHour(8)->setMinute(0),
            'type' => 'past',
            'link' => 'https://drive.google.com/folder/data-detective-2024-results',
            'image' => 'data-detective-2024.jpg'
        ]);

        Event::create([
            'title' => 'International Conference on Computational Social Science',
            'description' => 'Konferensi internasional yang menghadirkan peneliti dari 15 negara berbagi temuan terbaru dalam simulasi sosial dan analitik data.',
            'date' => Carbon::now()->subMonths(10)->setHour(9)->setMinute(0),
            'type' => 'past',
            'link' => 'https://drive.google.com/folder/iccss-2024-materials',
            'image' => 'conference-css.jpg'
        ]);
    }
}
