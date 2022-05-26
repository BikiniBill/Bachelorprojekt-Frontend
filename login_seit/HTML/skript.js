
function funktion1() {

    var name2 = document.getElementById('name2');
    var password2  = document.getElementById('password2');

    window.location.href = "https://www.haw-hamburg.de";
}

function funktion2() {

    var name = document.getElementById('name');
    var password  = document.getElementById('password');
    window.location.href = "https://www.google.de";
}

function funktion3() {

    var Eingabe  = document.getElementById('Eingabe');

    var rev = 0;
    // traversing bits of 'num' from the right 
    while (Eingabe.value > 0)
    { 
        // bitwise left shift  
        // 'res' by 1 
        res.value <<= 1     // multiply res by 2
        // if current bit is '1' or num is odd
        if (Eingabe.value & 1 == 1) 
            res.value ^= 1  // Convert 0 to 1
        // bitwise right shift  
        // 'num' by 1 
        Eingabe.value >>= 1     // divide num by 2
    }
    alert("Das Quadrat von " + rev.value);
    Eingabe.value = 0;
}

var but1  = document.getElementById('login_link');
but1.addEventListener ('click', funktion1, true);

var but2  = document.getElementById('but');
but2.addEventListener ('click', funktion2, true);

var but3  = document.getElementById('los');
but3.addEventListener ('click', funktion3, true);
