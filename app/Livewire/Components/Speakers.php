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
                'photo' => null, // ex: 'images/speakers/ana.jpg'
            ],
            [
                'initials' => 'JM',
                'name' => 'João Mendes',
                'role' => 'Engenheiro Sénior',
                'org' => 'Empresa',
                'topic' => 'Sistemas CNS/ATM resilientes: fiabilidade, manutenção e modernização.',
                'photo' => null,
            ],
            [
                'initials' => 'CN',
                'name' => 'Carla Nunes',
                'role' => 'Gestora de Programas',
                'org' => 'Instituição',
                'topic' => 'Governação, normas e transformação sustentável em infraestruturas críticas.',
                'photo' => null,
            ],
            [
                'initials' => 'AS',
                'name' => 'Ana Silva',
                'role' => 'Chefe de Operações',
                'org' => 'Organização',
                'topic' => 'Reforço da competência operacional através de práticas modernas de segurança.',
                'photo' => null, // ex: 'images/speakers/ana.jpg'
            ],
            [
                'initials' => 'JM',
                'name' => 'João Mendes',
                'role' => 'Engenheiro Sénior',
                'org' => 'Empresa',
                'topic' => 'Sistemas CNS/ATM resilientes: fiabilidade, manutenção e modernização.',
                'photo' => null,
            ],
            [
                'initials' => 'CN',
                'name' => 'Carla Nunes',
                'role' => 'Gestora de Programas',
                'org' => 'Instituição',
                'topic' => 'Governação, normas e transformação sustentável em infraestruturas críticas.',
                'photo' => null,
            ],
              [
                'initials' => 'JM',
                'name' => 'João Mendes',
                'role' => 'Engenheiro Sénior',
                'org' => 'Empresa',
                'topic' => 'Sistemas CNS/ATM resilientes: fiabilidade, manutenção e modernização.',
                'photo' => null,
            ],
            [
                'initials' => 'CN',
                'name' => 'Carla Nunes',
                'role' => 'Gestora de Programas',
                'org' => 'Instituição',
                'topic' => 'Governação, normas e transformação sustentável em infraestruturas críticas.',
                'photo' => null,
            ],
        ];
    }

    public function render()
    {
        return view('livewire.components.speakers');
    }
}
