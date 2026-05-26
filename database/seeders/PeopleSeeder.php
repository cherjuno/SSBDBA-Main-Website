<?php

namespace Database\Seeders;

use App\Models\People;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        People::create([
            'name' => 'Dr. Ahmad Rizal',
            'degree' => 'M.T., Ph.D.',
            'position' => 'Kepala Laboratorium',
            'bio' => 'Ahli social simulation dan kebijakan publik. Mantan peneliti tamu di University of Groningen dengan fokus pada agent-based modeling untuk analisis kebijakan.',
            'email' => 'ahmad.rizal@ssbda.itb.ac.id',
            'photo' => 'ahmad-rizal.jpg',
            'order' => 1
        ]);

        People::create([
            'name' => 'Prof. Dr. Siti Nurhaliza',
            'degree' => 'Ph.D.',
            'position' => 'Koordinator Riset',
            'bio' => 'Spesialis big data analytics dan machine learning. Telah memublikasikan 25+ paper internasional dan memimpin 5 grant penelitian nasional.',
            'email' => 'siti.nurhaliza@ssbda.itb.ac.id',
            'photo' => 'siti-nurhaliza.jpg',
            'order' => 2
        ]);

        People::create([
            'name' => 'Ir. Budi Santoso, M.T.',
            'degree' => 'M.T.',
            'position' => 'Koordinator Operasi',
            'bio' => 'Mengelola infrastruktur komputasi lab dan koordinasi workshop/bootcamp. Berpengalaman dalam deployment Big Data infrastructure dan cloud computing.',
            'email' => 'budi.santoso@ssbda.itb.ac.id',
            'photo' => 'budi-santoso.jpg',
            'order' => 3
        ]);

        People::create([
            'name' => 'Dr. Rina Wijaya',
            'degree' => 'M.Sc., Ph.D.',
            'position' => 'Koordinator Student Engagement',
            'bio' => 'Mengelola program rekrutmen talenta dan engagement mahasiswa. Pembimbing utama untuk 15+ skripsi/tesis dengan topik data science dan social simulation.',
            'email' => 'rina.wijaya@ssbda.itb.ac.id',
            'photo' => 'rina-wijaya.jpg',
            'order' => 4
        ]);

        People::create([
            'name' => 'Hendra Kurniawan, S.T.',
            'degree' => 'S.T.',
            'position' => 'Research Assistant',
            'bio' => 'Asisten penelitian fokus pada pengembangan tools agent-based modeling dan data visualization. Lulusan terbaik dari program Big Data Bootcamp 2023.',
            'email' => 'hendra.kurniawan@ssbda.itb.ac.id',
            'photo' => 'hendra-kurniawan.jpg',
            'order' => 5
        ]);
    }
}
