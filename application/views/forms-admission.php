<?php  include_once ('header.php')?>
<style>
	#validationForm {
		display: none;
		color: red
	}
</style>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    $( function() {
        $( "#birthDate" ).datepicker();
    } );
</script>
<body>
<?php  include_once ('LeftPanel.php')?>
    <div id="right-panel" class="right-panel">

		<?php  include_once ('sub-header.php')?>

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>Admission Form</strong>
                            </div>
                            <div class="card-body card-block">
                                <form method="post" id="admission-form"  class="form-horizontal">
                                    <div class="row form-group">
                                    <strong class="header-menu">Personal Information </strong>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Full name</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="fullName" required max="20" min="03" name="fullName" placeholder="Full name" class="form-control"><small id="fullNameValidation" style="display: none; color: red" class="help-block form-text">Please Enter Full name</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="input-nameInitials" class=" form-control-label">Name with initials</label></div>
                                        <div  class="col-12 col-md-9"><input type="text" id="nameInitials"  required name="nameInitials" required placeholder="Name with initials" class="form-control"><small id="nameInitialsValidation" style="display: none; color: red" class="help-block form-text">Please Enter Name With Initials</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="input-date" class=" form-control-label">Date of Bith</label></div>
                                        <div class="col-12 col-md-9"><input type="date"  id="birthDate" name="birthDate"  required class="form-control"><small id="birthDateValidation" style="display: none; color: red" class="help-block form-text">Please Select Date of Bith</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="password-input" class=" form-control-label">Address</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="address" required name="address" placeholder="Address" class="form-control"><small id="addressValidation" style="display: none; color: red" class="help-block form-text">Please Enter Address</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="input-contact" class=" form-control-label">Contact numbers</label></div>
                                        <div class="col-12 col-md-9"><input type="phone" id="contact" required  max="10" min="10"name="contact" placeholder="Contact numbers" class="form-control"><small id="contactValidation" style="display: none; color: red" class="help-block form-text">Please Enter Valid Contact number</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <strong class="header-menu">Educational Information </strong>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="input-admission" class=" form-control-label">School Admission number</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="admission"  required name="admissonNumber" placeholder="School Admission number" class="form-control"><small id="admissionNumberValidation" style="display: none; color: red" class="help-block form-text">Please Enter School Admission number</small></div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="select" class=" form-control-label">Grade</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="grade" id="grade"  class="form-control">
                                                <option value="0">Select Grade</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                            </select>
											<small id="gradeValidation" style="display: none; color: red" class="help-block form-text">Please Select Grade</small>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="selectLg" class=" form-control-label">House</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="house" id="house" class="form-control">
                                                <option value="0">Select House</option>
                                                <option value="1">Option #1</option>
                                                <option value="2">Option #2</option>
                                                <option value="3">Option #3</option>
                                            </select>
											<small id="houseValidation" style="display: none; color: red" class="help-block form-text">Please Select House</small>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <strong class="header-menu">Visitors information </strong>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="input-visitor-name" class=" form-control-label">Visitor name</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="visitorName" required  name="visitorName" placeholder="Visitor name" class="form-control"><small id="visitorNameValidation" style="display: none; color: red" class="help-block form-text">Please Enter Visitor name</small></div>
                                    </div>
									<div class="row form-group">
										<div class="col col-md-3"><label for="input-contact" class=" form-control-label">NIC/Passport</label></div>
										<div class="col-12 col-md-9"><input type="phone" id="contact" required  max="10" min="10"name="contact" placeholder="NIC/Passport" class="form-control"><small id="contactValidation" style="display: none; color: red" class="help-block form-text">Please Enter Valid NIC/Passport</small></div>
									</div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="input-visitor-relationship" class=" form-control-label">Relationship with student</label></div>
                                        <div class="col-12 col-md-9"><input type="text" required id="visitorRelationship" name="visitorRelationship" placeholder="Relationship with student" class="form-control"><small id="visitorRelationshipValidation" style="display: none; color: red" class="help-block form-text">Please Enter Relationship with student</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="input-visitor-contact-number" class=" form-control-label">Contact number</label></div>
                                        <div class="col-12 col-md-9"><input type="phone" id="visitorContactNumber" required name="visitorContactNumber" placeholder="Visitor Contact number" class="form-control"><small id="visitorContactNumberValidation" style="display: none; color: red" class="help-block form-text">Please Enter Contact number</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="input-visitor-contact-occupation" class=" form-control-label">Occupation</label></div>
                                        <div class="col-12 col-md-9"><input type="text" required id="visitorOccupation" name="visitorOccupation" placeholder="Occupation" class="form-control"><small id="visitorOccupationValidation" style="display: none; color: red" class="help-block form-text">Please Enter Occupation</small></div>
                                    </div>

                                </form>
                            </div>
                            <div class="card-footer">
                                <input type="submit" id="submitAdmission" class="btn btn-primary btn-sm"></input>

                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>

    <div class="clearfix"></div>

	<?php  include_once ('footer.php')?>

</div>



<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/main.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</body>
</html>
<script>
    const _$admission_form = $('#admission-form');

    $('#submitAdmission').click(
        function (e) {
            var objData = {};
            e.preventDefault();
            var valid = true;

            $.each(_$admission_form.serializeArray(), function(_, kv) {
                var x = kv.value;
                if (x == "" || x == 0) {
                    var id = kv.name+"Validation";
                    $("#"+id).show();
                    valid = false;

                }else {
                    var contactNumberValidation = $('#contact').val().length;

                    if(contactNumberValidation != 10){
                        $("#contactValidation").show();
                        valid = false;
                    }else{
                        valid = true;
                    }

                    var visitorContactNumberValidation = $('#visitorContactNumber').val().length;

                    if(visitorContactNumberValidation != 10){
                        $("#visitorContactNumberValidation").show();
                        valid = false;
                    }else{
                        valid = true;
                    }

                    if(valid){


                        var id = kv.name+"Validation";
                        $("#"+id).hide();
                        valid = true;
                    }
                }

                objData[kv.name] = kv.value;
            });

            if(valid){
                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('index.php/student/RegisterStudent'); ?>",
                    data: objData,
                    success: function(response){
                        alert('success');
                        _$admission_form.trigger("reset");
                        console.log(response.status);
                        /*$("#message").html(response);
						$('#cartmessage').show();*/
                    },
                    error: function(e) {
                        alert(e);
                        console.log(e.status);
                    }
                });
            }else {
                alert('Validation Failed');
            }
        }
    );

</script>
