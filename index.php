<?php 
function check($str) {
	if (strpos($str, "..") === false) {
		
	} else {
		die("No .. allowed, fuck you.");
	}
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <title>arfTCP documentation</title>
  </head>
  <body class="bg-dark text-light">
    <nav class="navbar navbar-expand-lg navbar-dark border-bottom">
      <div class="container-fluid">
        <a class="navbar-brand" href="/">ARFNET</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://arf20.com/me/me.html">About me</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://arf20.com/FTPServer">File server</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://arf20.com/source">Source</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <?php
      function isActive($page, $value) {
		if (isset($_GET['page']))
		  echo $_GET['page'] == $page ? $value : ''; 
      }

      function isNotActive($page, $value) {
		if (isset($_GET['page']))
          echo $_GET['page'] != $page ? $value : ''; 
      }

      function refActive($page, $value) {
		if (isset($_GET['reference']))
		  echo $_GET['reference'] == $page ? $value : '';
      }
    ?>
  
    <div class="container-float ml-5 mt-3">
      <div class="row">

        <div class="col-md-2 mt-4">
          <div class="treeview w-20 <?php isNotActive("reference.php", "collapse")?>">
            <h5>arfTCP</h5>
            <ul class="nested">
			  <li><a class="btn-link <?php refActive("ARF_ERROR_HANDLER.html", "disabled")?>" href="?page=reference.php&reference=ARF_ERROR_HANDLER.html">ARF_ERROR_HANDLER <i class="far fa-bell ic-w mr-1">macro</i></a></li>
			  <li><a class="btn-link <?php refActive("ARF_RECV_HANDLER.html", "disabled")?>" href="?page=reference.php&reference=ARF_RECV_HANDLER.html">ARF_RECV_HANDLER <i class="far fa-bell ic-w mr-1">macro</i></a></li>
			  <li><a class="btn-link <?php refActive("ARF_ACCEPT_HANDLER.html", "disabled")?>" href="?page=reference.php&reference=ARF_ACCEPT_HANDLER.html">ARF_ACCEPT_HANDLER <i class="far fa-bell ic-w mr-1">macro</i></a></li>
			  <li><a class="btn-link <?php refActive("ARF_DISCONNECT_HANDLER.html", "disabled")?>" href="?page=reference.php&reference=ARF_DISCONNECT_HANDLER.html">ARF_DISCONNECT_HANDLER <i class="far fa-bell ic-w mr-1">macro</i></a></li>
			  <li><a class="btn-link <?php refActive("Exception.html", "disabled")?>" href="?page=reference.php&reference=Exception.html">Exception <i class="far fa-bell ic-w mr-1">class</i></a>
                <ul class="nested">
                  <li><a class="btn-link <?php refActive("types.html", "disabled")?>" href="?page=reference.php&reference=e.html">e <i class="far fa-bell ic-w mr-1">enum type</i></a></li>
                  <li><a class="btn-link <?php refActive("APIErrorCode.html", "disabled")?>" href="?page=reference.php&reference=APIErrorCode.html">APIErrorCode <i class="far fa-bell ic-w mr-1">int</i></a></li>
                  <li><a class="btn-link <?php refActive("Exception().html", "disabled")?>" href="?page=reference.php&reference=Exception().html">Exception() <i class="far fa-bell ic-w mr-1">constructor</i></a></li>
                  <li><a class="btn-link <?php refActive("ToString().html", "disabled")?>" href="?page=reference.php&reference=ToString()_.html">ToString() <i class="far fa-bell ic-w mr-1">method</i></a></li>
                </ul>
              </li>
              <li><a class="btn-link <?php refActive("HandleError().html", "disabled")?>" href="?page=reference.php&reference=HandleError().html">HandleError() <i class="far fa-bell ic-w mr-1">function</i></a></li>
              <li><a class="btn-link <?php refActive("TCPInit().html", "disabled")?>" href="?page=reference.php&reference=TCPInit().html">TCPInit() <i class="far fa-bell ic-w mr-1">function</i></a></li>
              <li><a class="btn-link <?php refActive("TCPCleanup().html", "disabled")?>" href="?page=reference.php&reference=TCPCleanup().html">TCPCleanup() <i class="far fa-bell ic-w mr-1">function</i></a></li>
              <li><a class="btn-link <?php refActive("APIGetLastError().html", "disabled")?>" href="?page=reference.php&reference=APIGetLastError().html">APIGetLastError() <i class="far fa-bell ic-w mr-1">function</i></a></li>
              <li><a class="btn-link <?php refActive("ParseAPIError().html", "disabled")?>" href="?page=reference.php&reference=ParseAPIError().html">ParseAPIError() <i class="far fa-bell ic-w mr-1">function</i></a></li>
              <li><a class="btn-link <?php refActive("ResolveHost().html", "disabled")?>" href="?page=reference.php&reference=ResolveHost().html">ResolveHost() <i class="far fa-bell ic-w mr-1">function</i></a></li>
              <li><a class="btn-link <?php refActive("SockAddr.html", "disabled")?>" href="?page=reference.php&reference=SockAddr.html">SockAddr <i class="far fa-bell ic-w mr-1">class</i></a>
                <ul class="nested">
                  <li><a class="btn-link <?php refActive("SockAddr().html", "disabled")?>" href="?page=reference.php&reference=SockAddr().html">SockAddr() <i class="far fa-bell ic-w mr-1">constructor</i></a></li>
                  <li><a class="btn-link <?php refActive("ResetAddr().html", "disabled")?>" href="?page=reference.php&reference=ResetAddr().html">ResetAddr() <i class="far fa-bell ic-w mr-1">method</i></a></li>
                  <li><a class="btn-link <?php refActive("ResetPort().html", "disabled")?>" href="?page=reference.php&reference=ResetPort().html">ResetPort() <i class="far fa-bell ic-w mr-1">method</i></a></li>
                  <li><a class="btn-link <?php refActive("GetAddr().html", "disabled")?>" href="?page=reference.php&reference=GetAddr().html">GetAddr() <i class="far fa-bell ic-w mr-1">method</i></a></li>
                  <li><a class="btn-link <?php refActive("GetPort().html", "disabled")?>" href="?page=reference.php&reference=GetPort().html">GetPort() <i class="far fa-bell ic-w mr-1">method</i></a></li>
                  <li><a class="btn-link <?php refActive("GetSockAddr().html", "disabled")?>" href="?page=reference.php&reference=GetSockAddr().html">GetSockAddr() <i class="far fa-bell ic-w mr-1">method</i></a></li>
                  <li><a class="btn-link <?php refActive("ToString().html", "disabled")?>" href="?page=reference.php&reference=ToString().html">ToString() <i class="far fa-bell ic-w mr-1">method</i></a></li>
                </ul>
              </li>
              <li><a class="btn-link <?php refActive("TCPClient.html", "disabled")?>" href="?page=reference.php&reference=TCPClient.html">TCPClient <i class="far fa-bell ic-w mr-1">class</i></a>
                <ul class="nested">
                  <li><a class="btn-link <?php refActive("TCPClient().html", "disabled")?>" href="?page=reference.php&reference=TCPClient().html">TCPClient() <i class="far fa-bell ic-w mr-1">constructor</i></a></li>
                  <li><a class="btn-link <?php refActive("Send().html", "disabled")?>" href="?page=reference.php&reference=Send().html">Send() <i class="far fa-bell ic-w mr-1">method</i> (inh.)</a></li>
                  <li><a class="btn-link <?php refActive("Recv().html", "disabled")?>" href="?page=reference.php&reference=Recv().html">Recv() <i class="far fa-bell ic-w mr-1">method</i> (inh.)</a></li>
                  <li><a class="btn-link <?php refActive("StartRecvLoop().html", "disabled")?>" href="?page=reference.php&reference=StartRecvLoop().html">StartRecvLoop() <i class="far fa-bell ic-w mr-1">method</i> (inh.)</a></li>
                  <li><a class="btn-link <?php refActive("Disconnect().html", "disabled")?>" href="?page=reference.php&reference=Disconnect().html">Disconnect() <i class="far fa-bell ic-w mr-1">method</i> (inh.)</a></li>
                  <li><a class="btn-link <?php refActive("Close().html", "disabled")?>" href="?page=reference.php&reference=Close().html">Close() <i class="far fa-bell ic-w mr-1">method</i> (inh.)</a></li>
                </ul>
              </li>
              <li><a class="btn-link <?php refActive("TCPServer.html", "disabled")?>" href="?page=reference.php&reference=TCPServer.html">TCPServer <i class="far fa-bell ic-w mr-1">class</i></a>
                <ul class="nested">
                  <li><a class="btn-link <?php refActive("TCPServer().html", "disabled")?>" href="?page=reference.php&reference=TCPServer().html">TCPServer() <i class="far fa-bell ic-w mr-1">constructor</i></a></li>
                  <li><a class="btn-link <?php refActive("Send().html", "disabled")?>" href="?page=reference.php&reference=Send().html">Send() <i class="far fa-bell ic-w mr-1">method</i> (inh.)</a></li>
                  <li><a class="btn-link <?php refActive("Recv().html", "disabled")?>" href="?page=reference.php&reference=Recv().html">Recv() <i class="far fa-bell ic-w mr-1">method</i> (inh.)</a></li>
                  <li><a class="btn-link <?php refActive("StartRecvLoop().html", "disabled")?>" href="?page=reference.php&reference=StartRecvLoop().html">StartRecvLoop() <i class="far fa-bell ic-w mr-1">method</i> (inh.)</a></li>
				  <li><a class="btn-link <?php refActive("Disconnect().html", "disabled")?>" href="?page=reference.php&reference=Disconnect().html">Disconnect() <i class="far fa-bell ic-w mr-1">method</i> (inh.)</a></li>
                  <li><a class="btn-link <?php refActive("Close().html", "disabled")?>" href="?page=reference.php&reference=Close().html">Close() <i class="far fa-bell ic-w mr-1">method</i> (inh.)</a></li>
                </ul>
              </li>
              <li><a class="btn-link <?php refActive("TCPServerMulti.html", "disabled")?>" href="?page=reference.php&reference=TCPServerMulti.html">TCPServerMulti <i class="far fa-bell ic-w mr-1">class</i></a>
                <ul class="nested">
                  <li><a class="btn-link <?php refActive("TCPServerMulti().html", "disabled")?>" href="?page=reference.php&reference=TCPServerMulti().html">TCPServerMulti() <i class="far fa-bell ic-w mr-1">constructor</i></a></li>
                  <li><a class="btn-link <?php refActive("StopThreads().html", "disabled")?>" href="?page=reference.php&reference=StopThreads().html">StopThreads() <i class="far fa-bell ic-w mr-1">method</i></a></li>
                  <li><a class="btn-link <?php refActive("SendBroadcast().html", "disabled")?>" href="?page=reference.php&reference=SendBroadcast().html">SendBroadcast() <i class="far fa-bell ic-w mr-1">method</i></a></li>
                  <li><a class="btn-link <?php refActive("GetClientCount().html", "disabled")?>" href="?page=reference.php&reference=GetClientCount().html">GetClientCount() <i class="far fa-bell ic-w mr-1">method</i></a></li>
                  <li><a class="btn-link <?php refActive("GetClient().html", "disabled")?>" href="?page=reference.php&reference=GetClient().html">GetClient() <i class="far fa-bell ic-w mr-1">method</i></a></li>
                  <li><a class="btn-link <?php refActive("GetClientAddr().html", "disabled")?>" href="?page=reference.php&reference=GetClientAddr().html">GetClientAddr() <i class="far fa-bell ic-w mr-1">method</i></a></li>
                  <li><a class="btn-link <?php refActive("Close().html", "disabled")?>" href="?page=reference.php&reference=Close().html">Close() <i class="far fa-bell ic-w mr-1">method</i></a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>

        <?php 
          if (!isset($_GET["page"])) {
            $_GET["page"] = "introduction.html";
          }
        ?>

        <div class="col">
          <nav class="nav nav-pills">
            <a class="nav-link <?php isActive("introduction.html", "active")?>" href="?page=introduction.html">Introduction</a>
            <a class="nav-link <?php isActive("install.html", "active")?>" href="?page=install.html">Install</a>
            <a class="nav-link <?php isActive("usage.html", "active")?>" href="?page=usage.html">Usage</a>
            <a class="nav-link <?php isActive("reference.php", "active")?>" href="?page=reference.php">Reference</a>
            <a class="nav-link <?php isActive("releases.html", "active")?>" href="?page=releases.html">Releases</a>
          </nav>
            <?php
              if (!isset($_GET["page"])) {
                include("./pages/introduction.html");
              }
              else{
                $page = $_GET["page"];
				check($page);
				include("./pages/$page");
              }
            ?>
        </div>

        <div class="col-md-2 mt-4">
          <div class="container mt-2">
            <h2 class="mb-3 h4">Author</h2>
            <p class="f4 mt-3">arf20</p>
            <h2 class="mb-3 h4">Language</h2>
            <p class="f4 mt-3">C++11</p>
			<h2 class="mb-3 h4">Plataforms</h2>
            <p class="f4 mt-3">Windows [x86 x64] (WinSock2) (MS VC++)</p>
			<p class="f4 mt-3">Linux [any] (POSIX) (gcc/g++)</p>
            <h2 class="mb-3 h4">Includes</h2>
			<ul class="nested">
				<li><a>C++ STD</a>
					<ul>
						<li><a>string</a></li>
						<li><a>vector</a></li>
						<li><a>thread</a></li>
						<li><a>atomic</a></li>
						<li><a>chrono</a></li>
						<li><a>functional</a></li>
					</ul>
				</li>
				<li><a>WinAPI (MS VC++)</a>
					<ul>
						<li><a>WinSock2.h</a></li>
						<li><a>WS2tcpip.h</a></li>
						<li><a>Windows.h (implicit)</a></li>
					</ul>
				</li>
				<li><a>POSIX (gcc/g++)</a>
					<ul>
						<li><a>sys/socket.h</a></li>
						<li><a>sys/ioctl.h</a></li>
						<li><a>sys/types.h</a></li>
						<li><a>arpa/inet.h</a></li>
						<li><a>netinet/in.h</a></li>
						<li><a>netdb.h</a></li>
						<li><a>errno.h</a></li>
					</ul>
				</li>
			</ul>
			
			<h2 class="mb-3 h4">Links</h2>
			<ul class="nested">
				<li><a>WinAPI (static) (MS VC++)</a>
					<ul>
						<li><a>Ws2_32.lib</a></li>
					</ul>
				</li>
			</ul>
          </div>
        </div>

      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
</html>