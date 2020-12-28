<!DOCTYPE html>
<html lang="zh">

<head>
  <meta charset="utf-8">
  <title>A+B Problem</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/_style.css" rel="stylesheet">
  <link rel="stylesheet" href="/codemirror-5.58.3/lib/codemirror.css">
  <script src="/codemirror-5.58.3/lib/codemirror.js"></script>
  <script src="/codemirror-5.58.3/mode/clike/clike.js"></script>
  <script src="/judge/judge.js"></script>
</head>

<body>
  <div id="debug"></div>
  <section class="blog-wrapper sect-pt4" id="blog">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="post-box">
            <div class="post-meta">
              <h1 class="article-title">A+B Problem</h1>
            </div>

            </br>
            <div class="article-content">
              <h5 style="font-style: italic; color: darkgray;">问题描述：</h5>
              <blockquote class="blockquote">
                <p class="mb-0">给出两个整数A、B，请计算A+B的值。</p>
              </blockquote>
              </br>
              <h5 style="font-style: italic; color: darkgray;">输入描述：</h5>
              <blockquote class="blockquote">
                <p class="mb-0">仅一行，两个整数A、B，之间用空格隔开。</p>
              </blockquote>
              </br>
              <h5 style="font-style: italic; color: darkgray;">输出描述：</h5>
              <blockquote class="blockquote">
                <p class="mb-0">一个整数，代表A与B的和。</p>
              </blockquote>

            </div>
          </div>
          <div class="form-comments">
            <div class="title-box-2">
              <h3 class="title-left">
                代码提交
              </h3>
            </div>

            <div class="row">
              <div class="col-md-12 mb-3">
                <div class="form-group">
                  <textarea id="code" cols="45" rows="8"></textarea></div>
              </div>
              <div class="col-md-12">
                <p id="status" style=" float:left;"></p>
                <div id="status_ani" style="display: none;">
                  <div id="loading">
                    <div class="spinner">
                      <div class="spinner-container container1">
                        <div class="circle1"></div>
                        <div class="circle2"></div>
                        <div class="circle3"></div>
                        <div class="circle4"></div>
                      </div>
                      <div class="spinner-container container2">
                        <div class="circle1"></div>
                        <div class="circle2"></div>
                        <div class="circle3"></div>
                        <div class="circle4"></div>
                      </div>
                      <div class="spinner-container container3">
                        <div class="circle1"></div>
                        <div class="circle2"></div>
                        <div class="circle3"></div>
                        <div class="circle4"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <button onclick="_jd()" class="button button-a button-big button-rouded" style="float: right;">提交</button>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="widget-sidebar">
            <h5 class="sidebar-title">评测说明</h5>
            <div class="sidebar-content">
              <ul class="list-sidebar">
                <li style="color: darkgrey;">
                  时间限制：&nbsp;1&nbsp;s
                </li>
                <li style="color: darkgrey;">
                  空间限制：&nbsp;128&nbsp;MB
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="paralax-mf footer-paralax sect-mt4 " style="background-color: blue;">
    <div class="overlay-mf"></div>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="copyright-box">
              <p class="copyright">Copyright &copy; Simple OJ</p>
              <div class="credits"></div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </section>
</body>
<script>
  var cppEditor = CodeMirror.fromTextArea(document.getElementById("code"), {
    lineNumbers: true,
    matchBrackets: true,
    mode: "text/x-c++src"
  });

  function _jd() {
    judge(cppEditor.getValue());
  }
</script>

</html>