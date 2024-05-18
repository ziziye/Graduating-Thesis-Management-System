var file = document.querySelector('[type=file]');
var sub = document.querySelector('[type=button]');
var show = document.querySelector('.showarea');
var progress = document.querySelector('progress');
var Susername = document.getElementById('Susername');
var Ssex = document.getElementById('Ssex');
var Sage = document.getElementById('Sage');
var Smajor = document.getElementById('Smajor');
var Sschool = document.getElementById('Sschool');
var Sqq = document.getElementById('Sqq');
var Saddress = document.getElementById('Saddress');
var Smotto = document.getElementById('Smotto');

sub.onclick = function(e){
    var fileobje = file.files[0];
    var formdata = new FormData();
    formdata.append('upload',fileobje);
    formdata.append('upload',Susername.value);
    formdata.append('upload',Ssex.value);
    formdata.append('upload',Sage.value);
    formdata.append('upload',Smajor.value);
    formdata.append('upload',Sschool.value);
    formdata.append('upload',Sqq.value);
    formdata.append('upload',Saddress.value);
    formdata.append('upload',Smotto.value);
    var xhr = new XMLHttpRequest();
    var fr = new FileReader();
    fr.readAsDataURL(fileobje)
    fr.onload=function(e){
        // console.log(e);
        var img = document.createElement('img');
        img.src = this.result;
        // console.log( img.src);
        show.appendChild(img)
    }
    xhr.upload.onprogress = function(e){
        progress.value= parseInt(e.loaded/e.total*100)
    }
    xhr.open("POST","http://127.0.0.1:63342")
    //   console.log(formdata)
    xhr.send(formdata);
    console.log(formdata)
    console.log(formdata.getAll("upload"))
}
