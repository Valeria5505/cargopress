
    $(function(){
        $("#phone").mask("(999) 999-9999");



        $('.question:first').addClass("active");



        $(".send").submit(function (event) {
            alirt("Handler for .submit() called.");
            event.preventDefault();
        });


    });

