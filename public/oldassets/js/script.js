// Step Form JS Starts Here ----------------------------------------------------

$(".openMyForm222").click(function () {
    $("body").css("height","100vh");
    $("body").css("overflow","hidden");
    $("#boxSpinner").show();
    setTimeout(function () {
        $("#boxSpinner").hide();
        $("#myForm222").show();
        $(document).ready(function () {
            $(".label-box1").click(function () {
                $("#box1").slideUp(500);
                $("#box2").slideDown(500);
            });
            $(".label-box2").click(function () {
                $("#box2").slideUp(500);
                $("#box3").slideDown(500);
            });
            $(".label-box3").click(function () {
                $("#box3").slideUp(500);
                $("#box4").slideDown(500);
            });
        });
    }, 2000);
});

// Form Validation for Step Form -----------------------------------------------

    function mailvalidate() {
        let mail = document.getElementById('inp18');
        let mailReg = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
        let mailErr = document.getElementById('mailErr');
        
        // Validation for Mail Input -------------------------------------------
        if (mail.value == "") {
            mailErr.innerHTML = "This Feild Can't be Empty";
            mail.style.borderColor = "red";
            $("#ques6").html('<i class="fa-regular fa-circle-xmark my-cross-after"></i>');
        }
    
        else if (!mailReg.test(mail.value)) {
            mailErr.innerHTML = "Enter a Valid Mail";
            mail.style.borderColor = "red";
            $("#ques6").html('<i class="fa-regular fa-circle-xmark my-cross-after"></i>');
        }
        
        else {
            mailErr.innerHTML = "";
            mail.style.borderColor = "white";
            $("#box4").slideUp(500);
            $("#box5").slideDown(500);
        }
    }

// Form Validation for Step Form -----------------------------------------------

