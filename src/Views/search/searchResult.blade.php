<div class="col-12 mt-2">
    <form method="post" action="/saved_results">
        @csrf
        @foreach($data as $k => $res)
        <div class="mb-3 border border-info rounded p-2">
            <h5 class="mb-0"><input title="save" type="checkbox" name="checked[{{$k}}]" value="{{ $k }}" /> <a class="text-primary" href="{{ $res->link }}">{{ $res->title }}</a></h5>
            <h6 class="mb-0"><a class="text-success" href="{{ $res->link }}">{{ $res->link }}</a></h6>
            <div class="text-muted">{{ $res->snippet }}</div>
            <input type="hidden" name="value[{{$k}}]" value="{{ json_encode($res) }}"  />
            <textarea maxlength="250" title="comment" placeholder="Set Comment Here..." class="w-100 p-1" name="comment[{{$k}}]">{{ old('comment.'.$k)}}</textarea>
        </div>
        @endforeach
        <button class="btn btn-primary" type="submit">Save</button>
    </form>
</div>