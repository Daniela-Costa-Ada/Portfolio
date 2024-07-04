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
            'title' => 'Projeto Laravel',
            'description' => 'Descrição do Projeto Laravel',
            'url' => '',
        ]);

        Project::create([
            'title' => 'Projeto Portifolio',
            'description' => 'Descrição do Projeto Portfolio',
            'url' => 'https://github.com/Daniela-Costa-Ada/Portfolio',
        ]);

        Project::create([
            'title' => 'Projeto C',
            'description' => 'Descrição do Projeto C',
            'url' => 'https://www.projeto-c.com',
        ]);
        
        // Project::create([
        //     'title' => 'Projeto C',
        //     'description' => 'Descrição do Projeto C',
        //     'url' => 'https://www.projeto-c.com',
        // ]);

        // Project::create([
        //     'title' => 'Projeto C',
        //     'description' => 'Descrição do Projeto C',
        //     'url' => 'https://www.projeto-c.com',
        // ]);

        // Project::create([
        //     'title' => 'Projeto C',
        //     'description' => 'Descrição do Projeto C',
        //     'url' => 'https://www.projeto-c.com',
        // ]);

        // Project::create([
        //     'title' => 'Projeto C',
        //     'description' => 'Descrição do Projeto C',
        //     'url' => 'https://www.projeto-c.com',
        // ]);

        // Project::create([
        //     'title' => 'Projeto C',
        //     'description' => 'Descrição do Projeto C',
        //     'url' => 'https://www.projeto-c.com',
        // ]);

        // Project::create([
        //     'title' => 'Projeto C',
        //     'description' => 'Descrição do Projeto C',
        //     'url' => 'https://www.projeto-c.com',
        // ]);

        // Project::create([
        //     'title' => 'Projeto C',
        //     'description' => 'Descrição do Projeto C',
        //     'url' => 'https://www.projeto-c.com',
        // ]);

        // Project::create([
        //     'title' => 'Projeto C',
        //     'description' => 'Descrição do Projeto C',
        //     'url' => 'https://www.projeto-c.com',
        // ]);

        // Project::create([
        //     'title' => 'Projeto C',
        //     'description' => 'Descrição do Projeto C',
        //     'url' => 'https://www.projeto-c.com',
        // ]);

        // Project::create([
        //     'title' => 'Projeto C',
        //     'description' => 'Descrição do Projeto C',
        //     'url' => 'https://www.projeto-c.com',
        // ]);

        // Project::create([
        //     'title' => 'Projeto C',
        //     'description' => 'Descrição do Projeto C',
        //     'url' => 'https://www.projeto-c.com',
        // ]);

        // Project::create([
        //     'title' => 'Projeto C',
        //     'description' => 'Descrição do Projeto C',
        //     'url' => 'https://www.projeto-c.com',
        // ]);

        // Project::create([
        //     'title' => 'Projeto C',
        //     'description' => 'Descrição do Projeto C',
        //     'url' => 'https://www.projeto-c.com',
        // ]);

        // Project::create([
        //     'title' => 'Projeto C',
        //     'description' => 'Descrição do Projeto C',
        //     'url' => 'https://www.projeto-c.com',
        // ]);

        // Project::create([
        //     'title' => 'Projeto C',
        //     'description' => 'Descrição do Projeto C',
        //     'url' => 'https://www.projeto-c.com',
        // ]);

        $this->command->info('Projetos inseridos com sucesso!');
    }
}