function formValidate() {
    // Get all the inputs ------------------------------------------------------
    let num = document.getElementById('inp20');
    let code = document.getElementById('inp19');

    // This will hold the Error Message ----------------------------------------
    let numErr = document.getElementById('numErr');

    // Regular Expressions for Comparisons -------------------------------------
    let numReg = /^[0-9]*$/;

    // Variables for validation that all inputs are valid or not ---------------
    let numValid, val; 

    // Validation for number according to country code -------------------------
    let codeVal = code.value;

    // For comparison for a valid number ---------------------------------------
    const dig1 = ["205", "251", "256", "334", "659", "938", "603", "907", "201", "551", "609", "640", "732", "848", "856", "862", "908", "973", "480", "520", "602",
    "623", "928", "505", "575", "479", "501", "870", "212", "315", "332", "347", "516", "518", "585", "607", "631", "646", "680", "716", "718", "838", "845", "914",
    "917", "929", "934", "209", "213", "279", "310", "323", "341", "408", "415", "424", '442', "510", "530", "559", "562", "619", "626", "628", "650", "657", "661",
    "669", "707", '714', "747", "760", "805", "818", "820", "831", "858", "909", "916", "925", "949", "951", "252", "336", "704", "743", "828", "910", "919", "980",
    "984", "303", "719", "720", "970", "701", "203", "475", "860", "959", "216", "220", "234", "283", "326", "330", "380", "419", "440", "513", "567", "614", "740",
    "937", "302", "405", "539", "572", "580", "918", "239", "305", "321", "352", "386", "407", "561", "689", "727", "754", "772", "786", "813", "850", "863", "904",
    "941", "954", "458", "503", "541", "971", "229", "404", "470", "478", "678", "706", "762", "770", "912", "215", "223", "267", "272", '412', "445", "484", "570",
    "610", "717", "724", "814", "878", "808", "401", "208", "986", "803", "839", "843", "854", "864", "217", "224", "309", "312", "331", "618", "630", "708", "773",
    "779", "815", "847", "872", "605", "219", "260", "317", "463", "574", "765", "812", "930", "423", "615", "629", "731", "865", "901", "931", "219", "260", "317",
    "463", "574", "765", "812", "930", "319", "515", "563", "641", "712", "210", "214", "254", "281", "325", "346", "361", "409", "430", "432", "469", "512", "682",
    "713", "726", "737", "806", "817", "830", "832", "903", "915", "936", "940", "956", "972", "979", "316", "620", "785", "913", "270", "364", "502", "606", "859",
    "385", "435", "801", "225", "318", "337", "504", "985", "802", "207", "276", "434", "540", "571", "703", "757", "804", "227", "240", "301", "410", "443", "667",
    "206", "253", "360", "425", "509", "564", "339", "351", "413", "508", "617", "774", "781", '857', "978", "202", "231", "248", "269", "313", "517", "586", "616",
    "734", "810", "906", "947", "989", "304", "681", "218", "320", "507", "612", "651", "763", "952", "262", "414", "534", "608", "715", "920", "228", "601", "662",
    "769", '307', "684", "314", "417", "573", "636", "660", "816", "671", "406", "670", "308", "402", "531", "787", "939", "702", "725", "775", "340"];
    // for US ------------------------------------------------------------------

    const dig2 = ["780", "825", "587", "403", "250", "604", "236", "672", "778", "431", "204", "506", "428", "709", "867", "902", "782", "807", "905", "705",
    "647", "613", "548", "519", "437", "416", "365", "343", "289", "249", "226", "782", "902", "438", "450", "514", "418", "367", "819", "354", "579", "873",
    "581", "306", "639"];
    // for CA ------------------------------------------------------------------

    const dig3 = ['070', '071', '073', '074', '075', '076', '077', '078', '079', '018', '012', '013', '014', '015', '016', '017', '018', '019']; 
    // for UK ------------------------------------------------------------------

    const dig4 = ['70', '71', '73', '74', '75', '76', '77', '78', '79', '18', '12', '13', '14', '15', '16', '17', '18', '19']; 
    // for UK ------------------------------------------------------------------

    let numString = num.value.toString();
    const ax = numString.slice(0, 3);
    const ax2 = numString.slice(0, 2);

    // Validation for Contact Number Input -------------------------------------
    
    if (num.value == "") {
        numErr.innerHTML = "This Feild Can't be Empty";
        num.style.borderColor = "red";
        numValid = 0;
    } else if (num.value.length < 10 || num.value.length > 13 || !numReg.test(num.value)) {
        numErr.innerHTML = "Incorrect Number";
        num.style.borderColor = "red";
        numValid = 0;
    } else {
        numErr.innerHTML = "";
        num.style.borderColor = "lightgrey";
        numValid = 1;
    }

    // Validation for country code ---------------------------------------------
    if (codeVal == "+1 US") {
        if (dig1.indexOf(ax) >= 0 && numValid == 1) {
            numErr.innerHTML = "";
            num.style.borderColor = "lightgrey";
            val = 1;
        }
        else {
            numErr.innerHTML = "Incorrect Number";
            num.style.borderColor = "red";
            val = 0;
        }
    } else if (codeVal == "+1 CA") {
        if (dig2.indexOf(ax) >= 0 && numValid == 1) {
            numErr.innerHTML = "";
            num.style.borderColor = "lightgrey";
            val = 1;
        }
        else {
            numErr.innerHTML = "Incorrect Number";
            num.style.borderColor = "red";
            val = 0;
        }
    } else if (codeVal == "+44 UK") {
        if (dig3.indexOf(ax) >= 0 || dig4.indexOf(ax2) >= 0 && numValid == 1) {
            numErr.innerHTML = "";
            num.style.borderColor = "lightgrey";
            val = 1;
        }
        else {
            numErr.innerHTML = "Incorrect Number";
            num.style.borderColor = "red";
            val = 0;
        }
    } else if (codeVal == "+61 AU") {
         val = 1;
    } else if (codeVal == "+64 NZ") {
         val = 1;
    }
    //Prevent submitting the form untill all inputs are validated --------------
    
    if (numValid && val) {
        $("#formBoxMain").hide();
        $("#submitBox").show();
        
        let radioButtons2 = document.querySelectorAll('input[name="issue"]');
        for (let radioButton of radioButtons2) {
            if (radioButton.checked) {
                // console.log("Issue: " + radioButton.value);
                issue = radioButton.value;
            }
        }
        let radioButtons1 = document.querySelectorAll('input[name="device"]');
        for (let radioButton of radioButtons1) {
            if (radioButton.checked) {
                // console.log("Device: " + radioButton.value);
                device = radioButton.value;
            }
        }
        let radioButtons3 = document.querySelectorAll('input[name="software"]');
        for (let radioButton of radioButtons3) {
            if (radioButton.checked) {
                // console.log("OS: " + radioButton.value);
                software = radioButton.value;
            }
        }
        
        let mail = document.getElementById("inp18");
        let email = mail.value;
        let countrycode =  code.value;
        let mobile = num.value;
        /*console.log("issue: "+issue);
        console.log("device: " +device);
        console.log("software " + software);
        console.log("Email: " + email);
        console.log("Country Code: " + countrycode);
        console.log("Contact Number: " + mobile);*/
        
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        
        $.ajax({
            url:"/fixissue",
            type:'POST',
            data:{issue:issue,device:device,software:software,email:email,countrycode:countrycode,mobile:mobile},
            success:function(res){
                // console.log(res);
            }
        });
    } else{
        //console.log("Something error happend");
    }
}


