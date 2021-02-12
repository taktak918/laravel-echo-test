$(function() {
  $('#message-form button').click( function(){
    const message = $('.input-text').val();
    console.log(message);

    $.ajax({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
      },
      url: `/message-push`,
      type: 'POST',
      //type: 'GET',
      //processData: false,
      //contentType: false,
      //data: {'message':message},
      //dataType: "text",
      data: {'message':message, 'channel':'userA'},
      dataType: "text",
      success: function(data) {
        console.log('testlog1');
        $('.message').append('<p class="right">'+data+"</p>");
        $('.input-text').val('');
      },
      error: function(xhr, status, error) {
        //alert('ERROR : ' + status + ' : ' + error);
      }
    });
    return false;
  });

  $('#message-form2 button').click( function(){
    const message = $('.input-text').val();
    console.log(message);

    $.ajax({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
      },
      url: `/message-push`,
      type: 'POST',
      data: {'message':message, 'channel':'userB'},
      dataType: "text",
      success: function(data) {
        console.log('testlog2');
        $('.message').append('<p class="right">'+data+"</p>");
        $('.input-text').val('');
      },
      error: function(xhr, status, error) {
        //alert('ERROR : ' + status + ' : ' + error);
      }
    });
    return false;
  });

});
