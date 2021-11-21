(function ($) {
    "use strict";
    $("#basicScenario").jsGrid({
        width: "100%",
        filtering: true,
        editing: true,
        inserting: true,
        sorting: true,
        paging: true,
        autoload: true,
        pActionSize: 15,
        pActionButtonCount: 5,
        deleteConfirm: "آیا از حذف این مورد مطمئن هستید؟",
        controller: db,
        fields: [{
                name: "نام",
                type: "text"
            },
            {
                name: "کد انتقال",
                type: "number"
            },
            {
                name: "تاریخ",
                type: "text"
            },
            {
                name: "مجموع",
                type: "text"
            },
            {
                type: "control"
            }
        ]
    });
})(jQuery);