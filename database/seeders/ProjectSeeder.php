<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Project::truncate();

        $projects = [
            [
                'title' => 'Project 1',
                'description' => 'Nullam libero velit, ultricies id nisl vitae, gravida congue nulla. Pellentesque aliquam nisi a lectus euismod, eu malesuada lorem semper.',
                'image' => 'https://picsum.photos/200/300',
                'link' => '/'
            ],
            [
                'title' => 'Project 2',
                'description' => 'Quisque varius hendrerit tortor eget bibendum. Sed ultrices dui in porttitor varius. Phasellus ac quam at eros aliquet lobortis eget.',
                'image' => 'https://picsum.photos/200/300',
                'link' => '/'
            ],
            [
                'title' => 'Project 3',
                'description' => 'Fusce massa dui, blandit a porttitor et, viverra ut ipsum. Sed eget metus vitae ex pretium pretium ac ut tellus.',
                'image' => 'https://picsum.photos/200/300',
                'link' => '/'
            ],
        ];

        Project::insert($projects);
    }
    
}
