<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('過去の食事記録') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @foreach ($cookData as $date => $records)
                <div class="mb-8">
                    <h3 class="text-lg font-semibold mb-4">{{ $date }}</h3>
                    <x-bladewind::tab-group name="pills-{{ $date }}" style="pills" class="ml-8">
                        <x-slot:headings>
                            <x-bladewind::tab-heading name="recode-morning-{{ $date }}" active="true" label="朝" />
                            <x-bladewind::tab-heading name="recode-lunch-{{ $date }}" label="昼" />
                            <x-bladewind::tab-heading name="recode-night-{{ $date }}" label="夕" />
                        </x-slot:headings>

                        <x-bladewind::tab-body>
                            {{-- 朝のタブ --}}
                            <x-bladewind::tab-content name="recode-morning-{{ $date }}" active="true">
                                <x-bladewind::card class="cursor-pointer hover:shadow-gray-300" style="height: auto; padding: 20px;">
                                    <div class="flex space-x-4">
                                        @foreach ($records->whereIn('name', [
                                            'carbohydrate-filename',
                                            'protein-filename',
                                            'vegetable-filename'
                                        ]) as $record)
                                        <img src="{{ Storage::url('images/' . $record->image) }}" alt="{{ $record->name }}" class=“h-24 w-24 object-cover”>

                                        @endforeach
                                    </div>
                                </x-bladewind::card>
                            </x-bladewind::tab-content>

                            {{-- 昼のタブ --}}
                            <x-bladewind::tab-content name="recode-lunch-{{ $date }}">
                                <x-bladewind::card class="cursor-pointer hover:shadow-gray-300" style="height: auto; padding: 20px;">
                                    <div class="flex space-x-4">
                                        @foreach ($records->whereIn('name', [
                                            'carbohydrate-lunch-filename',
                                            'protein-lunch-filename',
                                            'vegetable-lunch-filename'
                                        ]) as $record)
                                        <img src="{{ Storage::url('images/' . $record->image) }}" alt="{{ $record->name }}" class=“h-24 w-24 object-cover”>
                                        @endforeach
                                    </div>
                                </x-bladewind::card>
                            </x-bladewind::tab-content>

                            {{-- 夜のタブ --}}
                            <x-bladewind::tab-content name="recode-night-{{ $date }}">
                                <x-bladewind::card class="cursor-pointer hover:shadow-gray-300" style="height: auto; padding: 20px;">
                                    <div class="flex space-x-4">
                                        @foreach ($records->whereIn('name', [
                                            'carbohydrate-night-filename',
                                            'protein-night-filename',
                                            'vegetable-night-filename'
                                        ]) as $record)
                                        <img src="{{ Storage::url('images/' . $record->image) }}" alt="{{ $record->name }}" class=“h-24 w-24 object-cover”>
                                        @endforeach
                                    </div>
                                </x-bladewind::card>
                            </x-bladewind::tab-content>
                        </x-bladewind::tab-body>
                    </x-bladewind::tab-group>
                </div>
            @endforeach
        </div>
    </div>
    <!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>フッターデザイン</title>
    <style>
         .todo-list {
            position: absolute;
            top: 50%;
            left: 30;
            transform: translate(-100%, 50%);
            background-color: #fff9e6;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            width: 250px;
        }
        .footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: #fff9e6; /* 優しいクリーム色 */
            display: flex;
            justify-content: space-around;
            align-items: center;
            padding: 10px 0;
            box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
        }
        .footer button {
            background-color: #ffcc33; /* 明るい黄色 */
            color: #333; /* 濃い文字色で視認性を確保 */
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .footer button:hover {
            background-color: #ffb400; /* ホバー時に少し濃い黄色 */
        }
    </style>
    <script>
        function navigateTo(page) {
            window.location.href = page;
        }
    </script>
</head>
<body>
    <div class="footer">
       
        <button onclick="navigateTo('/record/input')">食事入力に戻る</button>

    </div>
</body>
</x-app-layout>
