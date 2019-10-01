<script type="text/javascript">

    function confirmm(ad) {
        swal({
            text: "ایا از تایید خود اطمینان دارید",
            icon: "warning",
            buttons: true,
        })
            .then((willDelete) => {
                if (willDelete) {
                    swal("تایید با موفقیت انجام شد", {
                        icon: "success",
                    });
                    window.location.href = "confirm_register_user/"+ad;

                } else {
                    swal("عدم تایید");
                }
            });

    }

</script>

<script type="text/javascript">

    function reject(ad) {
        swal("لطفا دلیل خود را ذکر کنید", {
            content: "input",

        })
            .then((value) => {
                swal(`دلیل شما: ${value}`);
                window.location.href = "reject_register_user/"+ad +"/" +value;


            });

    }

</script>