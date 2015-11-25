//this is the file for all the custom javascript functions that will be used in this project!

function isValidDate(date)
{
    var matches = /^(\d{2})[-\/](\d{2})[-\/](\d{4})$/.exec(date);
    if (matches == null) return false;
    var d = matches[2];
    var m = matches[1] - 1;
    var y = matches[3];
    var composedDate = new Date(y, m, d);
    return composedDate.getDate() == d &&
            composedDate.getMonth() == m &&
            composedDate.getFullYear() == y;
}

function isValidEmailAddress(emailAddress) {
    var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
    return pattern.test(emailAddress);
};

//this is the function to set the cookies in javascript!!
function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+d.toUTCString();
    document.cookie = cname + "=" + cvalue + "; " + expires;
} 

//this is the function to get the cookies that already exists. "" is returned if not exists.
function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
    }
    return "";
} 

//this is the function to check if the cookie exists!
function checkCookie() {
    var username=getCookie("username");
    if (username!="") {
        alert("Welcome again " + username);
    }else{
        username = prompt("Please enter your name:", "");
        if (username != "" && username != null) {
            setCookie("username", username, 365);
        }
    }
} 

//this is the function to get the queryStrings passed to the Page URL.
function getQueryStrings() {
    var assoc = {};
    var decode = function (s) { return decodeURIComponent(s.replace(/\+/g, " ")); };
    var queryString = location.search.substring(1);
    var keyValues = queryString.split('&');

    for (var i in keyValues) {
        var key = keyValues[i].split('=');
        if (key.length > 1) {
            assoc[decode(key[0])] = decode(key[1]);
        }
    }
    return assoc;
}

//this is the function to change the active state of the list on the LHS
function changeAdminActiveState(item) {
    $('li.active').removeClass('active');
    $(item).addClass('active');
}

//for the animate effect of the div on the RHS on click of the list on LHS
function showAdminDiv(item) {
    var arr = $('.main-div');
    var ob = $(item).css({
        left: '600px'
    });

    $(arr).animate({
        top: '600px'
    }, 50, function() {
        $(arr).fadeOut();
        ob.animate({
            left: '0px',
            top: '0px'
        }, 50, function() {
            $(ob).fadeIn();
        });
    });
}

// this is the function to change the active state of the list on the LHS
function changeActiveState(item) {
    $('a.active').removeClass('active');
    $(item).addClass('active');
}

//for the animate effect of the div on the RHS on click of the list on LHS
function showDiv(item) {
    // array of all the content divs
    var arr = $('.div-main');    

    // item to be shown
    var ob = $(item);    

    // ob is hidden here.
    ob.animate({
        'left': '1500px'
    });
    // for keeping track of the div currently active(for later use)
    var active = null;

    // loop for all the divs with the class of .div-main
    for (var i = 0; i < arr.length; i++) {
        if($(arr[i]).attr('data-shown') == '1') {
            // animate the currently shown div
            $(arr[i]).animate({
                'top': '1500px'
            }, function() {
                // now, hide the currently shown div
                $(this).hide();
                // animate and show the div to be shown. happens concurrently.
                ob.animate({
                    'left': '0px'
                }).show();
            });
            // to track previously shown div
            active = $(arr[i]);   
        }
        // make all the data-show things to 0 here
        $(arr[i]).attr('data-shown', '0');        
    }

    // restore the position of the previously active div
    active.animate({
        'top': '0px'
    });
    // make the data-shown attribute of the item to be shown to 1
    ob.attr('data-shown', '1');
}  // end of showDiv


