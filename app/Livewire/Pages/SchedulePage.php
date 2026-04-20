<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class SchedulePage extends Component
{
    public string $selectedDay = '2026-06-23';

    public function selectDay(string $day): void
    {
        $days = config(current_lang() . '.programa.days', config('pt.programa.days'));
        if (array_key_exists($day, $days)) {
            $this->selectedDay = $day;
        }
    }

    public function getActiveDayProperty(): array
    {
        $days = config(current_lang() . '.programa.days', config('pt.programa.days'));
        return $days[$this->selectedDay] ?? reset($days);
    }

    public function render()
    {
        $lang = current_lang();
        return view('livewire.pages.schedule-page', [
            'programme' => config("{$lang}.programa.days", config('pt.programa.days')),
        ])->title(t('programa.page_title'));
    }
}
