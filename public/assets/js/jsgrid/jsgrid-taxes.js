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
                name: "جزئیات مالیات",
                type: "text"
            },
            {
                name: "برنامه مالیاتی",
                type: "text"
            },
            {
                name: "نرخ مالیات",
                type: "text"
            },
            {
                name: "مبلغ کل مالیات",
                type: "number"
            },
            {
                type: "control"
            }
        ]
    });
})(jQuery);