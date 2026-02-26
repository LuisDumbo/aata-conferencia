<?php

namespace App\Livewire\Components;

use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Schemas\Components\Form;
use Livewire\Component;
use Filament\Schemas\Schema;



class ContactForm extends Component implements HasForms
{
    use InteractsWithForms;

    /** Estado do formulário */
    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill([
            'assunto' => 'Informações gerais',
        ]);
    }

    public function form(Schema $form): Schema
    {
        return $form
            ->statePath('data')
            ->schema([
                TextInput::make('nome')
                    ->label('Nome completo')
                    ->required()
                    ->columnSpanFull()
                    ->extraInputAttributes([
                        'class' => 'w-full bg-white border border-slate-300 rounded-md px-3 py-2 text-slate-900 focus:outline-none focus:ring-2 focus:ring-indigo-600',
                    ]),

                TextInput::make('email')
                    ->label('E-mail')
                    ->email()
                    ->required()
                    ->columnSpanFull()
                    ->extraInputAttributes([
                        'class' => 'w-full bg-white border border-slate-300 rounded-md px-3 py-2 text-slate-900 focus:outline-none focus:ring-2 focus:ring-indigo-600',
                    ]),

                TextInput::make('telefone')
                    ->label('Telefone (opcional)')
                    ->tel()
                    ->columnSpanFull()
                    ->extraInputAttributes([
                        'class' => 'w-full bg-white border border-slate-300 rounded-md px-3 py-2 text-slate-900 focus:outline-none focus:ring-2 focus:ring-indigo-600',
                    ]),

                Select::make('assunto')
                    ->label('Assunto')
                    ->options([
                        'Informações gerais' => 'Informações gerais',
                        'Inscrição'          => 'Inscrição',
                        'Parcerias'          => 'Parcerias',
                        'Palestrantes'       => 'Palestrantes',
                        'Outro'              => 'Outro',
                    ])

                    ->required()
                    ->columnSpanFull()
                    ->extraInputAttributes([
                        'class' => 'w-full bg-white border border-slate-300 rounded-md px-3 py-2 text-slate-900 focus:outline-none focus:ring-2 focus:ring-indigo-600',
                    ]),

                Textarea::make('mensagem')
                    ->label('Mensagem')
                    ->required()
                    ->rows(6)
                    ->columnSpanFull()
                    ->extraInputAttributes([
                        'class' => 'w-full bg-white border border-slate-300 rounded-md px-3 py-2 text-slate-900 focus:outline-none focus:ring-2 focus:ring-indigo-600',
                    ]),

                Checkbox::make('aceito')
                    ->label('Concordo em ser contactado(a) por e-mail/telefone sobre este assunto.')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public function submit(): void
    {
        $data = $this->form->getState();

        // ✅ Aqui você decide o que fazer com os dados:
        // 1) Enviar e-mail (Mail::to(...)->send(...))
        // 2) Salvar no banco (ContactMessage::create($data))
        // 3) Enviar para um endpoint/API

        // Exemplo simples: só “limpar” e mandar mensagem de sucesso
        $this->form->fill();
        $this->dispatch('contact-sent');
    }

    public function render()
    {
        return view('livewire.components.contact-form');
    }
}
