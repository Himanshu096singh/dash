$("#enquirycountry").countrySelect({
    preferredCountries: []
});
$("#country_selector").countrySelect({
    preferredCountries: []
});
function nameValidate(nameval, errorname) {
    var nameRegex = /^[a-zA-Z0-9 ]{3,30}$/;
    if (nameval.value !== "" && nameRegex.test(nameval.value)) {
        errorname.innerHTML = "";
        errorname.style.borderColor = "#ccc";
        nameflag = true;
    } else {
        errorname.style.borderColor = "#d9534f";
        errorname.innerHTML = "*Please Enter your correct Name";
        nameflag = false;
    }
}

function emailValidate(email, emailErr) {
    var emailRegex = /^[a-zA-Z0-9]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/;
    if (email.value !== "" && emailRegex.test(email.value)) {
        emailErr.innerHTML = "";
        email.style.borderColor = "#ccc";
        emailflag = true;
    } else {
        email.style.borderColor = "#d9534f";
        emailErr.innerHTML = "*Please Enter your correct Email";
        email.placeholder = '*Please Enter your correct Email';
        emailflag = false;
    }
}

function phoneValidate(phone, phoneErr) {
    var num = phone.value.length;
    const nb = phone.value;
    const exp1 = /[0-9]{9,12}$/;
    var val = 0;
    if ((!exp1.test(nb))) {
        val = 0;
    } else {
        val = 1;
    }
    if ((val == 1) && (num > 8) && (num < 14)) {
        phoneflag = true;
        phone.style.borderColor = "#ccc";
        phoneErr.innerHTML = "";
    } else if (phone.value === "") {
        phone.style.borderColor = "#d9534f";
        phoneErr.innerHTML = '*Please Enter your correct Number';
        phoneflag = false;
    } else {
        phone.style.borderColor = "#d9534f";
        phoneErr.innerHTML = '*Please Enter your correct Number';
        phoneflag = false;
    }
}

function courseValidate(course, errorcourse) {
    if (course.value !== "") {
        errorcourse.innerHTML = "";
        errorcourse.style.borderColor = "#ccc";
        courseflag = true;
    } else {
        errorcourse.style.borderColor = "#d9534f";
        errorcourse.innerHTML = "*Please Select Course";
        courseflag = false;
    }
}
function genderValidate(gender, errorgender) {
    if (gender.value !== "") {
        errorgender.innerHTML = "";
        errorgender.style.borderColor = "#ccc";
        genderflag = true;
    } else {
        errorgender.style.borderColor = "#d9534f";
        errorgender.innerHTML = "*Please Select Gender";
        genderflag = false;
    }
}

function roomValidate(room, errorroom) {
    if (room.value !== "") {
        errorroom.innerHTML = "";
        errorroom.style.borderColor = "#ccc";
        roomflag = true;
    } else {
        errorroom.style.borderColor = "#d9534f";
        errorroom.innerHTML = "*Please Select Room Type";
        roomflag = false;
    }
}

function enquirysubmit(){
    const name = document.querySelector("#enquiryname");
    const email = document.querySelector("#enquiryemail");
    const country = document.querySelector("#enquirycountry");
    const phone = document.querySelector("#enquiryphone");
    const course = document.querySelector("#enquirycourse");
    const gender = document.querySelector("#enquirygender");
    const room = document.querySelector("#enquiryroom");
    const message = document.querySelector("#enquirymessage");
    const type = document.querySelector("#enquirytype");

    const errorname = document.querySelector("#errorname");
    const erroremail = document.querySelector("#erroremail");
    const errorcountry = document.querySelector("#errorcountry");
    const errorphone = document.querySelector("#errorphone");
    const errorcourse = document.querySelector("#errorcourse");
    const errorgender = document.querySelector("#errorgender");
    const errorroom = document.querySelector("#errorroom");
    const enqform = document.querySelector("#enquiryform");
    const successenquiry = document.querySelector("#successenquiry");
    const errorenquiry = document.querySelector("#errorenquiry");
    const enquiryloader = document.querySelector("#enquiryloader");

    nameValidate(name, errorname);
    emailValidate(email, erroremail);
    phoneValidate(phone, errorphone);
    courseValidate(course, errorcourse);
    genderValidate(gender, errorgender);
    roomValidate(room, errorroom);

    if (nameflag && emailflag && phoneflag  && courseflag && genderflag && roomflag ){
        // console.log(name.value, email.value, phone.value, country.value,  gender.value, room.value, message.value )
        enquiryloader.classList.remove("d-none");
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: "/enquiry",
            type: "POST",
            data: { name: name.value, email: email.value, phone: phone.value, country: country.value, course:course.value, gender: gender.value, room: room.value, message: message.value,type:type.value},
            success: function (data) {
                if (data == true) {
                  enqform.classList.add("d-none");
                  enquiryloader.classList.add("d-none");
                  successenquiry.classList.remove("d-none");
                } else {
                    enquiryloader.classList.add("d-none");
                    errorenquiry.classList.remove("d-none");
                }
            }
        });
    } else {
        console.log(0)
    }
}