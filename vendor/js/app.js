
$(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });


    var hash = document.location.hash;
    if (hash) {
      console.log(hash);
      $(".nav-pills a[href=\\"+hash+"]").tab('show');
    } 
    $('.nav-pills a').on('shown.bs.tab', function (e) {
      window.location.hash = e.target.hash;
  });
});
