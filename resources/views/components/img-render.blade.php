<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flipclock/0.7.8/flipclock.css">

@foreach ($gallerys as $gallery)
    <div class="mt-4">
        <div>
            <img src="{{ asset('storage/imagens/' . $gallery->url) }}">
            <p>{{ $gallery->image }}</p>

        </div>
    </div>
@endforeach
