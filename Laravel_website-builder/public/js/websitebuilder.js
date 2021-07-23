$(document).ready(function(){

  $.ajaxSetup({
      headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') }
  });

  // var socialLinks;
  // $("#sortable").sortable({
  //   update: function(event, ui) {
  //   	socialLinks = $('#sortable').sortable('serialize');
  //       $.post("editSiteSocials", socialLinks);
  //       console.log(socialLinks);
  // //   }
  // });

    $('#sortable').sortable({
	    axis: 'y',
	    update: function (event, ui) {
	        var data = $(this).sortable('serialize');
	        console.log(data);
	        // POST to server using $.post or $.ajax
	        // $.ajax({
	        //     data: data,
	        //     type: 'POST',
	        //     url: 'editSiteSocials'
	        // });
	    }
	});



}); // end doc ready


// $(function () {
//   $.ajaxSetup({
//       headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') }
//   });
// });

// $(function() {

//  $( "#sortable" ).sortable({

//    update: function(event, ui) {
//      var facebookUrl = document.getElementById("fb_url").value;
//      var facebookName = document.getElementById("fb_name").value;
//      var twitterUrl = document.getElementById("tw_url").value;
//      var twitterName = document.getElementById("tw_name").value;
     
//      var socialsLinks = $(this).sortable('serialize');

//      console.log(facebookUrl);
//      console.log(facebookName);
//      console.log(twitterUrl);
//      console.log(twitterName);

//      console.log(socialsLinks);

//      $.post('editSiteSocials', socialsLinks, facebookUrl, facebookName, twitterUrl, twitterName, function(o) { // link to controller?
//       console.log(o);
//      }, 'json');

//    }
//  });

// });
// });
