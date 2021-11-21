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
                name: "کد سفارش",
                type: "text",
                width: 50
            },
            {
                name: "کد معامله",
                type: "number",
                width: 100
            },
            {
                name: "تاریخ",
                type: "text",
                width: 100
            },
            {
                name: "شیوه پرداخت",
                type: "text",
                width: 50
            },
            {
                name: "وضعیت سفارش",
                type: "text",
                width: 100
            },
            {
                name: "مبلغ",
                type: "text",
                width: 100
            }
        ]
    });
})(jQuery);