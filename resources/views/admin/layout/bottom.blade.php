<script src="{{asset('admin/assets')}}/js/vendor/jquery-2.1.4.min.js"></script>

  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="{{asset('admin/assets')}}/js/plugins.js"></script>
    <script src="{{asset('admin/assets')}}/js/main.js"></script>



    <script src="{{asset('admin/assets')}}/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="{{asset('admin/assets')}}/js/dashboard.js"></script>
    <script src="{{asset('admin/assets')}}/js/widgets.js"></script>
    <script src="{{asset('admin/assets')}}/js/lib/vector-map/jquery.vmap.js"></script>
    <script src="{{asset('admin/assets')}}/js/lib/vector-map/jquery.vmap.min.js"></script>
    <script src="{{asset('admin/assets')}}/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="{{asset('admin/assets')}}/js/lib/vector-map/country/jquery.vmap.world.js"></script>
    <script>
        ( function ( $ ) {
            "use strict";

            jQuery( '#vmap' ).vectorMap( {
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: [ '#1de9b6', '#03a9f5' ],
                normalizeFunction: 'polynomial'
            } );
        } )( jQuery );
    </script>
      <script src="{{ asset('admin/assets/js/lib/chosen/chosen.jquery.min.js') }}"></script>
<script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
  <script src="{{ asset('vendor/unisharp/laravel-ckeditor/adapters/jquery.js') }}"></script>
   

  <script>
      jQuery(document).ready(function() {
          jQuery(".myselect").chosen({
              disable_search_threshold: 10,
              no_results_text: "Oops, nothing found!",
              width: "100%"
          });
      });


           jQuery('textarea.my-editor').ckeditor({
            filebrowserImageBrowseUrl: '{{ url("public") }}/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '{{ url("public") }}/laravel-filemanager/upload?type=Images&_token={{csrf_token()}}',
            filebrowserBrowseUrl: '{{ url("public") }}/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '{{ url("public") }}/laravel-filemanager/upload?type=Files&_token={{csrf_token()}}'
        });
      });
     
  </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" ></script>
    <script>
        @if (Session::has('success'))
        toastr.success("{{Session::get('success')}}")
        {{-- expr --}}
        @endif
        @if (Session::has('warning'))
        toastr.info("{{Session::get('info')}}")
        {{-- expr --}}
        @endif
        @if (Session::has('error'))
        toastr.error("{{Session::get('error')}}")
        {{-- expr --}}
        @endif
    </script>

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>

    <script>

	$(document).on("click", "#delete", function(e){
	   e.preventDefault();
	   var link = $(this).attr("href");
	    swal({
		title: "Are You Sure Want to Delete?",
	        text: "If you delete this, it will be gone forever.",
            	icon: "warning",
            	buttons: true,
            	dangerMode: true,
            })
	    .then((willDelete) => {
            if (willDelete) {
            window.location.href = link;
            } else{
		swal("Safe Data!");
	}

    });
});

 $(document).on("click", "#accept", function(e){
	   e.preventDefault();
	   var link = $(this).attr("href");
	    swal({
		title: "Are You Sure Want to Accept?",
	        text: "If you Accept this, it can't be Deleted.",
            	icon: "warning",
            	buttons: true,
            	dangerMode: true,
            })
	    .then((willDelete) => {
            if (willDelete) {
            window.location.href = link;
            }

      });
    });

</script>

<link rel="stylesheet" href="{{ asset('admin/assets/css/lib/chosen/chosen.css') }}">
  <script src="{{ asset('admin/assets/js/lib/chosen/chosen.jquery.js') }}"></script>


  <script>
      jQuery(document).ready(function() {
          jQuery(".myselect").chosen({
              disable_search_threshold: 10,
              no_results_text: "Oops, nothing found!",
              width: "100%"
          });
      });
     
  </script>



