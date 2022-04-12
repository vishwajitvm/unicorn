                            <!--model start here-->                            
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                                     aria-labelledby="exampleModalCenterTitle"  aria-hidden="true">
                                <div class="modal-dialog bg-warning rounded border border-dark" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Send Your Request From {{empty($title)?"":$title}}</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body px-4">
                                      <form action="{{ route('popup-request-store') }}" method="POST">
                                          @csrf
                                        <div class="form-group">
                                          <label for="recipient-name" class="col-form-label"> <span class="text-danger">*</span>Your Name:</label>
                                          <input type="text" class="form-control" name="request_username"  id="recipient-name" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">Your Email:</label>
                                            <input type="text" class="form-control" name="request_useremail" id="recipient-name">
                                          </div>

                                          <div class="form-group">
                                            <label for="recipient-name" class="col-form-label"><span class="text-danger">*</span>Your Phone Number:</label>
                                            <input type="text" class="form-control" name="request_userphone_number" id="recipient-name" required>
                                          </div>


                                        <div class="form-group">
                                          <label for="message-text" class="col-form-label">Message:</label>
                                          <textarea class="form-control" name="request_message" id="message-text"></textarea>
                                        </div> <br>


                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Send message</button>
                                          </div>
                                      </form>
                                    </div>
                                    {{-- <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                      <button type="button" class="btn btn-primary">Send message</button>
                                    </div> --}}
                                  </div>
                                </div>
                            </div>
                            <!--model end here-->
