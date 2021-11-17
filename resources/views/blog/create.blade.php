@extends("layout.layout")
@section('title',"ثبت مقاله")
@section('body')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">فرم ثبت مقالع</h5>

            <!-- Floating Labels Form -->
            <form class="row g-3" method="post">
                @csrf
                <div class="col-md-12">
                    <div class="form-floating">
                        <input type="text" class="form-control" placeholder="عنوان مقاله">
                        <label for="floatingName">عنوان</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="email" class="form-control" placeholder="اسلاگ مقاله">
                        <label for="floatingEmail">اسلاگ</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <select class="form-select">
                        <option selected="">دسته بندی...</option>
                    </select>
                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="توضیحات" id="floatingTextarea"
                                  style="height: 100px;"></textarea>
                        <label for="floatingTextarea">مقاله</label>
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">ثبت</button>
                    <button type="reset" class="btn btn-secondary">ریست</button>
                </div>
            </form><!-- End floating Labels Form -->

        </div>
    </div>
@endsection();
