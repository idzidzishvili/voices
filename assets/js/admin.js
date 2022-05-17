$(function () {
   $("#sortable").sortable();

   $('#actor-search').keyup(function (e) {
      if ($('#actor-search').val()) {
         var actorname = $('#actor-search').val().toLowerCase();
         $('ul#sortable li').addClass('d-none');
         $('ul#sortable li[data-actor*='+actorname+']').removeClass('d-none');
      }else{
         $('ul#sortable li').removeClass('d-none');
      }
   });

});