let mail = document.getElementById('inp18');
let num = document.getElementById('inp20');
let code = document.getElementById('inp19');
let numbox = document.getElementById('numBox');
let codebox = document.getElementById('codeBox');
let emailBox = document.getElementById('emailBox');

$("#bookConsult").click(function(){
    $("#submitBox").slideUp(500);
    $("#consultBox").slideDown(500);
    emailBox.innerHTML = mail.value;
    numbox.innerHTML = num.value;
    codebox.innerHTML = code.value;
});

function validateTimeDate(){
    let dateValue = document.getElementById("dateInp");
    let timeValue = document.getElementById("timeInp");
    let dateValid, timeValid;
    
    if(dateValue.value != ""){
        dateValid = 1;
    } else{
        dateValid = 0; 
    }
    if(timeValue.value != ""){
        timeValid = 1;
    } else{
        timeValid = 0;
    }
    let consultdate = dateValue.value;
    let consulttime =timeValue.value
    let email = mail.value;
    let countrycode = code.value;
    let mobile = num.value;
    if(dateValid && timeValid){
        // console.log("date: "+ scheduledate +" time: " + scheduletime +" email: "+ email +" countrycode: "+ countrycode +" mobile: "+ mobile;);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        
        $.ajax({
            url:"/bookconsultation",
            type:'POST',
            data:{email:email,countrycode:countrycode,mobile:mobile,consultdate:consultdate,consulttime:consulttime},
            success:function(res){
                if(res == 1){
                    $("#submitBox").show();
                    $("#consultBox").hide();
                }
            }
        })
        return true;
    } else{
        return false;
    }
}
// Step form JS Ends here ------------------------------------------------------

$(document).ready(function(){
    let searchInp = document.getElementById("searchInp");
    $(".searchBtn").click(function(){
       $(".searchBox").slideDown(400);
    });
    $(".searchcloseBtn").click(function(){
       $(".searchBox").slideUp(400);
       $(".searchList").slideUp(400);
       searchInp.value = "";
    });
    $(".searchclearBtn").click(function(){
        searchInp.value = "";
        $(".searchclearBtn").hide();
        $(".searchList").slideUp(400);
    });
    searchInp.addEventListener("input",function(){
        if(searchInp.value.length > 2){
            $(".searchclearBtn").show();
            $(".searchList").slideDown(400);
        }else{
             $(".searchclearBtn").hide();
             $(".searchList").slideUp(400);
        }
        search = searchInp.value;
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        
        $.ajax({
           url:'/searchbar',
           type:'post',
           data:{search:search},
           success:function(res){
               if(res['total'] == 0){
                    let norecord = '<li class="searchItems"><a class="text-dark text-decoration-none" href="javascript:void();">No Record Found</a></li>';
                    $('.searchListBox').html(norecord);
                    return false;
                }else{
                    let norecord = ''
                    $('.searchListBox').html(norecord);
                }
                console.log(res);
                var blog = res['blog'].map(myFunctionBlog);
                $('.searchListBox').append(blog);
                function myFunctionBlog(item) {
                    return '<li class="searchItems"><a class="text-dark text-decoration-none" href=/'+item['category']["slug"]+'/'+item["slug"]+'>'+item["name"]+'</a></li>';
                }
            }
        });
    });
});

















