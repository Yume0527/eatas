<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('食事評価') }}
        </h2>
        <script src="https://cdn.tailwindcss.com"></script>
    </x-slot>

    <div class="max-w-4xl mx-auto mt-8 p-6 bg-white shadow-md rounded-lg">
        <h3 class="text-lg font-bold text-gray-700 mb-4">一日のカロリー摂取目標</h3>
        <div class="flex items-center mb-6">
            <span class="text-2xl font-semibold text-blue-600">2000</span>
            <span class="text-gray-600 ml-2">kcal</span>
        </div>

        <h3 class="text-lg font-bold text-gray-700 mb-4">今日の摂取カロリー</h3>
        <div class="flex items-center mb-6">
            <span class="text-2xl font-semibold text-green-600">{{ $totalCalories }}</span>
            <span class="text-gray-600 ml-2">kcal</span>
        </div>
    </div>

    <!-- 今日の評価を別のカードで強調 -->
    <div class="max-w-4xl mx-auto mt-6 p-8 bg-yellow-100 border-4 border-yellow-400 shadow-lg rounded-lg">
        <h3 class="text-2xl font-bold text-yellow-800 mb-4 text-center">今日の評価</h3>
        <div class="text-center mb-6">
            <h1 class="text-4xl font-extrabold text-yellow-900">
                {{ $evaluation }}
            </h1>
        </div>

        <!-- 保存ボタン -->
        <div class="text-center">
            <form method="POST" action="{{ route('save.evaluation') }}">
                @csrf
                <input type="hidden" name="evaluation" value="{{ $evaluation }}">
                <button type="submit" class="px-6 py-3 bg-yellow-500 text-white font-bold rounded-lg shadow-md hover:bg-yellow-600 focus:outline-none">
                    評価を保存する
                </button>
            </form>
        </div>
    </div>
    @if (session('success'))
        <div class="max-w-4xl mx-auto mt-4 p-4 bg-green-100 text-green-800 rounded-lg shadow-md">
            {{ session('success') }}
        </div>
    @endif

</x-app-layout>


