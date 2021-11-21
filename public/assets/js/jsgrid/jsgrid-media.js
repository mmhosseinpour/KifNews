(function ($) {
    "use strict";
    $("#batchDelete").jsGrid({
        width: "100%",
        autoload: true,
        confirmDeleting: false,
        paging: true,
        controller: {
            loadData: function () {
                return db.clients;
            }
        },
        fields: [{
                headerTemplate: function () {
                    return $("<button>").attr("type", "button").text("حذف").addClass("btn btn-danger btn-sm btn-delete mb-0 b-r-4")
                        .click(function () {
                            deleteSelectedItems();
                        });
                },
                itemTemplate: function (_, item) {
                    return $("<input>").attr("type", "checkbox")
                        .prop("checked", $.inArray(item, selectedItems) > -1)
                        .on("change", function () {
                            $(this).is(":checked") ? selectItem(item) : unselectItem(item);
                        });
                },
                align: "center",
                width: 50
            },
            {
                name: "تصویر",
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
                name: "نام فایل",
                type: "number",
                width: 90
            },
            {
                name: "آدرس Url",
                width: 100
            },
        ]
    });
    var selectedItems = [];
    var selectItem = function (item) {
        selectedItems.push(item);
    };
    var unselectItem = function (item) {
        selectedItems = $.grep(selectedItems, function (i) {
            return i !== item;
        });
    };
    var deleteSelectedItems = function () {
        if (!selectedItems.length || !confirm("آیا مطمئن هستید ؟"))
            return;
        deleteClientsFromDb(selectedItems);
        var $grid = $("#batchDelete");
        $grid.jsGrid("option", "pActionIndex", 1);
        $grid.jsGrid("loadData");
        selectedItems = [];
    };
    var deleteClientsFromDb = function (deletingClients) {
        db.clients = $.map(db.clients, function (client) {
            return ($.inArray(client, deletingClients) > -1) ? null : client;
        });
    };
})(jQuery);