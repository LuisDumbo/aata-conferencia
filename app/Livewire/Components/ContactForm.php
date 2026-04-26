<?php

namespace App\Livewire\Components;

use App\Models\ContactMessage;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Livewire\Component;
use Filament\Schemas\Schema;

class ContactForm extends Component implements HasForms
{
    use InteractsWithForms;

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill([
            'assunto' => array_key_first(config(current_lang() . '.contacto.subject_options', [])),
        ]);
    }

    public function form(Schema $form): Schema
    {
        return $form
            ->statePath('data')
            ->schema([
                TextInput::make('nome')
                    ->label(t('contacto.field_name'))
                    ->required()
                    ->columnSpanFull()
                    ->extraInputAttributes([
                        'class' => 'w-full bg-white border border-slate-300 rounded-md px-3 py-2 text-slate-900 focus:outline-none focus:ring-2 focus:ring-indigo-600',
                    ]),

                TextInput::make('email')
                    ->label(t('contacto.field_email'))
                    ->email()
                    ->required()
                    ->columnSpanFull()
                    ->extraInputAttributes([
                        'class' => 'w-full bg-white border border-slate-300 rounded-md px-3 py-2 text-slate-900 focus:outline-none focus:ring-2 focus:ring-indigo-600',
                    ]),

                TextInput::make('telefone')
                    ->label(t('contacto.field_phone'))
                    ->tel()
                    ->columnSpanFull()
                    ->extraInputAttributes([
                        'class' => 'w-full bg-white border border-slate-300 rounded-md px-3 py-2 text-slate-900 focus:outline-none focus:ring-2 focus:ring-indigo-600',
                    ]),

                Select::make('assunto')
                    ->label(t('contacto.field_subject'))
                    ->options(config(current_lang() . '.contacto.subject_options', config('pt.contacto.subject_options')))
                    ->required()
                    ->columnSpanFull()
                    ->extraInputAttributes([
                        'class' => 'w-full bg-white border border-slate-300 rounded-md px-3 py-2 text-slate-900 focus:outline-none focus:ring-2 focus:ring-indigo-600',
                    ]),

                Textarea::make('mensagem')
                    ->label(t('contacto.field_message'))
                    ->required()
                    ->rows(6)
                    ->columnSpanFull()
                    ->extraInputAttributes([
                        'class' => 'w-full bg-white border border-slate-300 rounded-md px-3 py-2 text-slate-900 focus:outline-none focus:ring-2 focus:ring-indigo-600',
                    ]),

                Checkbox::make('aceito')
                    ->label(t('contacto.field_consent'))
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public function submit(): void
    {
        $data = $this->form->getState();

        ContactMessage::create([
            'nome'     => $data['nome'],
            'email'    => $data['email'],
            'telefone' => $data['telefone'] ?? null,
            'assunto'  => $data['assunto'],
            'mensagem' => $data['mensagem'],
            'aceito'   => $data['aceito'] ?? false,
        ]);

        $this->form->fill([
            'assunto' => array_key_first(config(current_lang() . '.contacto.subject_options', [])),
        ]);

        $this->dispatch('contact-sent');
    }

    public function render()
    {
        return view('livewire.components.contact-form');
    }
}
