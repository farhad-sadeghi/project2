<script src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('plugins/input-mask/jquery.inputmask.extensions.js')}}"></script>
<script src="{{asset('plugins/input-mask/jquery.inputmask.date.extensions.js')}}"></script>
<script src="{{asset('plugins/input-mask/jquery.inputmask.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<script src="{{asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<!-- Morris.js charts -->
<script src="{{asset('bower_components/raphael/raphael.min.js')}}"></script>
<script src="{{asset('bower_components/morris.js/morris.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
<!-- jvectormap -->
<script src="{{asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('bower_components/jquery-knob/dist/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('bower_components/moment/min/moment.min.js')}}"></script>
<script src="{{asset('bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<!-- datepicker -->
<script src="{{asset('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<!-- Slimscroll -->
<script src="{{asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('dist/js/demo.js')}}"></script>
@if( session('commentt'))
    <script type="text/javascript">

        swal({
            icon: "success",
            button: "ok",
            text: "{{ session('commentt')}}",
        });


    </script>
@endif

@if( session('search'))
    <script type="text/javascript">

        swal({
            icon: "warning",
            button: "ok",
            text: "{{ session('search')}}",
        });


    </script>
@endif



<script>
    $(function() {
        $(document).on("change",".uploadFile", function()
        {
            var uploadFile = $(this);
            var files = !!this.files ? this.files : [];
            if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support

            if (/^image/.test( files[0].type)){ // only image file
                var reader = new FileReader(); // instance of the FileReader
                reader.readAsDataURL(files[0]); // read the local file

                reader.onloadend = function(){ // set image data as background of div
                    //alert(uploadFile.closest(".upimage").find('.imagePreview').length);
                    uploadFile.closest(".imgUp").find('.imagePreview').css("background-image", "url("+this.result+")");
                }
            }

        });
    });
</script>
<script>
    function readURL(input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#blah').attr('src', e.target.result);
//                $('#blah2').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imgInp").change(function() {
        readURL(this);
    });
    function checks() {
//        $('#check').ariaChecked = true;
        if ($('#check-sick').hasClass('checked')){
            $('#check-sick').removeClass('checked');
            $('#sick-name').attr("readonly", "readonly");

        }
        else {
            $('#check-sick').addClass('checked');
            $('#sick-name').removeAttr("readonly");
        }
    }
    function checkb() {
        if ($('#check-body').hasClass('checked')){
            $('#check-body').removeClass('checked');
            $('#body-name').attr("readonly", "readonly");

        }
        else {
            $('#check-body').addClass('checked');
            $('#body-name').removeAttr("readonly");
        }
    }
    function checkm1() {
        if ($('#check-marrid1').hasClass('checked')){
            $('#check-marrid1').removeClass('checked');
//            $('#body-name').attr("disabled", "disabled");

        }
        else {
            $('#check-marrid1').addClass('checked');
//            $('#body-name').removeAttr("disabled");
        }
    }
    function checkm2() {
        if ($('#check-marrid2').hasClass('checked')){
            $('#check-marrid2').removeClass('checked');
//            $('#body-name').attr("disabled", "disabled");

        }
        else {
            $('#check-marrid2').addClass('checked');
//            $('#body-name').removeAttr("disabled");
        }
    }
    function checkmis() {
        if ($('#check-mather-is').hasClass('checked')){
            $('#check-mather-is').removeClass('checked');
//            $('#body-name').attr("disabled", "disabled");

        }
        else {
            $('#check-mather-is').addClass('checked');
//            $('#body-name').removeAttr("disabled");
        }
    }
    function checkfis() {
        if ($('#check-father').hasClass('checked')){
            $('#check-father').removeClass('checked');
//            $('#body-name').attr("disabled", "disabled");

        }
        else {
            $('#check-father').addClass('checked');
//            $('#body-name').removeAttr("disabled");
        }
    }
    function checkfnot() {
        if ($('#check-father-not').hasClass('checked')){
            $('#check-father-not').removeClass('checked');
//            $('#body-name').attr("disabled", "disabled");

        }
        else {
            $('#check-father-not').addClass('checked');
//            $('#body-name').removeAttr("disabled");
        }
    }
    function checkmnot() {
        if ($('#check-mather-not').hasClass('checked')){
            $('#check-mather-not').removeClass('checked');
//            $('#body-name').attr("disabled", "disabled");

        }
        else {
            $('#check-mather-not').addClass('checked');
//            $('#body-name').removeAttr("disabled");
        }
    }
</script>
