function judge(code) {
    var status = document.getElementById("status");
    var status_ani=document.getElementById("status_ani");

    status.style.color = "darkgrey";
    status.innerHTML = "评测中";
    status_ani.style.display="block";

    if (typeof ActiveXObject != "undefined") {
        var version = [
            'Msxml2.XMLHTTP.6.0',
            'Msxml2.XMLHTTP.5.0',
            'Msxml2.XMLHTTP.3.0',
            'Msxml2.XMLHTTP',
            'Microsoft.XMLHTTP'
        ];

        for (var i = 0; i < version.length; i++) {
            try {
                var obj = new ActiveXObject(version[i]);
                if (typeof obj != "undefined")
                    break;
            } catch (e) { }
        }
    } else var obj = new XMLHttpRequest();

    obj.onreadystatechange = function () {
        if (obj.readyState == 4 && obj.status == 200) {
            status_ani.style.display="none";
            var res=obj.responseText[0];   
            if (res == "1") {
                status.style.color = "green";
                status.innerHTML = "答案正确";
            }
            else {
                status.style.color = "red";
                status.innerHTML = "答案错误";
            }
            //document.getElementById("debug").innerHTML = obj.responseText;
            //alert(obj.responseText);
        }
    }

    code = encodeURIComponent(code);
    obj.open("get", "/judge/judge.php?code=" + code, true);
    obj.send();
}