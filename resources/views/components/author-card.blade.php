@props(['author'])
<div class="flex items-center text-sm">
    {{--todo --}}
    <img src="/images/lary-avatar.svg" alt="Lary avatar">
    <div class="ml-3">
        <h5 class="font-bold">
            <a href="/authors/{{ $author->username }}">
                {{ $author->firstname }} {{ $author->lastname }}
            </a>
        </h5>
        {{--todo --}}
        <h6>Mascot at Laracasts</h6>
    </div>
</div>
