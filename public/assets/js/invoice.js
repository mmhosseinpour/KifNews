 /*==============
    22. counter js
  ================*/
 $('#exportpdf').click(function () {
   Popup($('.invoice-popup')[0].outerHTML);

   function Popup(data) {
     window.print();
     return true;
   }
 });

 $('#printinvoice').click(function () {
   Popup($('.invoice-popup')[0].outerHTML);

   function Popup(data) {
     window.print();
     return true;
   }
 });


 $('<div class="theme-pannel-main"><ul><li id="rtl_btn"><a href="javascript:void(0)" class="btn setting_btn"><span class="rtl-txt">Rtl</span></a></li><li id="ltr_btn"><a href="javascript:void(0)" class="btn setting_btn"><span class="rtl-txt">Ltr</span></a></li></ul></div>').appendTo($('body'));
 (function () {})();
 $('#rtl_btn').hide();
 $("#rtl_btn").on('click', function () {
   $('body').addClass('rtl');
   $('body').removeClass('ltr');
   $('#rtl_btn').hide();
   $('#ltr_btn').show();
 });
 $("#ltr_btn").on('click', function () {
   $('body').addClass('ltr');
   $('body').removeClass('rtl');
   $('#ltr_btn').hide();
   $('#rtl_btn').show();
 });