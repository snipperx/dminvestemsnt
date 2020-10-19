<!-- Modal -->
<div id="contactusModal" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="contactModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" style="text-align:center" id="exampleModalLabel">REQUEST QUOTE NOW</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body ">
                <div class="comment_form_area">
                    <div id="invalid-input-alert"></div>
                    <div id="success-alert"></div>

                    <div class='error_msg'>

                    </div>
                    <form class="contact_us_form row"  id="contactForm" name="contactForm" novalidate="novalidate">

                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" id="user_name" name="user_name" placeholder="Your Name">
                            <span id="name_error"></span>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" class="form-control" id="user_email" name="user_email" placeholder="Your Email">
                            <span id="email_error"></span>
                        </div>
                        <div class="form-group col-md-12">
                            <textarea class="form-control" name="message" id="message" rows="1"
                                      placeholder="Your Comment"></textarea>
                            <span id="message_error"></span>
                        </div>
                        <div class="form-group col-md-12">
                            <button type="button"   id="send-comment"  value="add_comment"   class="btn submit_btn form-control" >Post Comment</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>