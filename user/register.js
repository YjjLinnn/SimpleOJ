function register(){
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
            var temp = obj.responseText;        
            if (temp == 1)
            window.location.href = "../problem.php";
            else alert(temp);
        }
    }

    var u = encodeURIComponent(document.getElementById("usr").value);
    var p = encodeURIComponent(document.getElementById("pwd").value);
    if(u.length==0||p.length==0){
        alert("用户名和密码不能为空！");
        return;
    }

    obj.open("get", "/user/register.php?username=" + u + "&pwd=" + p, true);
    obj.send();
}