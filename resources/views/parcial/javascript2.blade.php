<script type="text/javascript">
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
