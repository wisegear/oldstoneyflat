@props(['image', 'caption', 'period'])

<figure {{ $attributes->class(['history-postcard']) }}>
    <div class="history-photo">
        <div class="history-placeholder">
            <span class="history-placeholder-label">{{ $image === 'flat-renovated.jpg' ? 'The story continues…' : 'From the family album' }}</span>
            <span class="history-placeholder-date">{{ $period }}</span>
            <span class="history-placeholder-note">{{ $image === 'flat-renovated.jpg' ? 'A new chapter, still to come' : 'A photograph to come' }}</span>
        </div>
        @if (is_file(public_path('images/history/'.$image)))
            <img src="{{ asset('images/history/'.$image) }}" alt="{{ $caption }}" loading="lazy" decoding="async" onerror="this.remove()">
        @endif
    </div>
    <figcaption>{{ $caption }}</figcaption>
</figure>
