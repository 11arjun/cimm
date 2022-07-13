$(document).ready(function () {
  $('#dtBasicExample').DataTable();
  $('.dataTables_length').addClass('bs-select');
});


$(function () {
    // Summernote
    $('#summernote').summernote() 
    $('#texteditor').summernote() 
  });

$('#summernote').summernote({
        height: 200
      });
$('#texteditor').summernote({
        height: 200
      });