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
        deleteConfirm: "آیا از حذف این مورد مطمئن هستید ؟",
        controller: db,
        fields: [{
                name: "شماره",
                type: "number",
                width: 50
            },
            {
                name: "فاکتور",
                type: "number"
            },
            {
                name: "تاریخ",
                type: "text"
            },
            {
                name: "هزینه ارسال",
                type: "number"
            },
            {
                name: "مبلغ",
                type: "number"
            },
            {
                name: "مالیات",
                type: "number"
            },
            {
                name: "جمع کل",
                type: "number"
            },
            {
                type: "control",
                width: 100
            }
        ]
    });
})(jQuery);