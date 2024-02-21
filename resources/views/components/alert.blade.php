@props(['type'])
<div class="p-4 mb-4 text-sm  rounded alert-{{ $type }}" role="alert">
    <span class="font-medium">{{ $slot }}</span>
</div>
