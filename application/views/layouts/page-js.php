<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="public/js/jquery-2.2.4.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="public/js/bootstrap.min.js"></script>
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

<!--gmaps Js-->
<!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>-->
<script src="public/js/gmaps.min.js"></script>

<script src="public/js/theme.js"></script>

<script src="public/js/modal_ajax_submit.js"></script>

<script type="text/javascript" src="public/js/alertify.min.js"></script>
<script type="text/javascript" src="public/js/jquery.form-validator.min.js"></script>
<script type="text/javascript" src="public/js/modernizr.js"></script>
<script type="text/javascript" src="/public/js/aos.js"></script>
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
<!-- Script -->
<!--<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>

    $(function () {
        var moduleId;

        //Vertically center modals on page
        function reposition() {
            var modal = $(this),
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

        alertify.set('notifier', 'delay', 3);
        alertify.set('notifier', 'position', 'bottom-left');
        alertify.set('prompt', 'reverseButtons', true);
        alertify.set('prompt', 'transition', 'fade');
        alertify.set('confirm', 'transition', 'fade');

        //Show success action modal
        // $('#success-action-modal').modal('show');

        //send quote email
        $('#save-quote').on('click', function () {
            var strUrl = '<?php echo base_url('quote') ?>';
            var objData = {
                name: $('#quoteModal').find('#name').val(),
                email: $('#quoteModal').find('#email').val(),
                phone: $('#quoteModal').find('#phone').val(),
                city: $('#quoteModal').find('#city').val()
            };
            var modalID = 'aquoteModal';
            var submitBtnID = 'save-quote';
            var redirectUrl = '/';
            var successMsgTitle = 'Changes Saved!';
            var successMsg = 'Quote successfully added.';
            modalAjaxSubmit(strUrl, objData, modalID, submitBtnID, redirectUrl, successMsgTitle, successMsg);
        });


        // Send comment email
        $('#send-comment').on('click', function () {
            var strUrl = '<?php echo base_url('comment') ?>';
            var objData = {
                name: $('#contact_us_Modal').find('#name').val(),
                email: $('#contact_us_Modal').find('#email').val(),
                message: $('#contact_us_Modal').find('#message').val(),
            };
            var modalID = 'contact_us_Modal';
            var submitBtnID = 'send-comment';
            var redirectUrl = '/';
            var successMsgTitle = 'Changes Saved!';
            var successMsg = 'Comment successfully added.';
            modalAjaxSubmit(strUrl, objData, modalID, submitBtnID, redirectUrl, successMsgTitle, successMsg);
        });


    });
</script>

