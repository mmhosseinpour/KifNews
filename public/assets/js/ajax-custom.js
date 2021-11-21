var substringMatcher = function (strs) {
  return function findMatches(q, cb) {
    var matches, substringRegex;
    matches = [];
    substrRegex = new RegExp(q, 'i');
    $.each(strs, function (i, str) {
      if (substrRegex.test(str)) {
        matches.push(str);
      }
    });
    cb(matches);
  };
};


var states = new Bloodhound({
  datumTokenizer: Bloodhound.tokenizers.obj.whitespace('name'),
  queryTokenizer: Bloodhound.tokenizers.whitespace,
  local: [{
      'name': 'کفش جدید',
      'image': '../assets/images/mega-store/product/1.jpg',
      'price': '250,000 تومان'
    },
    {
      'name': 'ساعت مردانه',
      'image': '../assets/images/mega-store/product/2.jpg',
      'price': '150,000 تومان'
    },
    {
      'name': 'هدفون وایرلس',
      'image': '../assets/images/mega-store/product/3.jpg',
      'price': '130,000 تومان'
    },
    {
      'name': 'گوشی هوشمند',
      'image': '../assets/images/mega-store/product/4.jpg',
      'price': '800,000 تومان'
    },
    {
      'name': 'کوله پستی قرمز',
      'image': '../assets/images/mega-store/product/5.jpg',
      'price': '145,000 تومان'
    },
    {
      'name': 'گوشی سونی',
      'image': '../assets/images/mega-store/hot-deal/1.jpg',
      'price': '990,000 تومان'
    },
    {
      'name': 'ادکلن جدید',
      'image': '../assets/images/mega-store/hot-deal/2.jpg',
      'price': '370,000 تومان'
    },
    {
      'name': 'ساعت کلاسیک ',
      'image': '../assets/images/mega-store/hot-deal/3.jpg',
      'price': '480,000 تومان'
    },
    {
      'name': 'دوربین عکاسی',
      'image': '../assets/images/mega-store/media-product/6.jpg',
      'price': '850,000 تومان'
    },
    {
      'name': 'کیف دستی',
      'image': '../assets/images/mega-store/media-product/5.jpg',
      'price': '270,000 تومان'
    },
  ]
});

states.initialize();


$('.the-basics .typeahead').typeahead({
  hint: true,
  highlight: true,
  minLength: 1
}, {
  name: 'states',
  display: 'name',
  source: states.ttAdapter(),
  templates: {
    empty: [
      '<div class="empty-message">',
      'موردی یافت نشد !',
      '</div>'
    ].join('\n'),
    suggestion: function (data) {
      return '<a href="product-page(left-sidebar).html" class="man-section"><div class="image-section"><img src=' + data.image + '></div><div class="description-section"><h4>' + data.name + '</h4><span>' + data.price + '</span></div></a>';
    }
  },
});