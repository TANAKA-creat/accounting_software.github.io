<x-layout>
    <h1>
        <span>会計ソフト</span>
        <a href="{{ route('details.create') }}">[追記]</a>
    </h1>
    <table border="2">
        <thead>
            <tr>
                <th>記録日</th>
                <th>入金項目</th>
                <th>金額（RMB）</th>
                <th>金額（USD）</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <div class="time">
                @foreach ($details as $detail)
                    <td>{!! nl2br(e($detail->datetime)) !!}</td>
                @endforeach
                </div>
                @foreach ($details as $detail)
                    <td>{!! nl2br(e($detail->customer)) !!}</td>
                @endforeach
                @foreach ($details as $detail)
                    <td>{!! nl2br(e(number_format($detail->rmb,2))) !!}</td>
                @endforeach
                @foreach ($details as $detail)
                    <td>{!! nl2br(e(number_format($detail->usd,2))) !!}</td>
                @endforeach
            </tr>
        </tbody>
    </table>
</x-layout>


