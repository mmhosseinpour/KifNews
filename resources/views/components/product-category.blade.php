<div class="col-md-4">
    <div class="form-floating mb-3">
        <select name="categoryId" class="form-select" id="floatingSelect"
                aria-label="category" name="categoryId">
            <option value="0" selected>دسته بندی ...</option>
            @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->title}}</option>
            @endforeach()
        </select>
        <label for="floatingSelect">دسته بندی</label>
    </div>
</div>
