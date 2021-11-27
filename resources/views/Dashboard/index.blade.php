@extends('layout.market_layout')
@section('title',"داشبورد")
@section('body')
    <!-- breadcrumb start -->
    <div class="breadcrumb-main ">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumb-contain">
                        <div>
                            <h2>داشبورد</h2>
                            <ul>
                                <li><a href="index.html">خانه</a></li>
                                <li><i class="fa fa-angle-double-left"></i></li>
                                <li><a href="javascript:void(0)">داشبورد</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->

    <!-- section start -->
    <section class="section-big-py-space b-g-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="account-sidebar"><a class="popup-btn">حساب کاربری من</a></div>
                    <div class="dashboard-left">
                        <div class="collection-mobile-back"><span class="filter-back"><i class="fa fa-angle-right"
                                                                                         aria-hidden="true"></i> بازگشت</span></div>
                        <div class="block-content ">
                            <ul>
                                <li class="active"><a href="javascript:void(0)">اطلاعات حساب</a></li>
                                <li><a href="javascript:void(0)">آدرس</a></li>
                                <li><a href="javascript:void(0)">سفارشات من</a></li>
                                <li><a href="javascript:void(0)">لیست علاقه مندی من</a></li>
                                <li><a href="javascript:void(0)">خبرنامه</a></li>
                                <li><a href="javascript:void(0)">حساب کاربری من</a></li>
                                <li><a href="javascript:void(0)">تغییر رمز عبور</a></li>
                                <li class="last"><a href="javascript:void(0)">خروج از حساب کاربری</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="dashboard-right">
                        <div class="dashboard">
                            <div class="page-title">
                                <h2>داشبورد من</h2>
                            </div>
                            <div class="welcome-msg">
                                <p>سلام، رضا افشار!</p>
                                <p>شما در این قسمت می توانید حساب کاربری خود در فروشگاه بیگ دیل را مشاهده کنید و تغییرات لازم را
                                    انجام دهید، پس از ویرایش اطلاعات خود آن را ذخیره کنید</p>
                            </div>
                            <div class="box-account box-info">

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="box">
                                            <div class="box-title">
                                                <h3>اطلاعات تماس</h3><a href="javascript:void(0)">ویرایش</a>
                                            </div>
                                            <div class="box-content">
                                                <h6>رضا افشار</h6>
                                                <h6>Rezafshar@gmail.com</h6>
                                                <h6><a href="javascript:void(0)">تغییر رمز عبور</a></h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="box">
                                            <div class="box-title">
                                                <h3>خبرنامه</h3><a href="javascript:void(0)">ویرایش</a>
                                            </div>
                                            <div class="box-content">
                                                <p>شما می توانید در این قسمت عضویت در خبرنامه را فعال یا لغو کنید، با عضویت در خبرنامه از آخرین
                                                    اطلاعیه ها، محصولات جدید، و جدیدترین تخفیف ها با خبر خواهید شد</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="box">
                                        <div class="box-title">
                                            <h3>آدرس</h3><a href="javascript:void(0)">مدیریت آدرس</a>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <h6>آدرس پیش فرض ارسال صورت حساب</h6>
                                                <address>شما آدرس پیش فرضی برای ارسال صورت حساب ثبت نکردید.<br><a
                                                        href="javascript:void(0)">ویرایش آدرس</a>
                                                </address>
                                            </div>
                                            <div class="col-sm-6">
                                                <h6>آدرس پیش فرض ارسال سفارشات</h6>
                                                <address>تهران، میدان آزادی، خیابان آزادی، پلاک 7<br><a href="javascript:void(0)">ویرایش
                                                        آدرس</a></address>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section end -->

@endsection()
