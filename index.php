<?php
    include "config.php";

    session_start();

    if($_GET["Login"] == "True") {
        $sPassword = $_POST["Password"];
        if($sPassword == $cPassword) $_SESSION["Login"] = "OK";
        header("Location: index.php");
    }

    if($_GET["Login"] == "False") {
        session_destroy();
        header("Location: index.php");
    }
?>

<html>

<head>
    <title>Slides</title>
    <meta Http-Equiv="Content-Type" Content="text/html; charset=UTF-8" />
    <link Rel="stylesheet" Href="css/<?php echo $cStyle; ?>.css" />
</head>

<script Type="text/javascript">
    function setFocus() {
        document.Form.Password.focus();
    }
</script>

<body Class="Body" OnLoad='setFocus()'>
    <table Class="Box">
        <tr><td Class="Header">Slides</td></tr>
        <tr>
            <td Class="Text">
                <?php
                    if($_SESSION["Login"] == "OK" || $cPassword == "") {
                        $aPresentations = array();
                        foreach(scandir("presentations") as $sObject) {
                            if(is_dir("presentations/".$sObject) && substr($sObject, 0, 1) != ".") {
                                // Default Values
                                $sPresentationTitle = "[No Name]";
                                $sPresentationDate  = "01.01.2000";
                                $sDisplayInList     = false;
                                // Read Configs
                                if(file_exists("presentations/".$sObject."/config.php")) {
                                    include "presentations/".$sObject."/config.php";
                                    $aPresentations[strtotime($sPresentationDate)] = array("Title"=>$sPresentationTitle, "Path"=>$sObject, "Display"=>$sDisplayInList);
                                }
                            }
                        }
                        ksort($aPresentations);
                        $sPrevYear = "";
                        foreach($aPresentations as $sDate=>$aData) {
                            if($aData["Display"]) {
                                if(date("Y", $sDate) != $sPrevYear) {
                                    echo "<div Class='Year'>".date("Y", $sDate)."</div>";
                                    $sPrevYear = date("Y", $sDate);
                                }
                                echo "&raquo;&nbsp;&nbsp;<a Href='presentations/".$aData["Path"]."/'>";
                                    echo date("d.m.Y", $sDate)." &ndash; ".$aData["Title"];
                                echo "</a><br>".chr(10);
                            }
                        }
                    } else {
                        echo "<form Name='Form' Method='Post' Action='?Login=True'>";
                        echo "Password:&nbsp;<input Type='Password' Name='Password'>";
                        echo "<input Type='Submit' Value='Login'>";
                        echo "</form>".chr(10);
                    }
                ?>
            </td>
        </tr>
        <?php if($_SESSION["Login"] == "OK" || $cPassword == "") { ?>
            <tr><td Class="Footer"><a Href="index.php?Login=False">Logout</a></td></tr>
        <?php } ?>
    </table>
</body>

</html>
