<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class GalleryPage extends Component
{
    public function render()
    {
        $dir = public_path('assets/conferencias');

        $photos = collect(glob($dir . '/*.{jpg,jpeg,png,gif,webp}', GLOB_BRACE))
            ->sort()
            ->values()
            ->map(fn($path) => [
                'src' => 'assets/conferencias/' . basename($path),
                'alt' => pathinfo($path, PATHINFO_FILENAME),
            ])
            ->all();

        $videoDir = public_path('assets/conferencias video');

        $videos = collect(glob($videoDir . '/*.{mp4,webm,mov,avi}', GLOB_BRACE))
            ->sort()
            ->values()
            ->map(fn($path) => [
                'src'   => 'assets/conferencias video/' . basename($path),
                'title' => pathinfo($path, PATHINFO_FILENAME),
            ])
            ->all();

        return view('livewire.pages.gallery-page', compact('photos', 'videos'))
            ->title(t('galeria.page_title') . ' – IFATSEA África 2026');
    }
}
