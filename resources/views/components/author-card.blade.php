@props(['author'])
<div class="flex items-center text-sm">
    {{--todo --}}
    <img src="/images/lary-avatar.svg" alt="Lary avatar">
    <div class="ml-3">
        <h5 class="font-bold">
            <a href="/?author={{ $author->username }}">
                {{ $author->first_name }} {{ $author->last_name }}
            </a>
        </h5>
        {{--todo --}}
        <h6>Mascot at Laracasts</h6>
    </div>
</div>
