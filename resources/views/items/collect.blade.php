<div class="items-grid">
    @foreach ($collections as $collection)
        <div class="item-box">
            @if (in_array($collection->id, $ownedItems))
                {{-- 取得済みアイテムの画像と名前を表示 --}}
                <img src="{{ asset('images/' . $collection->image) }}" alt="{{ $collection->name }}">
                <p>{{ $collection->name }}</p>
            @else
                {{-- 未取得アイテムは「？」を表示 --}}
                <img src="{{ asset('images/question_mark.png') }}" alt="未取得">
                <p>？？？</p>
            @endif
        </div>
    @endforeach
</div>
