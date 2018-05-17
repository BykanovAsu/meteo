function checkCB() {
    var f1 = 0;
    var f2 = 0;
    var inp = [];
    for (var i = 1; i <= 11; i++) {
        inp[i] = document.getElementById(i);
        if (inp[i].checked == true)
            f1++;
    }

    if (f1 > 0)
        for (var i = 12; i <= 29; i++)
            document.getElementById(i).disabled = true;
    else {
        for (var i = 12; i <= 29; i++)
            document.getElementById(i).disabled = false;
    }

    for (var i = 12; i <= 29; i++) {
        inp[i] = document.getElementById(i);
        if (inp[i].checked == true)
            f2++;
    }
    if (f2 > 0)
        for (var i = 1; i <= 11; i++)
            document.getElementById(i).disabled = true;
    else {
        for (var i = 1; i <= 11; i++)
            document.getElementById(i).disabled = false;
    }
}
