<?php
    if ($_GET["page"] == "home") {
        echo "<label class='label label-info'>Dashboard Ticket</label>";
    }else if ($_GET["page"] == "employes") {
        echo "<label class='label label-info'>Employe</label>";
    }else if ($_GET["page"] == "allticket") {
        echo "<label class='label label-info'>All Ticket</label>";
    }else if ($_GET["page"] == "newticket") {
        echo "<label class='label label-info'>New Ticket</label>";
    }else if ($_GET["page"] == "opened") {
        echo "<label class='label label-info'>Ticket Status : Opened</label>";
    }else if ($_GET["page"] == "waiting") {
        echo "<label class='label label-info'>Ticket Status : Waiting</label>";
    }else if ($_GET["page"] == "closed") {
        echo "<label class='label label-info'>Ticket Status : Closed</label>";
    }else if ($_GET["page"] == "answer") {
        echo "<label class='label label-info'>Ticket Action : Answer</label>";
    }else if ($_GET["page"] == "unanswer") {
        echo "<label class='label label-info'>Ticket Action : Un Answer</label>";
    }else if ($_GET["page"] == "solved") {
        echo "<label class='label label-info'>Ticket Action : Solved</label>";
    }else if ($_GET["page"] == "dpt") {
        echo "<label class='label label-info'>Department</label>";
    }else if ($_GET["page"] == "cty") {
        echo "<label class='label label-info'>Category</label>";
    }
?>
