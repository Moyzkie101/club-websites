function editPos(that){
    pos = $(that).attr('data-pos');
    order = $(that).attr('data-order');
    id = $(that).attr('data-id');

    $('#position').val(pos);
    $('#order').val(order);
    $('#pos_id').val(id);
}

function editChair(that){
    title = $(that).attr('data-title');
    id = $(that).attr('data-id');

    $('#chair').val(title);
    $('#chair_id').val(id);
}

function editHousehold(that){
    id = $(that).attr('data-id');
    house = $(that).attr('data-household');

    $('#id').val(id);
    $('#house').val(house);
}

function editPurok(that){
    purok = $(that).attr('data-name');
    details = $(that).attr('data-details');
    id = $(that).attr('data-id');
    title =$(that).attr('data-title');
    updates =$(that).attr('data-updates');

    $('#purok').val(purok);
    $('#details').val(details);
    $('#purok_id').val(id);
    $('#title').val(title);
    $('[name="inlineRadioOptions"]').val([updates]);
}

function editBeneficiary(that){
    beneficiary = $(that).attr('data-name');
    benid = $(that).attr('data-id');

    $('#beneficiary').val(beneficiary);
    $('#ben_id').val(benid);
}

function editPrecinct(that){
    precinct = $(that).attr('data-precinct');
    details = $(that).attr('data-details');
    id = $(that).attr('data-id');

    $('#precinct').val(precinct);
    $('#details').val(details);
    $('#precinct_id').val(id);
}

function editOfficial(that){

    id = $(that).attr('data-id');
    na = $(that).attr('data-name');
    chair = $(that).attr('data-chair');
    pos = $(that).attr('data-pos');
    start = $(that).attr('data-start');
    end = $(that).attr('data-end');
    contact = $(that).attr('data-contact');
    stats = $(that).attr('data-status');

    $('#off_id').val(id);
    $('#name').val(na);
    $('#chair').val(chair);
    $('#position').val(pos);
    $('#start').val(start);
    $('#end').val(end);
    $('#contact').val(contact);
    $('#status').val(stats);
}

function editResident(that){
    id          = $(that).attr('data-id');
    pic         = $(that).attr('data-img');
    nat_id 		= $(that).attr('data-national');
    fname 		= $(that).attr('data-fname');
	mname 		= $(that).attr('data-mname');
    lname 		= $(that).attr('data-lname');
	alias 		= $(that).attr('data-alias');
    bplace 	    = $(that).attr('data-bplace');
	bdate 		= $(that).attr('data-bdate');
    age 		= $(that).attr('data-age');
    cstatus 	= $(that).attr('data-cstatus');
	gender 	    = $(that).attr('data-gender');
    purok 		= $(that).attr('data-purok');
    house       = $(that).attr('data-household');
	vstatus 	= $(that).attr('data-vstatus');
    // indetity 	= $(that).attr('data-indetity');
    identify    = $(that).attr('data-identify');
    email 	    = $(that).attr('data-email');
	number 	    = $(that).attr('data-number');
    address 	= $(that).attr('data-address');
    citi 	    = $(that).attr('data-citi');
    occu 	    = $(that).attr('data-occu');
    vital 	    = $(that).attr('data-vital');
    remarks 	= $(that).attr('data-remarks');

    // $('#indetity').prop('disabled', false);

    $('#res_id').val(id);
    $('#nat_id').val(nat_id);
    $('#fname').val(fname);
    $('#mname').val(mname);
    $('#lname').val(lname);
    $('#alias').val(alias);
    $('#bplace').val(bplace);
    $('#bdate').val(bdate);
    $('#age').val(age);
    $('#cstatus').val(cstatus);
    $('#gender').val(gender);
    $('#purok').val(purok);
    $('#household').val(house);
    $('#vstatus').val(vstatus);
    $('#identify').val(identify);
    // if(indetity===''){
    //     $('#indetity').prop('disabled', 'disabled');
    // }else{  
    //     $('#indetity').val(indetity);
        
    // }
    $('#email').val(email);
    $('#number').val(number);
    $('#address').text(address);
    $('#occupation').val(occu);
    $('#citizenship').val(citi);
    $('#remarks').val(remarks);
 
    if(vital==1){
        $("#alive").prop("checked", true);
    }else{
        $("#dead").prop("checked", true);
    }

    var str = pic;
    var n = str.includes("data:image");
    if(!n){
        pic = 'assets/uploads/resident_profile/'+pic;
    }
    $('#image').attr('src', pic);
}


function editBlotter1(that){
    id          = $(that).attr('data-id');
    complainant         = $(that).attr('data-complainant');
    respondent 		= $(that).attr('data-respondent');
	victim 		= $(that).attr('data-victim');
    type 		= $(that).attr('data-type');
	l 		= $(that).attr('data-l');
    date 	    = $(that).attr('data-date');
	time 		= $(that).attr('data-time');
    details 		= $(that).attr('data-details');
    status 	= $(that).attr('data-status');

    $('#blotter_id').val(id);
    $('#complainant').val(complainant);
    $('#respondent').val(respondent);
    $('#victim').val(victim);
    $('#type').val(type);
    $('#location').val(l);
    $('#date').val(date);
    $('#time').val(time);
    $('#details').val(details);
    $('#status').val(status);
}

$('.vstatus').change(function(){
    var val = $(this).val();
    if(val=='No'){
        $('.indetity').prop('disabled', 'disabled');
    }else{
        $('.indetity').prop('disabled', false);
    }
});

$(".toggle-password").click(function() {
    $(this).toggleClass("fa-eye fa-eye-slash");
    var input = $($(this).attr("toggle"));
    if (input.attr("type") == "password") {
      input.attr("type", "text");
    } else {
      input.attr("type", "password");
    }
});


Webcam.set({
    height: 250,
    image_format: 'jpeg',
    jpeg_quality: 90
});

$('#open_cam').click(function(){
    Webcam.attach( '#my_camera' );
});

function save_photo() {
    // actually snap photo (from preview freeze) and display it
    Webcam.snap( function(data_uri) {
        // display results in page
        document.getElementById('my_camera').innerHTML = 
        '<img src="'+data_uri+'"/>';
        document.getElementById('profileImage').innerHTML = 
        '<input type="hidden" name="profileimg" id="profileImage" value="'+data_uri+'"/>';
    } );
}

$('#open_cam1').click(function(){
    Webcam.attach( '#my_camera1' );
});

function save_photo1() {
    // actually snap photo (from preview freeze) and display it
    Webcam.snap( function(data_uri) {
        // display results in page
        document.getElementById('my_camera1').innerHTML = 
        '<img src="'+data_uri+'"/>';
        document.getElementById('profileImage1').innerHTML = 
        '<input type="hidden" name="profileimg" id="profileImage1" value="'+data_uri+'"/>';
    } );
}

function goBack() {
  window.history.go(-1);
}