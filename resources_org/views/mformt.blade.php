
<link rel="stylesheet" href="../../css/bootstrap431.css">

<link rel="stylesheet" href="../../css/mform.css">

<div class="container-fluid">
    <div class="row justify-content-center">
       <!-- MultiStep Form -->

    <div class="col-md-6 col-md-offset-3">
        <form id="msform">
            <!-- progressbar -->
            <ul id="progressbar">
                <li class="active">Personal Details</li>
                <li>Social Profiles</li>
                <li>Account Setup</li>
            </ul>
            <!-- fieldsets -->
            <fieldset>
                <h2 class="fs-title">Personal Details</h2>
                <h3 class="fs-subtitle">Tell us something more about you</h3>
                <input type="text" name="fname" placeholder="First Name"/>
                <input type="text" name="lname" placeholder="Last Name"/>
                <input type="text" name="phone" placeholder="Phone"/>
                <input type="button" name="next" class="next action-button" value="Next"/>
            </fieldset>
            <fieldset>
                <h2 class="fs-title">Social Profiles</h2>
                <h3 class="fs-subtitle">Your presence on the social network</h3>
                <input type="text" name="twitter" placeholder="Twitter"/>
                <input type="text" name="facebook" placeholder="Facebook"/>
                <input type="text" name="gplus" placeholder="Google Plus"/>
                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                <input type="button" name="next" class="next action-button" value="Next"/>
            </fieldset>
            <fieldset>
                <h2 class="fs-title">Create your account</h2>
                <h3 class="fs-subtitle">Fill in your credentials</h3>
                <input type="text" name="email" placeholder="Email"/>
                <input type="password" name="pass" placeholder="Password"/>
                <input type="password" name="cpass" placeholder="Confirm Password"/>
                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                <input type="submit" name="submit" class="submit action-button" value="Submit"/>
            </fieldset>
        </form>
        <!-- link to designify.me code snippets -->
        <div class="dme_link">
            <p><a href="http://designify.me/code-snippets-js/" target="_blank">More Code Snippets</a></p>
        </div>
        <!-- /.link to designify.me code snippets -->
    </div>
</div>
<!-- /.MultiStep Form -->  
     
</div> 

<script type="text/javascript" src="../../js/jquery321.min.js"></script>
<script type="text/javascript" src="../../js/bootstrap431.bundle.min.js"></script>

<script type="text/javascript">
    
$(document).ready(function(){
var current_fs, next_fs, previous_fs; //fieldsets
var opacity;
var current = 1;
var steps = $("fieldset").length;

setProgressBar(current);
$(".next").click(function(){

current_fs = $(this).parent();
next_fs = $(this).parent().next();

//Add Class Active
$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

//show the next fieldset
next_fs.show();
//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
next_fs.css({'opacity': opacity});
},
duration: 500
});
setProgressBar(++current);
});

$(".previous").click(function(){

current_fs = $(this).parent();
previous_fs = $(this).parent().prev();

//Remove class active
$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

//show the previous fieldset
previous_fs.show();

//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
previous_fs.css({'opacity': opacity});
},
duration: 500
});
setProgressBar(--current);
});

function setProgressBar(curStep){
var percent = parseFloat(100 / steps) * curStep;
percent = percent.toFixed();
$(".progress-bar")
.css("width",percent+"%")
}

$(".submit").click(function(){
return false;
})

});
</script>
                                                         