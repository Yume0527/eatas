<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="comment-bubble">
                @if ($comment)
                    {{ $comment->text }}
                @else
                <p>コメントが見つかりませんでした。</p>
                @endif
        </div>
    </div>

    <link rel="stylesheet" href="{{ asset('css/dashboard.blade.css') }}">
</x-app-layout>