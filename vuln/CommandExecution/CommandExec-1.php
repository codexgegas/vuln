<?php
$filename = $_GET['filename'];

if (!empty($filename)) {
    $output = shell_exec('ls ' . $filename);
    echo "Command output: <pre>" . htmlspecialchars($output) . "</pre>";
}
?>
<html>
  <head>
    <link rel="shortcut icon" href="../Resources/hmbct.png" />
    <title>CommandExec-1</title>
  </head>
  <body>
    <div style="background-color:#afafaf;padding:15px;border-radius:20px 20px 0px 0px">
      <button type="button" name="homeButton" onclick="location.href='../homepage.html';">Home Page</button>
      <button type="button" name="mainButton" onclick="location.href='commandexec.html';">Main Page</button>
    </div>

    <h1>Command Injection Vulnerable Page</h1>
    <form method="GET" action="">
        <input type="text" name="filename" placeholder="Enter a filename">
        <input type="submit" value="Submit">
    </form>
</body>
</html>