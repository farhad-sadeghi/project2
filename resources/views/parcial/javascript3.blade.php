<script type="text/javascript">


    function changeImage1() {
        document.getElementById("img1").src = document.getElementById("input1").value;
    }
    function changeImage2() {
        document.getElementById("img2").src = document.getElementById("input2").value;
    }
    function changeImage3() {
        document.getElementById("img3").src = document.getElementById("input3").value;
    }


    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                //alert(e.target.result);
                $('#img2').attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }



    function radio() {

        $('#edu-wife').removeAttr("readonly");
        $('#cont-child').removeAttr("readonly");
    }
    function Unradio() {

        $('#edu-wife').attr("readonly","readonly");
        $('#cont-child').attr("readonly","readonly");
    }

    /*  swal({
          title: "gdgrdggd",
          icon: "success",
          button: "coolio",
          text: "hey",
      });*/
    @if(count($errors))
    @foreach($errors->all() as $error)
    swal({
        title: "",
        icon: "error",
        button: "ok",
        text: "{{$error}}",
    });
    @endforeach
    @endif

</script>
