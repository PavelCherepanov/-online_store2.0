$(document).ready(function(){

   // load_data();

  function load_data(query) {
    $.ajax({
      url:"/search.php",
      method:"get",
      dataType: 'html',//!
      data:{search:query},
      success:function(data){
        $("#indexMain").html(data);
        alert(data);
      }
    });
  }

  $('#search').keyup(function(){
      var search = $(this).val();
      if(search != ''){
        load_data(search);
      }
      else{
        load_data();
      }

    });

//   $.ajax({
//     url: '/search.php',
//     method: 'post',
//     // dataType: 'html',
//     data: {search: ''},
//     success: function(data){
//         // $('#result').html(data);
//         alert(data)
//     }
// });
});

