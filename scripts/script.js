function checkCB() {
    var f1 = 0;
    var f2 = 0;
    var f3=0;
    var inp = [];
    for (var i = 3; i <= 87; i++)
        document.getElementById(i).disabled = false;
    for (var i = 3; i <= 13; i++) {
        inp[i] = document.getElementById(i);
        if (inp[i].checked == true)
            f1++;
    }

    if (f1 > 0){
        for (var i = 14; i <= 31; i++)
            document.getElementById(i).disabled = true;
        for (var i=32; i<=87; i++)
            document.getElementById(i).disabled = true;
          }

    for (var i = 14; i <= 31; i++) {
        inp[i] = document.getElementById(i);
        if (inp[i].checked == true)
            f2++;
    }
    if (f2 > 0)
    {
        for (var i = 3; i <= 13; i++)
            document.getElementById(i).disabled = true;
        for (var i=32; i<=87; i++)
        document.getElementById(i).disabled = true;
          }

    for (var i = 32; i <= 87; i++) {
        inp[i] = document.getElementById(i);
        if (inp[i].checked == true)
            f3++;
    }
    if (f3>0)
    {
      for (var i = 3; i <= 13; i++)
          document.getElementById(i).disabled = true;
      for (var i=14; i<=31; i++)
      document.getElementById(i).disabled = true;
    }
}
