<!-- Modal -->
<div id="quoteModal"  class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <form class="contact_us_form row" id="quoteForm" name="quote" novalidate="">
                        <div class="form-group col-md-12">
                            <p id="error_1"></p>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                        </div>
                        <div class="form-group col-md-12">
                            <p id="error_2"></p>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
                        </div>
                        <div class="form-group col-md-12">
                            <p id="error_3"></p>
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Your Phone Number" required>
                        </div>
                        <div class="form-group col-md-12">
                            <p id="error_4"></p>
                            <input type="text" class="form-control" id="city" name="city" placeholder="Type Your City" required>
                        </div>

                        <div class="form-group col-md-12">
                            <button type="submit"  value="submit" id="send-quote" value="add_quote"  class="btn submit_btn  form-control ">SEND REQUEST</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>