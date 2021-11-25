<div class="col-md-4">
    <div class="form-floating mb-3">
        <select name="parentId" class="form-select" id="floatingSelect"
                aria-label="category">
            <option value="0" selected>دسته بندی...</option>
            @foreach($categories as $item)
                <option value="{{$item->id}}" >{{$item->title}}</option>
            @endforeach
        </select>
        <label for="floatingSelect">دسته بندی</label>
    </div>
</div>
