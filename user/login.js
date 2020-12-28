function login() {
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
        // 当前状态为4时，数据接收完毕
        if (obj.readyState == 4 && obj.status == 200) {
            // 输出响应信息
            var temp = obj.responseText;
          //  alert(temp);
            document.getElementById("debug").innerHTML=temp;
            if (temp == 0)
                alert("用户名或密码错误！");
            else if (temp == -1)
                alert("用户不存在！");
            else if (temp == 1) window.location.href = "../problem.php"
        }
    }

    var u = encodeURIComponent(document.getElementById("usr").value);
    var p = encodeURIComponent(document.getElementById("pwd").value);
    obj.open("get", "/user/login.php?username=" + u + "&pwd=" + p, true);
    obj.send();
}