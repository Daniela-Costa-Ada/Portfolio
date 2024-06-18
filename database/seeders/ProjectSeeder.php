<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Project::truncate();
        
        Project::create([
            'title' => 'Projeto A',
            'description' => 'Descrição do Projeto A',
            'url' => 'https://www.projeto-a.com',
        ]);

        Project::create([
            'title' => 'Projeto B',
            'description' => 'Descrição do Projeto B',
            'url' => 'https://www.projeto-b.com',
        ]);

        Project::create([
            'title' => 'Projeto C',
            'description' => 'Descrição do Projeto C',
            'url' => 'https://www.projeto-c.com',
        ]);

        $this->command->info('Projetos inseridos com sucesso!');
    }
}
