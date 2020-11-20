function openside(){

    document.getElementById("myside").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0,4)";
}

function closenavi(){
    document.getElementById("myside").style.width = "0px";
    document.getElementById("main").style.marginLeft = "0px";
    document.body.style.backgroundColor = "white";
}


function save(){
    

    var a = document.getElementById("mail").value;
    var b = document.getElementById("con").value;
    var c = document.getElementById("pho").value;
    if(a=='' || b =='' || c==''){

        alert("Please fill feilds correctly");
        return false;
    }
    else{
        alert("Changes are saved");
        return true;
    }
}

function save1(){

    var d = document.getElementById("fn").value;
    var e = document.getElementById("ln").value;
    var f = document.getElementById("ge").value;
    var g = document.getElementById("id").value;
    var h = document.getElementById("add").value;
    var i = document.getElementById("dob").value;

    if(d=='' || e ==''  || f=='' || g =='' || h == ''|| i =='' ){

        alert("Please fill feilds correctly");
        return false;
    }
    else{
        alert("Changes are saved");
        return true;
    }
}