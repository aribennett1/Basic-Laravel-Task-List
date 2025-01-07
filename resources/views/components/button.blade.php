<button type="{{ $type ?? 'button' }}" class="{{ $class ?? '' }}" style="background:none; border:none; cursor:pointer; {{ $style ?? '' }}">
    <span class="material-icons {{ $iconClass ?? '' }}">{{ $icon }}</span>
</button>