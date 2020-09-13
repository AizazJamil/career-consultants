    <div class="modal fade applyModal_Main" id="applyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Inquiry Form</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="apply-modal">
              <!--<h4 class="subhead">Student Query Form</h4>-->
              <p>Personal details & identification</p>

              <form action="FormSubmit/inquiry.php" class="form-inline" id="formApply" method="POST">
                <div class="row">
                  <div class="col-lg-6 col-md-12 col-xs-12 col-sm-12">
                    <div class="form-group">
                      <label for="">Area of Study</label>
                     <!-- <input type="text" class="form-control" name="areaStudy" required>-->
                     <select name="fieldInterest" id="" class="custom-select" required>
                        <option value="">Select</option>
                        <option value="Arts">Arts</option>
                        <option value="BasicSciences">Basic Sciences</option>
                        <option value="Business">Business</option>
                        <option value="BankingFinance">Banking & Finance</option>
                        <option value="Engineering">Engineering</option>
                        <option value="Engineering">Medical</option>
                        <option value="Others">Others</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-12 col-xs-12 col-sm-12">
                    <div class="form-group">
                      <label for="">Email</label>
                      <input type="email" class="form-control" name="emailID" required>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-12 col-xs-12 col-sm-12">
                    <div class="form-group">
                      <label for="">Full Name</label>
                      <input type="text" class="form-control" name="fullName" required>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-12 col-xs-12 col-sm-12">
                    <div class="form-group">
                      <label for="">Contact</label>
                      <input type="number" class="form-control" name="contactNumber" required>
                    </div>
                  </div>
                  <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                    <div class="form-group">
                      <label for="">Full Address</label>
                      <textarea name="fullAddress" id="" cols="30" rows="3" class="form-control" required></textarea>
                    </div>
                  </div>
                  <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                    <div class="form-group">
                      <label for="">Details Description of Query</label>
                      <textarea name="detailDescription" id="" cols="30" rows="3" class="form-control" required></textarea>
                    </div>
                  </div>
                  <div class="col-lg-12 col-md-12">
                    <h4 class="subhead mt-4">Is there anything you’d like to learn more?</h4>
                    <div class="custom-control custom-radio text-left">
                      <input type="radio" id="customRadio1" name="otherinfoRadio" class="custom-control-input custorm-control-query" onclick="customQuery()" value="I want to know bout the financial assistance in study" checked>
                      <label class="custom-control-label" for="customRadio1">I want to know bout the financial assistance in study</label>
                    </div>
                    <div class="custom-control custom-radio">
                      <input type="radio" id="customRadio2" name="otherinfoRadio" class="custom-control-input custorm-control-query" onclick="customQuery()" value="I want t know about residential/hostel facilities">
                      <label class="custom-control-label" for="customRadio2">I want t know about residential/hostel facilities</label>
                    </div>
                    <div class="custom-control custom-radio">
                      <input type="radio" id="customRadio3" name="otherinfoRadio" class="custom-control-input custorm-control-query" onclick="customQuery()"  value="I want to know about the internship programmes">
                      <label class="custom-control-label" for="customRadio3">I want to know about the internship programmes</label>
                    </div>
                    <div class="custom-control custom-radio">
                      <input type="radio" id="customRadio4" name="otherinfoRadio" class="custom-control-input custorm-control-query" onclick="customQuery()" value="I want to know about the scholarship offered">
                      <label class="custom-control-label" for="customRadio4">I want to know about the scholarship offered</label>
                    </div>
                    <div class="custom-control custom-radio">
                      <input type="radio" id="customRadio5" name="otherinfoRadio" class="custom-control-input custorm-control-query" onclick="radioShow()" value="Other">
                      <label class="custom-control-label" for="customRadio5">Other</label>
                    </div>
                  </div>
                  <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 other-form">
                    <div class="form-group">
                      <label for="">Other</label>
                      <textarea name="otherDetails" cols="30" rows="3" class="form-control"></textarea>
                    </div>
                  </div>

                  <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 text-right">
                    <div class="form-group justify-content-end">
                      <button type="submit" class="btn btn-default btn-block" id="submitBtn"><strong>Submit</strong></button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Back to top button -->
    <a id="topBack"><span class="icon"><i class="fas fa-angle-up"></i></span></a>

    <!-- Button Help -->
    <div class="bottom-button">
      <button class="btn btn-default" data-toggle="modal" data-target="#applyModal"><i class="far fa-question-circle"></i> Submit Query</button>
    </div>


  </div>
  
  
  
    <!--Model Popup starts-->
<div class="modal fade" id="ignismyModal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                       
						<div class="thank-you-pop">
						<!--	<img src="http://goactionstations.co.uk/wp-content/uploads/2017/03/Green-Round-Tick.png" alt=""> -->
						<img typeof="foaf:Image" src="https://careerassistconsultants.com/static/images/Green-Round-Tick.png" alt="Success">
							<h1>Thank You!</h1>
							<p>Your information is received and we will contact you soon</p>
 						</div>
                         
                    </div>
					
                </div>
            </div>
        </div>