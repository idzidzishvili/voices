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

   $('#deleteModal').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget);
      $('#delete-link').attr('href', '/admin/delete'+button.data('page')+'/'+button.data('id'))
   })

   $('.summernote').summernote({
      toolbar: [
        // [groupName, [list of button]]
        ['style', ['bold', 'italic', 'underline', 'clear']],
        ['para', ['ul', 'ol', 'paragraph']],
      ],
      height: 200
    });

});