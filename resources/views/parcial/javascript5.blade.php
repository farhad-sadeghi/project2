<script type="text/javascript">

    function delet() {
        event.preventDefault(); // prevent form submit
        var form = document.forms["f"]; // storing the form
        swal({
            text: "ایا از حذف اطمینان دارید؟",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {
                    form.submit();
                } else {
                    swal("انصراف از حذف");
                }
            });
    }


</script>
