{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
</head>
<body>
    <h1>{{ $title }}</h1>
    <p>{{ $content }}</p>
</body>
</html> --}}


<x-filament::page>
    <form wire:submit.prevent="saveFormData">
        {{ $this->form }}
        <div class="mt-4">
            <button type="submit" class="btn btn-primary">
                Soumettre
            </button>
        </div>
    </form>
</x-filament::page>
