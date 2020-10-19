<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="public/js/jquery-2.2.4.js"></script>

<script src="node_modules/jquery-validation/dist/jquery.validate.js"></script>
<script src="public/js/alertify.min.js"></script>
<script src="node_modules/bootstrapvalidator/dist/js/bootstrapValidator.min.js"></script>
<!-- Rev slider js -->
<script src="public/vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="public/vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="public/vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="public/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="public/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="public/vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>

<script src="public/vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="public/vendors/isotope/imagesloaded.pkgd.min.js"></script>
<script src="public/vendors/isotope/isotope.pkgd.min.js"></script>
<script src="public/vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="public/vendors/counterup/waypoints.min.js"></script>
<script src="public/vendors/counterup/jquery.counterup.min.js"></script>
<script src="public/vendors/flex-slider/jquery.flexslider-min.js"></script>

<script src="public/js/gmaps.min.js"></script>

<script src="public/js/theme.js"></script>
<!--<script type="text/javascript" src="public/js/jquery.form-validator.min.js"></script>-->
<script type="text/javascript" src="public/js/modernizr.js"></script>
<script type="text/javascript" src="/public/js/aos.js"></script>

<!-- Script -->
<!--<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->

<script src="public/js/bootstrap.min.js"></script>


<script type="text/javascript">

    $(function () {


        //Vertically center modals on page
        function reposition() {
            let modal = $(this),
                dialog = modal.find('.modal-dialog');
            modal.css('display', 'block');

            // Dividing by two centers the modal exactly, but dividing by three
            // or four works better for larger screens.
            dialog.css("margin-top", Math.max(0, ($(window).height() - dialog.height()) / 2));
        }

        // Reposition when a modal is shown
        $('.modal').on('show.bs.modal', reposition);
        // Reposition when the window is resized
        $(window).on('resize', function () {
            $('.modal:visible').each(reposition);
        });


        $(document).ready(function () {
            $('#quoteForm').bootstrapValidator({
                feedbackIcons: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
                },
                fields: {
                    name: {
                        validators: {
                            notEmpty: {
                                message: 'The name is required'
                            }
                        }
                    },
                    email: {
                        validators: {
                            notEmpty: {
                                message: 'The email is required'
                            }
                        }
                    },
                    phone: {
                        validators: {
                            notEmpty: {
                                message: 'The phone is required'
                            }
                        }
                    },
                    city: {
                        validators: {
                            notEmpty: {
                                message: 'The city is required'
                            }
                        }
                    }
                }
            });
        });


        $('#send-quote').click(function (e) {
            e.preventDefault();
            console.log('kill');


            let Quoteform = $('#send-quote');
            Quoteform.text('SENDING...');
            Quoteform.addClass('disabled');

            $.ajax({
                method: 'post',
                url: 'quote',
                data: {
                    name: $("input[name=name]").val(),
                    email: $("input[name=email]").val(),
                    phone: $("input[name=phone]").val(),
                    city: $("input[name=city]").val(),
                },
                success: function (data) {
                    if (data.success) {
                        alertify.success('Your quote request  was successfully sent.');
                    } else {
                        alertify.error('Ooops there was an error, please try again.');
                    }
                    Quoteform.text('Quote Sent');
                    Quoteform.removeClass('disabled');

                    setTimeout(function () {
                        $('#quoteModal').modal('hide')
                    }, 4000);
                }
            });
        });



        $('#send-comment').click(function (e) {
            e.preventDefault();

            let name = $("input[name=user_name]").val();
            let email = $("input[name=user_email]").val();
            let message = $("textarea[name=message]").val();


        let commentForm = $('#send-comment');
        let myModal = $('#contactusModal');
        let successMsgTitle = "Your comment request  was successfully sent.";
         let  successMsg = 'Action Performed Successfully.';

        commentForm.text('SENDING...');
        commentForm.addClass('disabled');

        $.ajax({
            method: 'post',
            url: 'comment',
            data: {
                name: name,
                email: email,
                message: message,
            },
            success: function (data) {

                let successHTML = '<button type="button" id="close-invalid-input-alert" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-check"></i> ' + successMsgTitle + '</h4>';
                //successHTML += successMsg;
                myModal.find('#success-alert').addClass('alert alert-success alert-dismissible')
                    .fadeIn()
                    .html(successHTML);
                //auto close alert after 5 seconds
                myModal.find("#success-alert").alert();
                window.setTimeout(function() { myModal.find("#success-alert").fadeOut('slow'); }, 3000);
                commentForm.text('Comment Sent');
                commentForm.removeClass('disabled');

                setTimeout(function () {
                    $('#contactusModal').modal('hide')
                }, 4000);
                //$("#quoteModal").modal('hide');
            }
        });

    });

    })
    ;
</script>



