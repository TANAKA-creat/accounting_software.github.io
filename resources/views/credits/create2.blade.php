<x-layout>
    <div class="back-link">
        &laquo <a href="{{ route('details.index') }}">戻る</a>
    </div>
    <h1>追記 - 会計ソフト</h1>
        <div class="form-group">
            <form method="post" action="{{ route('credits.store2') }}" >
                @csrf
                {{ csrf_field() }}
                <label>
                    記録日:<input type="date" name="datetime_credit" class="typing_place" value="{{old('datetime_credit')}}">
                </label>
                <label>
                    支払項目:<input type="text" name="creditor" class="typing_place" value="{{old('creditor')}}">
                @error('creditor')
                <div class="error"> {{ $message }}</div>
                @enderror
                </label>
                <label>
                    金額(rmb):<input type="double" name="rmb_credit" class="typing_place" value="{{old('rmb_credit')}}">
                @error('rmb_credit')
                <div class="error"> {{ $message }}</div>
                @enderror
                </label>
                <label>
                    金額(usd):<input type="double" name="usd_credit"class="typing_place" value="{{old('usd_credit')}}">
                @error('usd_credit')
                <div class="error"> {{ $message }}</div>
                @enderror
                </label>
            <input type="submit" value="登録" class="btn">
        </form>
</x-layout>
