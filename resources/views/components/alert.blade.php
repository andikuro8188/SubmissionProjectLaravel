
@props(['tipe' => 'info'])

<div class="alert">
    <strong>{{ ucfirst($tipe) }}:</strong>
    {{ $slot }}
</div>
