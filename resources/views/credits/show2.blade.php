<x-layout>
    <div class="back-link">
        &laquo <a href="{{ route('details.index') }}">戻る</a>
    </div>
    <h1>会計ソフト</h1>
    <p>{!! nl2br(e($credits->datetime_credit)) !!}</p>
    <p>{!! nl2br(e($credits->creditor)) !!}</p>
    <p>{!! nl2br(e($credits->rmb_credit)) !!}</p>
    <p>{!! nl2br(e($credits->usd_credit)) !!}</p>

</x-layout>

