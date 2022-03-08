@props(['trigger'])
<div x-data="{ show: false }">
    <!-- Trigger -->
    <div @click="show = !show" @click.away="show = false">
        {{ $trigger }}
    </div>

    <!-- Links -->
    <div x-show="show" style="display: none"
        class="py-2 absolute z-50 bg-gray-100 w-full mt-2 rounded-xl overflow-auto max-g-52">
        {{ $slot }}
    </div>
</div>
