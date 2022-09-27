<x-layout>
    <div class="back-link">
        &laquo <a href="{{ route('details.index') }}">戻る</a>
    </div>
    <h1>追記 - 会計ソフト</h1>
        <div class="form-group">
            <form method="post" action="{{ route('details.store') }}" >
                @csrf
                {{ csrf_field() }}
                <label>
                    記録日:<input type="date" name="datetime" class="typing_place">
                </label>
                <label>
                入金項目:<input type="text" name="customer" class="typing_place" value="{{old('customer')}}">
                @error('customer')
                <div class="error"> {{ $message }}</div>
                @enderror
                </label>
                <label>
                金額(rmb):<input type="float" name="rmb" class="typing_place" value="{{old('rmb')}}">
                @error('rmb')
                <div class="error"> {{ $message }}</div>
                @enderror
                </label>
                <label>
                金額(usd):<input type="float" name="usd"class="typing_place" value="{{old('usd')}}">
                @error('usd')
                <div class="error"> {{ $message }}</div>
                @enderror
                </label>
            <input type="submit" value="登録" class="btn">
        </form>
</x-layout>
