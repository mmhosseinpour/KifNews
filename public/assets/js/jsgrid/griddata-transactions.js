'use strict';
(function () {
    var db = {
        loadData: function (filter) {
            return $.grep(this.clients, function (client) {
                return (!filter.Name || client.Name.indexOf(filter.Name) > -1) &&
                    (!filter.Action || client.Action === filter.Action) &&
                    (!filter.stock || client.stock.indexOf(filter.stock) > -1) &&
                    (!filter.Attribute || client.Attribute === filter.Attribute) &&
                    (filter.Married === undefined || client.Married === filter.Married);
            });
        },
        insertItem: function (insertingClient) {
            this.clients.push(insertingClient);
        },
        updateItem: function (updatingClient) {},

        deleteItem: function (deletingClient) {
            var clientIndex = $.inArray(deletingClient, this.clients);
            this.clients.splice(clientIndex, 1);
        }
    };
    window.db = db;
    db.countries = [{
            Name: "India",
            Id: 0
        },
        {
            Name: "United States",
            Id: 1
        },
        {
            Name: "Canada",
            Id: 2
        },
        {
            Name: "United Kingdom",
            Id: 3
        },
        {
            Name: "France",
            Id: 4
        },
        {
            Name: "Brazil",
            Id: 5
        },
        {
            Name: "China",
            Id: 6
        },
        {
            Name: "Russia",
            Id: 7
        }
    ];
    db.clients = [{
            "کد سفارش": "142",
            "کد معامله": "#212145214510",
            "تاریخ": "19 آبان 1399",
            "شیوه پرداخت": "زرین پال",
            "وضعیت سفارش": "در حال ارسال",
            "مبلغ": "175,000+ تومان",
        },
        {
            "کد سفارش": "217",
            "کد معامله": "#784561421721",
            "تاریخ": "20 مهر 1399",
            "شیوه پرداخت": "کارت به کارت",
            "وضعیت سفارش": "در حال پردازش",
            "مبلغ": "845,000+ تومان",
        },
        {
            "کد سفارش": "546",
            "کد معامله": "#476547821142",
            "تاریخ": "15 شهریور 1399",
            "شیوه پرداخت": "کارت به کارت",
            "وضعیت سفارش": "تحویل داده شده",
            "مبلغ": "314,000- تومان",
        },
        {
            "کد سفارش": "671",
            "کد معامله": "#745384127541",
            "تاریخ": "27 مرداد 1399",
            "شیوه پرداخت": "زرین پال",
            "وضعیت سفارش": "در حال ارسال",
            "مبلغ": "217,000+ تومان",
        },
        {
            "کد سفارش": "565",
            "کد معامله": "#96725125102",
            "تاریخ": "01 تیر 1399",
            "شیوه پرداخت": "کارت به کارت",
            "وضعیت سفارش": "در حال پردازش",
            "مبلغ": "542,000+ تومان",
        },
        {
            "کد سفارش": "754",
            "کد معامله": "#547121023651",
            "تاریخ": "18 خرداد 1399",
            "شیوه پرداخت": "زرین پال",
            "وضعیت سفارش": "در حال ارسال",
            "مبلغ": "241,000+ تومان",
        },
        {
            "کد سفارش": "164",
            "کد معامله": "#876412242215",
            "تاریخ": "14 اردیبهشت 1399",
            "شیوه پرداخت": "کارت به کارت",
            "وضعیت سفارش": "تحویل داده شده",
            "مبلغ": "482,000- تومان",
        },
        {
            "کد سفارش": "841",
            "کد معامله": "#31534221621",
            "تاریخ": "07 اردیبهشت 1399",
            "شیوه پرداخت": "زرین پال",
            "وضعیت سفارش": "در حال پردازش",
            "مبلغ": "781,000+ تومان",
        },
        {
            "کد سفارش": "354",
            "کد معامله": "#78412457421",
            "تاریخ": "17 مرداد 1399",
            "شیوه پرداخت": "زرین پال",
            "وضعیت سفارش": "در حال ارسال",
            "مبلغ": "278,000+ تومان",
        },
        {
            "کد سفارش": "784",
            "کد معامله": "#241524757448",
            "تاریخ": "20 فروردین 1399",
            "شیوه پرداخت": "کارت به کارت",
            "وضعیت سفارش": "تحویل داده شده",
            "مبلغ": "461,000- تومان",
        },
        {
            "کد سفارش": "142",
            "کد معامله": "#212145214510",
            "تاریخ": "19 آبان 1399",
            "شیوه پرداخت": "زرین پال",
            "وضعیت سفارش": "در حال ارسال",
            "مبلغ": "175,000+ تومان",
        },
        {
            "کد سفارش": "217",
            "کد معامله": "#784561421721",
            "تاریخ": "20 مهر 1399",
            "شیوه پرداخت": "کارت به کارت",
            "وضعیت سفارش": "در حال پردازش",
            "مبلغ": "845,000+ تومان",
        },
        {
            "کد سفارش": "546",
            "کد معامله": "#476547821142",
            "تاریخ": "15 شهریور 1399",
            "شیوه پرداخت": "کارت به کارت",
            "وضعیت سفارش": "تحویل داده شده",
            "مبلغ": "314,000+ تومان",
        },
        {
            "کد سفارش": "671",
            "کد معامله": "#745384127541",
            "تاریخ": "27 مرداد 1399",
            "شیوه پرداخت": "زرین پال",
            "وضعیت سفارش": "در حال ارسال",
            "مبلغ": "217,000+ تومان",
        },
        {
            "کد سفارش": "565",
            "کد معامله": "#96725125102",
            "تاریخ": "01 تیر 1399",
            "شیوه پرداخت": "کارت به کارت",
            "وضعیت سفارش": "در حال پردازش",
            "مبلغ": "542,000+ تومان",
        },

    ];
    db.users = [{
            "ID": "x",
            "Account": "A758A693-0302-03D1-AE53-EEFE22855556",
            "Order Id": "Carson Kelley",
            "RegisterDate": "2002-04-20T22:55:52-07:00"
        },
        {
            "Account": "D89FF524-1233-0CE7-C9E1-56EFF017A321",
            "Order Id": "Prescott Griffin",
            "RegisterDate": "2011-02-22T05:59:55-08:00"
        },
        {
            "Account": "06FAAD9A-5114-08F6-D60C-961B2528B4F0",
            "Order Id": "Amir Saunders",
            "RegisterDate": "2014-08-13T09:17:49-07:00"
        },
        {
            "Account": "EED7653D-7DD9-A722-64A8-36A55ECDBE77",
            "Order Id": "Derek Thornton",
            "RegisterDate": "2012-02-27T01:31:07-08:00"
        },
        {
            "Account": "2A2E6D40-FEBD-C643-A751-9AB4CAF1E2F6",
            "Order Id": "Fletcher Romero",
            "RegisterDate": "2010-06-25T15:49:54-07:00"
        },
        {
            "Account": "3978F8FA-DFF0-DA0E-0A5D-EB9D281A3286",
            "Order Id": "Thaddeus Stein",
            "RegisterDate": "2013-11-10T07:29:41-08:00"
        },
        {
            "Account": "658DBF5A-176E-569A-9273-74FB5F69FA42",
            "Order Id": "Nash Knapp",
            "RegisterDate": "2005-06-24T09:11:19-07:00"
        },
        {
            "Account": "76D2EE4B-7A73-1212-F6F2-957EF8C1F907",
            "Order Id": "Quamar Vega",
            "RegisterDate": "2011-04-13T20:06:29-07:00"
        },
        {
            "Account": "00E46809-A595-CE82-C5B4-D1CAEB7E3E58",
            "Order Id": "Philip Galloway",
            "RegisterDate": "2008-08-21T18:59:38-07:00"
        },
        {
            "Account": "C196781C-DDCC-AF83-DDC2-CA3E851A47A0",
            "Order Id": "Mason French",
            "RegisterDate": "2000-11-15T00:38:37-08:00"
        },
        {
            "Account": "5911F201-818A-B393-5888-13157CE0D63F",
            "Order Id": "Ross Cortez",
            "RegisterDate": "2010-05-27T17:35:32-07:00"
        },
        {
            "Account": "B8BB78F9-E1A1-A956-086F-E12B6FE168B6",
            "Order Id": "Logan King",
            "RegisterDate": "2003-07-08T16:58:06-07:00"
        },
        {
            "Account": "06F636C3-9599-1A2D-5FD5-86B24ADDE626",
            "Order Id": "Cedric Leblanc",
            "RegisterDate": "2011-06-30T14:30:10-07:00"
        },
        {
            "Account": "FE880CDD-F6E7-75CB-743C-64C6DE192412",
            "Order Id": "Simon Sullivan",
            "RegisterDate": "2013-06-11T16:35:07-07:00"
        },
        {
            "Account": "BBEDD673-E2C1-4872-A5D3-C4EBD4BE0A12",
            "Order Id": "Jamal West",
            "RegisterDate": "2001-03-16T20:18:29-08:00"
        },
        {
            "Account": "19BC22FA-C52E-0CC6-9552-10365C755FAC",
            "Order Id": "Hector Morales",
            "RegisterDate": "2012-11-01T01:56:34-07:00"
        },
        {
            "Account": "A8292214-2C13-5989-3419-6B83DD637D6C",
            "Order Id": "Herrod Hart",
            "RegisterDate": "2008-03-13T19:21:04-07:00"
        },
        {
            "Account": "0285564B-F447-0E7F-EAA1-7FB8F9C453C8",
            "Order Id": "Clark Maxwell",
            "RegisterDate": "2004-08-05T08:22:24-07:00"
        },
        {
            "Account": "EA78F076-4F6E-4228-268C-1F51272498AE",
            "Order Id": "Reuben Walter",
            "RegisterDate": "2011-01-23T01:55:59-08:00"
        },
        {
            "Account": "6A88C194-EA21-426F-4FE2-F2AE33F51793",
            "Order Id": "Ira Ingram",
            "RegisterDate": "2008-08-15T05:57:46-07:00"
        },
        {
            "Account": "4275E873-439C-AD26-56B3-8715E336508E",
            "Order Id": "Damian Morrow",
            "RegisterDate": "2015-09-13T01:50:55-07:00"
        },
        {
            "Account": "A0D733C4-9070-B8D6-4387-D44F0BA515BE",
            "Order Id": "Macon Farrell",
            "RegisterDate": "2011-03-14T05:41:40-07:00"
        },
        {
            "Account": "B3683DE8-C2FA-7CA0-A8A6-8FA7E954F90A",
            "Order Id": "Joel Galloway",
            "RegisterDate": "2003-02-03T04:19:01-08:00"
        },
        {
            "Account": "01D95A8E-91BC-2050-F5D0-4437AAFFD11F",
            "Order Id": "Rigel Horton",
            "RegisterDate": "2015-06-20T11:53:11-07:00"
        },
        {
            "Account": "F0D12CC0-31AC-A82E-FD73-EEEFDBD21A36",
            "Order Id": "Sylvester Gaines",
            "RegisterDate": "2004-03-12T09:57:13-08:00"
        },
        {
            "Account": "874FCC49-9A61-71BC-2F4E-2CE88348AD7B",
            "Order Id": "Abbot Mckay",
            "RegisterDate": "2008-12-26T20:42:57-08:00"
        },
        {
            "Account": "B8DA1912-20A0-FB6E-0031-5F88FD63EF90",
            "Order Id": "Solomon Green",
            "RegisterDate": "2013-09-04T01:44:47-07:00"
        }
    ];
}());