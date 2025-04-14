@php
    app()->isLocal() && ($attributes = $attributes->merge(['x-on:click' => 'current = index']));
@endphp

<i
    {{ $attributes }}
    x-bind:class="{ 'text-white text-shadow-lg/25': current == index }"
    x-data="{ index: ++count }"
    x-effect="current == index && $el.scrollIntoView({ block: 'center' })"
    x-show="beads >= index"
></i>
