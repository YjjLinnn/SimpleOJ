<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/codemirror-5.58.3/lib/codemirror.css">
    <script src="/codemirror-5.58.3/lib/codemirror.js"></script>
    <script src="/codemirror-5.58.3/mode/clike/clike.js"></script>
    
    <title>Document</title>
</head>
<body>
    <div>
        <textarea id="code">
        #include<iostream>
using namespace std;
int main(){

}
        </textarea>
    </div>
    <script>
        var cppEditor = CodeMirror.fromTextArea(document.getElementById("code"), {
        lineNumbers: true,
        matchBrackets: true,
        mode: "text/x-c++src"
      }); 
    </script>
</body>
</html>