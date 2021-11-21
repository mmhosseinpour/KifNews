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
        deleteConfirm: "آیا شما از حذف این مورد مطمئن هستید ؟",
        controller: db,
        fields: [{
                name: "کلید",
                type: "text",
                width: 100
            },
            {
                name: "روسی",
                type: "text",
                width: 100
            },
            {
                name: "عربی",
                type: "text",
                width: 100
            },
            {
                name: "فارسی",
                type: "text",
                width: 100
            },
            {
                name: "انگلیسی",
                type: "text",
                width: 100
            },
            {
                type: "control"
            }
        ]
    });
})(jQuery);