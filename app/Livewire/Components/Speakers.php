<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Speakers extends Component
{
    public array $speakers = [];

    public function mount(): void
    {
        $this->speakers = [
            [
                'initials' => 'AS',
                'name' => 'Ana Silva',
                'role' => 'Chefe de Operações',
                'org' => 'Organização',
                'topic' => 'Reforço da competência operacional através de práticas modernas de segurança.',
                'photo' => 'https://images.unsplash.com/photo-1555952517-2e8e729e0b44?auto=format&fit=crop&w=1200&q=80',
            ],
            [
                'initials' => 'JM',
                'name' => 'João Mendes',
                'role' => 'Engenheiro Sénior',
                'org' => 'Empresa',
                'topic' => 'Sistemas CNS/ATM resilientes: fiabilidade, manutenção e modernização.',
                'photo' => 'https://images.unsplash.com/photo-1555952517-2e8e729e0b44?auto=format&fit=crop&w=1200&q=80',
            ],
            [
                'initials' => 'CN',
                'name' => 'Carla Nunes',
                'role' => 'Gestora de Programas',
                'org' => 'Instituição',
                'topic' => 'Governação, normas e transformação sustentável em infraestruturas críticas.',
                'photo' => 'https://images.unsplash.com/photo-1555952517-2e8e729e0b44?auto=format&fit=crop&w=1200&q=80',
            ],
            [
                'initials' => 'AS',
                'name' => 'Ana Silva',
                'role' => 'Chefe de Operações',
                'org' => 'Organização',
                'topic' => 'Reforço da competência operacional através de práticas modernas de segurança.',
                'photo' => 'https://images.unsplash.com/photo-1555952517-2e8e729e0b44?auto=format&fit=crop&w=1200&q=80',
            ],
            [
                'initials' => 'JM',
                'name' => 'João Mendes',
                'role' => 'Engenheiro Sénior',
                'org' => 'Empresa',
                'topic' => 'Sistemas CNS/ATM resilientes: fiabilidade, manutenção e modernização.',
                'photo' => 'https://images.unsplash.com/photo-1555952517-2e8e729e0b44?auto=format&fit=crop&w=1200&q=80',
            ],
            [
                'initials' => 'CN',
                'name' => 'Carla Nunes',
                'role' => 'Gestora de Programas',
                'org' => 'Instituição',
                'topic' => 'Governação, normas e transformação sustentável em infraestruturas críticas.',
                'photo' => 'https://images.unsplash.com/photo-1555952517-2e8e729e0b44?auto=format&fit=crop&w=1200&q=80',
            ],
            [
                'initials' => 'JM',
                'name' => 'João Mendes',
                'role' => 'Engenheiro Sénior',
                'org' => 'Empresa',
                'topic' => 'Sistemas CNS/ATM resilientes: fiabilidade, manutenção e modernização.',
                'photo' => 'https://images.unsplash.com/photo-1555952517-2e8e729e0b44?auto=format&fit=crop&w=1200&q=80',
            ],
            [
                'initials' => 'CN',
                'name' => 'Carla Nunes',
                'role' => 'Gestora de Programas',
                'org' => 'Instituição',
                'topic' => 'Governação, normas e transformação sustentável em infraestruturas críticas.',
                'photo' => 'https://images.unsplash.com/photo-1555952517-2e8e729e0b44?auto=format&fit=crop&w=1200&q=80',
            ],
        ];
    }

    public function render()
    {
        return view('livewire.components.speakers');
    }
}
