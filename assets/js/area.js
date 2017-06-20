var ajaxku;
function ajaxKabupaten(id){
    ajaxku = buatajax();

    var url=window.location.origin+"/area/kabupaten/";
    url=url+"?q="+id;
    url=url+"&sid="+Math.random();
    ajaxku.onreadystatechange=stateChanged;
    ajaxku.open("GET",url,true);
    ajaxku.send(null);
}

function ajaxKecamtan(id){
    ajaxku = buatajax();
    var url=window.location.origin+"/area/kecamatan/";
    url=url+"?q="+id;
    url=url+"&sid="+Math.random();
    ajaxku.onreadystatechange=stateChangedKec;
    ajaxku.open("GET",url,true);
    ajaxku.send(null);
}

function ajaxKelurahan(id){
    ajaxku = buatajax();
    var url=window.location.origin+"/area/kelurahan/";
    url=url+"?q="+id;
    url=url+"&sid="+Math.random();
    ajaxku.onreadystatechange=stateChangedKel;
    ajaxku.open("GET",url,true);
    ajaxku.send(null);
}

function ajaxrw(id){
    ajaxku = buatajax();
    var url=window.location.origin+"/area/rw/";
    url=url+"?q="+id;
    url=url+"&sid="+Math.random();
    ajaxku.onreadystatechange=stateChangedRW;
    ajaxku.open("GET",url,true);
    ajaxku.send(null);
}

function ajaxrt(id){
    ajaxku = buatajax();
    var url=window.location.origin+"/area/rt/";
    url=url+"?q="+id;
    url=url+"&sid="+Math.random();
    ajaxku.onreadystatechange=stateChangedRT;
    ajaxku.open("GET",url,true);
    ajaxku.send(null);
}

function buatajax(){
    if (window.XMLHttpRequest){
    return new XMLHttpRequest();
    }
    if (window.ActiveXObject){
    return new ActiveXObject("Microsoft.XMLHTTP");
    }
    return null;
}
function stateChanged(){
    var data;
    if (ajaxku.readyState==4){
    data=ajaxku.responseText;
    if(data.length>=0){
    document.getElementById("kabupaten").innerHTML = data
    }else{
    document.getElementById("kabupaten").value = "<option selected>Pilih Kota/Kab</option>";
    }
    }
}

function stateChangedKec(){
    var data;
    if (ajaxku.readyState==4){
    data=ajaxku.responseText;
    if(data.length>=0){
    document.getElementById("kecamatan").innerHTML = data
    }else{
    document.getElementById("kecamatan").value = "<option selected>Pilih Kecamatan</option>";
    }
    }
}

function stateChangedKel(){
    var data;
    if (ajaxku.readyState==4){
    data=ajaxku.responseText;
    if(data.length>=0){
    document.getElementById("desa").innerHTML = data
    }else{
    document.getElementById("desa").value = "<option selected>Pilih Kel/Desa</option>";
    }
    }
}
function stateChangedRW(){
    var data;
    if (ajaxku.readyState==4){
    data=ajaxku.responseText;
    if(data.length>=0){
    document.getElementById("dusun").innerHTML = data
    }else{
    document.getElementById("dusun").value = "<option selected>Pilih Dusun/RW</option>";
    }
    }
}

function stateChangedRT(){
    var data;
    if (ajaxku.readyState==4){
    data=ajaxku.responseText;
    if(data.length>=0){
    document.getElementById("rt").innerHTML = data
    }else{
    document.getElementById("rt").value = "<option selected>Pilih RT</option>";
    }
    }
}