<!DOCTYPE html> 
<html>
    <head>
        <style>
            body.gotg {
                background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAK0AAACcCAMAAAA6V9t5AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3FpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDE0IDc5LjE1MTQ4MSwgMjAxMy8wMy8xMy0xMjowOToxNSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDo2MzhjMjM4ZS00NjAxLTQ3NGQtYTg5ZS00YWYwNTA5YWM0MGMiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6MjBCNjA0QTI0MUY1MTFFNkIwQjVCNDIwQjQ4RThCQTciIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6MjBCNjA0QTE0MUY1MTFFNkIwQjVCNDIwQjQ4RThCQTciIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIChXaW5kb3dzKSI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjkwMzFmZWUxLWYxN2UtNWU0Ny1iYmY0LTRlYjc1MDNkMjRiYiIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo2MzhjMjM4ZS00NjAxLTQ3NGQtYTg5ZS00YWYwNTA5YWM0MGMiLz4gPC9y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);
                background-repeat: repeat-all;
                color: white;
            }
        </style>
        <link rel="stylesheet" type="text/css" href="inc_styles.css">
        <?php include_once("poke_analyticstracking") ?>
        <?php
        include('inc_header.php');


        include('inc_poke_mysql.php');


        $clean = filter_input(INPUT_GET, 'clean', FILTER_SANITIZE_STRING);


//total portals
        $sql3 = "SELECT count(iGuid) as NumPortals FROM `portals";
        $result3 = $conn->query($sql3);

        while ($row = mysqli_fetch_assoc($result3)) {
            $TotalCount = $row["NumPortals"];
            
        }  
            //total unknown
            $sql3 = "SELECT count(iGuid) as NumPortals FROM portals where locType = 0";
            $result3 = $conn->query($sql3);

            while ($row = mysqli_fetch_assoc($result3)) {
                $TotalUnknown = $row["NumPortals"];
            }
//gyms
            $sql3 = "SELECT count(iGuid) as NumGyms FROM `portals` WHERE locType =1";
            $result3 = $conn->query($sql3);

            while ($row = mysqli_fetch_assoc($result3)) {
                $TotalGyms = $row["NumGyms"];
            }
            
            //removed
             $sql3 = "SELECT count(iGuid) as NumNone FROM `portals` WHERE locType =-1";
            $result3 = $conn->query($sql3);

            while ($row = mysqli_fetch_assoc($result3)) {
                $TotalNone = $row["NumNone"];
            }
            //stops
            $sql3 = "SELECT count(iGuid) as NumStops FROM `portals` WHERE locType =2";
            $result3 = $conn->query($sql3);

            while ($row = mysqli_fetch_assoc($result3)) {
                $TotalStops = $row["NumStops"];
            }
            
             //stops
            $sql3 = "SELECT count(iGuid) as NumEdits FROM `userEdits`";
            $result3 = $conn->query($sql3);

            while ($row = mysqli_fetch_assoc($result3)) {
                $userEdits = $row["NumEdits"];
            }
             $sql3 = "SELECT userIP FROM `userEdits` group by userIP";
            $result3 = $conn->query($sql3);

            $numUsers = $result3->num_rows;
            
             $sql3 = "SELECT count(iGuid) numIITC FROM `portals` where sourceData = 2";
            $result3 = $conn->query($sql3);

            while ($row = mysqli_fetch_assoc($result3)) {
                $numIITC = $row["numIITC"];
            }



//draw table

            echo "<body class='gotg'>";
            if ($clean != "true") {
                echo "<div align='right'><input type='button' value='X' onClick='closewindow();'></div>";
            }
            echo "<b><span style='color:white'>Current PoGo Maps Stats</span></b>";

            echo "<table border-collapse: collapse)";
            echo "<tr>";
            echo "<th class='gotg-left-b'>Total</th>";
            echo "<th class='gotg-left-b'>Value</th>";

            echo "</tr>";
            echo "<tr>";
            echo "<td class='gotg-left-w'>Number of Gyms</td> <td class='gotg-left-w'>" . number_format($TotalGyms) . "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td class='gotg-left-w'>Number of Stops</td> <td class='gotg-left-w'>" . number_format($TotalStops) . "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td class='gotg-left-w'>Unknown Locations</td> <td class='gotg-left-w'>" . number_format($TotalUnknown) . "</td>";
            echo "</tr>";
             echo "<tr>";
            echo "<td class='gotg-left-w'>Removed Locations</td> <td class='gotg-left-w'>" . number_format($TotalNone) . "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td class='gotg-left-w'>Total Locations</td> <td class='gotg-left-w'>" . number_format($TotalCount) . "</td>";
            echo "</tr>";
 echo "<tr>";
            echo "<td class='gotg-left-w'>Number of User Edits</td> <td class='gotg-left-w'>" . number_format($userEdits) . "</td>";
            echo "</tr>";
             echo "<tr>";
            echo "<td class='gotg-left-w'>Number of Users</td> <td class='gotg-left-w'>" . number_format($numUsers) . "</td>";
            echo "</tr>";
             echo "<tr>";
            echo "<td class='gotg-left-w'>Number of IITC Edits</td> <td class='gotg-left-w'>" . number_format($numIITC) . "</td>";
            echo "</tr>";

            echo "</table>";




            $conn->close();
            