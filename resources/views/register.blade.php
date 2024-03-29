@extends('./layouts/base')
@section('title', 'Register-Telnet')
@section('headerLeft', 'Register')
@section('register', 'active')


@section('scripts-top')
        {{-- @vite('resources/css/registerform.css') --}}

@endsection

@section('body')

<div class="row justify-content-center">
  <div class=" col-12 col-xxl-6 col-xl-8 col-lg-8 col-md-8 col-sm-12">

   
    
    <form action="/subscriberregister" method="post" id="formgroup">
      @csrf
      @method('post')

      
        <h3 class="mb-1 text-center">Subscriber Registration</h3>
        <div class="row justify-content-start">
          <h4>Basic Information</h4><hr>
  
          <div class="col-12 col-xxl-6 col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-3">
            <div class="form-floating">
              <input type="text" class="form-control"  id="Subscriber_username" name="Subscriber_username" placeholder="User Name">
              <label for="Subscriber_username">User Name</label><br>
            </div>
          </div>
  
          <div class="col-12 col-xxl-6 col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-3">
            <div class="form-floating">
              <input type="text" class="form-control" id="Subscriber_password" name="Subscriber_password" placeholder="User Password">
              <label for="Subscriber_password">User Password</label><br>
            </div>
          </div>
  
          <div class="col-12 col-xxl-6 col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-3" id="subscriberType">
            <div class="form-floating">
              <select class="form-control" id="subscriber_type" name="subscriber_type">
                <option selected value="home">Home User</option>
                <option value="organization">Organization User</option>
              </select>
              <label for="subscriber_type" id="typeSelectPlaceholder" class="">Select Subscriber Type</label>
            </div>
          </div>
  
          <div class="col-12 col-xxl-6 col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-3" id="connectionType">
            <div class="form-floating">
              <select class="form-control" id="connection_type" name="connection_type">
                <option selected value="ppoe">PPOE</option>
                <option value="ipoe">IPoE</option>
                <option value="static">Static IP</option>
              </select>
              <label for="connection_type" id="connectionSelectPlaceholder" class="">Select Connection Type</label>
            </div>
          </div>
  
          <div class="col-12 col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-3">
            <label for="account_enabled">Account Enabled:</label>
            <div class="form-switch fs-4">
              <input type="checkbox" id="account_enabled" class="form-check-input" role="switch" name="account_enabled" checked>
            </div>
          </div>
  
          <div class="col-12 col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-3">
            <label for="portal_enabled">Portal Enabled:</label>
            <div class="form-switch fs-4">
              <input type="checkbox" id="portal_enabled" class="form-check-input" role="switch" name="portal_enabled" checked>
            </div>
          </div>
  
          <div class="col-12 col-xxl-6 col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-3">
            <div class="form-floating">
              <input type="text" class="form-control" id="portal_user_name" name="portal_user_name" placeholder="Portal Username">
              <label for="portal_user_name">Portal Username:</label>
            </div>
          </div>
  
          <div class="col-12 col-xxl-6 col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-3">
            <div class="form-floating">
              <input type="password" class="form-control" id="portal_password" name="portal_password" placeholder="Portal Password">
              <label for="portal_password">Portal Password:</label>
            </div>
          </div>
  
          <div class="col-12 col-xxl-6 col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-3">
            <div class="form-floating">
              <select class="form-control" id="internet_package" name="internet_package">
                <option selected value="internet">50 Mbps 1months</option>
                <option value="internet">50 Mbps 3months</option>
                <option value="internet">50 Mbps 6months</option>
                <option value="internet">50 Mbps 12months</option>
                <option value="internet">150 Mbps 12months</option>
              </select>
              <label for="internet_package">Select Internet Package</label>
            </div>
          </div>
          <div class="col-12 col-xxl-6 col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-3">
            <div class="form-floating">
              <select class="form-control" id="iptv_package" name="iptv_package">
                <option selected value="none">None</option>
                <option value="iptv">With TV</option>
              </select>
              <label for="internet_package">Select Internet Package</label>
            </div>
          </div>
  
          {{-- <div class="col-12">
            <ol type="1" class="row p-0" id="">
              <div id="serviceList1" class="col-12 col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-3">
                <li class="border border-2 border-secondary p-2">
                    <label for="service_table">Select service Table</label>
                    <select class="form-control" id="service_table" name="service_table">
                      <option selected>Select Service table</option>
                      <option value="internet">Internet</option>
                      <option value="ip_tv">IP TV</option>
                      <option value="netflix">Netflix</option>
                    </select>
          
                    <label for="package_id">Select service Id</label>
                    <select class="form-control" id="package_id" name="package_id">
                      <option selected>Select Service Id</option>
                      <option value="123">sda122s2</option>
                      <option value="456">hhr12kg3</option>
                      <option value="135">asd223</option>
                    </select>
                </li>
              </div>
            </ol>
          </div>
          <div class="col-12 col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-3">
            <a type="button" class="form-control btn btn-outline-dark" id="add_service">Add Service</a>
            <a type="button" class="form-control btn btn-outline-danger" id="remove_service" hidden>remove Service</a>
          </div> --}}
  
        </div>
      
      
      
        
          <div class="row mt-2">
            <h4>Subscriber Information</h4><hr>
            
            <div class="col-12 col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-3">
              <div class="form-floating">
                <input type="text" class="form-control" id="Subscriber_firstname" name="Subscriber_firstname" placeholder="First Name">
                <label for="Subscriber_firstname">First Name</label><br>
              </div>
            </div>
    
            <div class="col-12 col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-3">
              <div class="form-floating">
                <input type="text" class="form-control" id="Subscriber_middlename" name="Subscriber_middlename" placeholder="Middle Name">
                <label for="Subscriber_username">Middle Name</label><br>
              </div>
            </div>
    
            <div class="col-12 col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-3">
              <div class="form-floating">
                <input type="text" class="form-control" id="Subscriber_lastname" name="Subscriber_lastname" placeholder="Last Name">
                <label for="Subscriber_lastname">Last Name</label><br>
              </div>
            </div>
          
      
            <div class="col-12 col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-3 form-group">
              <h6>Gender:</h6>
              <input type="radio" id="male" name="gender" value="male">
              <label for="male">Male</label>
              <input type="radio" id="female" name="gender" value="female">
              <label for="female">Female</label>
              <input type="radio" id="other" name="gender" value="other">
              <label for="other">Other</label>
            </div>
    
    
            <div class="col-12 col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-3">
              <div class="form-floating">
                <input type="text" class="form-control" id="Subscriber_occupation" name="Subscriber_occupation" placeholder="occupation">
                <label for="Subscriber_occupation">occupation</label><br>
              </div>
            </div>
    
            <div class="col-12 col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-3">
              <div class="form-floating">
                <input type="text" class="form-control" id="Subscriber_pan" name="Subscriber_pan" placeholder="pan">
                <label for="Subscriber_pan">PAN</label><br>
              </div>
            </div>
    
            <div class="col-12 col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-3">
              <div class="form-floating">
                <input type="text" class="form-control" id="Subscriber_fathername" name="Subscriber_fathername" placeholder="fathername">
                <label for="Subscriber_fathername">Father's Full Name</label><br>
              </div>
            </div>
    
            <div class="col-12 col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-3">
              <div class="form-floating">
                <input type="text" class="form-control" id="Subscriber_mothername" name="Subscriber_mothername" placeholder="mothername">
                <label for="Subscriber_mothername">Mother's Full Name</label><br>
              </div>
            </div>
    
            <div class="col-12 col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-3">
              <div class="form-floating">
                <input type="text" class="form-control" id="Subscriber_grandparentname" name="Subscriber_grandparentname" placeholder="grandparentname">
                <label for="Subscriber_grandparentname">Grandparent's Full Name</label><br>
              </div>
            </div>
    
            
            <div class="col-12 col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-3">
              <div class="form-floating">
                <input type="text" class="form-control" id="Subscriber_spousename" name="Subscriber_spousename" placeholder="spouseName">
                <label for="Subscriber_spousename">Spouse's Full Name</label><br>
              </div>
            </div>
    
    
            <div class="col-12 col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-3">
              <div class="form-floating">
              <select class="form-control" id="identity_proof_type" name="identity_proof_type">
                <option selected>Document Type </option>
                <option value="nationalIdentityCard">National Identity Card</option>
                <option value="citizenship">Citizenship</option>
                <option value="passport">Passport</option>
                <option value="drivingLicense">Driving License</option>
                <option value="other">Other</option>
              </select>
              <label for="identity_proof_type">Identity Proof Type:</label>
    
            </div></div>
    
            <div class="col-12 col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-3">
              <label for="identity_proof_photo">Identity Proof Photo:</label>
              <input type="file" class="form-control" id="identity_proof_photo" name="identity_proof_photo">
            </div>
    
    
            <div class="col-12 col-xxl-6 col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-3">
              <div class="form-floating">
                <input type="text" class="form-control" id="Subscriber_email" name="Subscriber_email" placeholder="subscriberemail">
                <label for="Subscriber_email">Subscriber's Email</label><br>
              </div>
            </div>
    
            <div class="col-12 col-xxl-6 col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-3">
              <div class="form-floating">
                <input type="text" class="form-control" id="Subscriber_referedby" name="Subscriber_referedby" placeholder="subscriberreferedby">
                <label for="Subscriber_referedby">Referred By</label><br>
              </div>
            </div>
    
          </div>
        
     

        
          <div class="row mt-2">
            <h4>Contact Information</h4><hr>
            
            <div class="col-12 col-xxl-6 col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-3">
              <div class="form-floating">
                <input type="tel" class="form-control" id="Subscriber_contact" name="Subscriber_contact" placeholder="contact">
                <label for="Subscriber_contact">Phone Number</label><br>
              </div>
            </div>
        
            <div class="col-12 col-xxl-6 col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-3">
              <div class="form-floating">
                <input type="tel" class="form-control" id="Subscriber_cellcontact" name="Subscriber_cellcontact" placeholder="cellcontact">
                <label for="Subscriber_cellcontact">Cell Phone Number</label><br>
              </div>
            </div>
        
            <h4>Permanent Address</h4>
            
            <div class="col-12 col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-3">
              <div class="form-floating">
              <select class="form-control" id="permanent_state" name="permanent_state">
                <option selected>Select State</option>
                <option value="Koshi">Koshi</option>
                <option value="Madhesh">Madhesh</option>
                <option value="Bagmati">Bagmati</option>
                <option value="Gandaki">Gandaki</option>
                <option value="Lumbini">Lumbini</option>
                <option value="Karnali">Karnali</option>
                <option value="Sudurpashchim">Sudurpashchim</option>
              </select>
              <label for="permanent_state">State</label>
        
            </div></div>
        
            <div class="col-12 col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-3">
              <div class="form-floating">
              <select class="form-control" id="permanent_district" name="permanent_district">
                <option selected>Select District</option>
                <option value="Koshi">Koshi</option>
                <option value="Madhesh">Madhesh</option>
                <option value="Bagmati">Bagmati</option>
                <option value="Gandaki">Gandaki</option>
                <option value="Lumbini">Lumbini</option>
                <option value="Karnali">Karnali</option>
                <option value="Sudurpashchim">Sudurpashchim</option>
              </select>
              <label for="permanent_state">District</label>
        
            </div></div>
        
            <div class="col-12 col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-3">
              <div class="form-floating">
              <select class="form-control" id="permanent_vdcmun" name="permanent_vdcmun">
                <option selected>Select VDC/Municipality</option>
                <option value="Koshi">Koshi</option>
                <option value="Madhesh">Madhesh</option>
                <option value="Bagmati">Bagmati</option>
                <option value="Gandaki">Gandaki</option>
                <option value="Lumbini">Lumbini</option>
                <option value="Karnali">Karnali</option>
                <option value="Sudurpashchim">Sudurpashchim</option>
              </select>
              <label for="permanent_vdcmun">VDC/MUNICIPALITY</label>
        
            </div></div>
        
            <div class="col-12 col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-3">
              <div class="form-floating">
              <select class="form-control" id="permanent_ward" name="permanent_ward">
                <option selected>Select Ward</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
              </select>
              <label for="permanent_ward">Ward</label></label>
        
            </div></div>
        
        
            <div class="col-12 col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-3">
              <div class="form-floating">
                <input type="text" class="form-control" id="Subscriber_permanent_streetname" name="Subscriber_permanent_streetname" placeholder="Subscriber_permanent_streetname">
                <label for="Subscriber_permanent_streetname">Street Name</label><br>
              </div>
            </div>
          
        
        
        
            <div class="col-12 col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-3">
              <div class="form-floating">
                <input type="text" class="form-control" id="Subscriber_permanent_streetnumber" name="Subscriber_permanent_streetnumber" placeholder="Subscriber_permanent_streetnumber">
                <label for="Subscriber_permanent_streetnumber">Street Number</label><br>
              </div>
            </div>
            <h4>Current Address <input type="checkbox" class="form-check-input ms-4 fs-5" id="copy-address" name="same_as_permanent" placeholder="Same As permanent">
              <label for="copy-address" class="fs-5">same as permanent</label></h4>
            <div class="col-12 col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-3">
              <div class="form-floating">
              <select class="form-control" id="current_state" name="current_state">
                <option selected>Select State</option>
                <option value="Koshi">Koshi</option>
                <option value="Madhesh">Madhesh</option>
                <option value="Bagmati">Bagmati</option>
                <option value="Gandaki">Gandaki</option>
                <option value="Lumbini">Lumbini</option>
                <option value="Karnali">Karnali</option>
                <option value="Sudurpashchim">Sudurpashchim</option>
              </select>
              <label for="current_state">State</label>
        
            </div></div>
        
            <div class="col-12 col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-3">
              <div class="form-floating">
              <select class="form-control" id="current_district" name="current_district">
                <option selected>Select District</option>
                <option value="Koshi">Koshi</option>
                <option value="Madhesh">Madhesh</option>
                <option value="Bagmati">Bagmati</option>
                <option value="Gandaki">Gandaki</option>
                <option value="Lumbini">Lumbini</option>
                <option value="Karnali">Karnali</option>
                <option value="Sudurpashchim">Sudurpashchim</option>
              </select>
              <label for="current_district">District</label>
        
            </div></div>
        
            <div class="col-12 col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-3">
              <div class="form-floating">
              <select class="form-control" id="current_vdcmun" name="current_vdcmun">
                <option selected>Select VDC/Municipality</option>
                <option value="Koshi">Koshi</option>
                <option value="Madhesh">Madhesh</option>
                <option value="Bagmati">Bagmati</option>
                <option value="Gandaki">Gandaki</option>
                <option value="Lumbini">Lumbini</option>
                <option value="Karnali">Karnali</option>
                <option value="Sudurpashchim">Sudurpashchim</option>
              </select>
              <label for="current_vdcmun">VDC/MUNICIPALITY</label>
        
            </div></div>
        
            <div class="col-12 col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-3">
              <div class="form-floating">
              <select class="form-control" id="current_ward" name="current_ward">
                <option selected>Select Ward</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
              </select>
              <label for="current_ward">Ward</label></label>
        
            </div></div>
        
        
            <div class="col-12 col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-3">
              <div class="form-floating">
                <input type="text" class="form-control" id="Subscriber_current_streetname" name="Subscriber_current_streetname" placeholder="Subscriber_current_streetname">
                <label for="Subscriber_current_streetname">Street Name</label><br>
              </div>
            </div>
          
        
        
        
            <div class="col-12 col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-3">
              <div class="form-floating">
                <input type="text" class="form-control" id="Subscriber_current_streetnumber" name="Subscriber_current_streetnumber" placeholder="Subscriber_current_streetnumber">
                <label for="Subscriber_current_streetnumber">Street Number</label><br>
              </div>
            </div>
        
        
          </div>
        
              
     
            
        
              <div class="row mt-2">
                <h4>Installation Information</h4><hr>
                
                <div class="col-12 col-xxl-6 col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-3">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="installername" name="installername" placeholder="installername">
                    <label for="installername">Installer's Name</label><br>
                  </div>
                </div>
        
                <div class="col-12 col-xxl-6 col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-3">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="accesspoint" name="accesspoint" placeholder="accesspoint">
                    <label for="accesspoint">Access Point's Name</label><br>
                  </div>
                </div>
        
                <div class="col-12 col-xxl-6 col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-3">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="dropwire" name="dropwire" placeholder="dropwire">
                    <label for="dropwire">Drop-wire Serial Number</label><br>
                  </div>
                </div>
        
                
        
                <div class="col-12 col-xxl-6 col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-3">
                  <div class="form-floating">
                  <select class="form-control" id="iptype" name="iptype">
                    <option selected>Select IP Type</option>
                      <option value="static">static</option>
                    <option value="dynamic">Dynamic</option>
                    
                  </select>
                  <label for="iptype">IP Type</label></label>
        
                </div></div>
        
                <div class="col-12 col-xxl-6 col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-3">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="ipadd" name="ipadd" placeholder="ipadd">
                    <label for="ipadd">IP Address</label><br>
                  </div>
                </div>
        
                <div class="col-12 col-xxl-6 col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-3">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="vlanid" name="vlanid" placeholder="vlanid">
                    <label for="vlanid">VLAN ID</label><br>
                  </div>
                </div>
        
                <div class="col-12 col-xxl-6 col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-3">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="cpemodel" name="cpemodel" placeholder="cpemodel">
                    <label for="cpemodel">CPE Model</label><br>
                  </div>
                </div>
        
                <div class="col-12 col-xxl-6 col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-3">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="cpemacadd" name="cpemacadd" placeholder="cpemacadd">
                    <label for="cpemacadd">CPE Mac Address</label><br>
                  </div>
                </div>
        
                <div class="col-12 col-xxl-6 col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-3">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="leadid" name="leadid" placeholder="leadid">
                    <label for="leadid">Lead ID</label><br>
                  </div>
                </div>
        
                <div class="col-12 col-xxl-6 col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-3">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="orgname" name="orgname" placeholder="orgname">
                    <label for="orgname">Organization's Name</label><br>
                  </div>
                </div>
        
              </div>
            
      
    <div class="buttons" style="display: flex; justify-content: space-between" >
      {{-- <button type="button" id="prevbtn" class="btn btn-outline-danger">Previous</button>
      <button type="button" id="nxtbtn" class="btn btn-outline-secondary px-4">Next</button> --}}
      <button type="submit" id="submitbtn" class="btn btn-outline-success" >Submit</button>
    </div>

    </form>
  </div>
</div>

@endsection


@section('script-end')
@vite("resources/js/registerform.js")
@vite("resources/js/selectservice.js")
@endsection