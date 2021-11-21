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
                name: "عنوان واحد پول",
                type: "text",
                width: 100
            },
            {
                name: "دلار آمریکا",
                type: "text",
                width: 100
            },
            {
                name: "کد مخفف",
                type: "text",
                width: 100
            },
            {
                name: "نرخ تبادل",
                type: "text",
                width: 100
            },
            {
                type: "control"
            }
        ]
    });
})(jQuery);