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
                name: "کد",
                type: "number",
                width: 30
            },
            {
                name: "محصول",
                itemTemplate: function (val, item) {
                    return $("<img>").attr("src", val).css({
                        height: 50,
                        width: 50
                    }).on("click", function () {
                        $("#imagePreview").attr("src", item.Img);
                        $("#dialog").dialog("open");
                    });
                },
                insertTemplate: function () {
                    var insertControl = this.insertControl = $("<input>").prop("type", "file");
                    return insertControl;
                },
                insertValue: function () {
                    return this.insertControl[0].files[0];
                },
                align: "center",
                width: 50
            },
            {
                name: "نام محصول",
                type: "text",
                width: 100
            },
            {
                name: "وضعیت",
                type: "text",
                width: 50
            },
            {
                name: "تعداد باقی مانده",
                type: "number",
                width: 50
            },
            {
                type: "control"
            }
        ]
    });
})(jQuery);