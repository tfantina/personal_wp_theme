
    var current = [];
    $(document).ready(function() {

  /*      $("#button").click(function(e) {
          e.preventDefault(); */
          var myurl = "https://api.flickr.com/services/rest/?&method=flickr.people.getPublicPhotos&api_key=a551f3a1df693f60ede3799479730f81&user_id=93949902@N04&per_page=25&format=json&jsoncallback=?";
          console.log(myurl);
          $.ajax({
            url: myurl,
            dataType : "jsonp",

            success : function(response) {


              $.each(response.photos.photo, function(i, response){
                if(i == 0) {
                  current[i] = "<div class='item active'><img src='https://farm" + response.farm + ".staticflickr.com/" + response.server + "/" + response.id + "_" + response.secret + "_c.jpg'></div>";
                } else {
                  current[i] = "<div class='item'><img src='https://farm" + response.farm + ".staticflickr.com/" + response.server + "/" + response.id + "_" + response.secret + "_c.jpg'></div>";
                }

              });

            $(".post").html(current);
            },
            error: function() {
              alert('error');
           }
       });
    // });
  });
