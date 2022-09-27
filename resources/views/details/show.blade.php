<x-layout>
    <div class="back-link">
        &laquo <a href="{{ route('details.index') }}">戻る</a>
    </div>
    <h1>会計ソフト</h1>
    <p>{!! nl2br(e($detail->customer)) !!}</p>
    <p>{!! nl2br(e($detail->rmb)) !!}</p>
    <p>{!! nl2br(e($detail->usd)) !!}</p>

</x-layout>


