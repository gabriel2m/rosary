<i
    {{ $attributes }}
    x-bind:class="{ 'text-white': current == index }"
    x-data="{ index: ++count }"
    x-effect="current == index && $el.scrollIntoView({ block: 'center' })"
    x-show="beads >= index"
></i>
