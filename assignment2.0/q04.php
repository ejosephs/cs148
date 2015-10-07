<?php
//##############################################################################
//
// This page lists your tables and fields within your database. if you click on
// a database name it will show you all the records for that table. 
// 
// 
// This file is only for class purposes and should never be publicly live
//##############################################################################
include "top.php";
    //now print out each record
    print '<table>';
    $columns = 5;
    //Display all course data for our class (1)
    $query = 'SELECT * FROM tblCourses WHERE fldCourseNumber = "148" AND  fldDepartment = "CS"';
    
    $info2 = $thisDatabaseReader->select($query, "", 1, 1, 4, 0, false, false);
    
    
    $highlight = 0; // used to highlight alternate rows
    foreach ($info2 as $rec) {
        $highlight++;
        if ($highlight % 2 != 0) {
            $style = ' odd ';
        } else {
            $style = ' even ';
        }
        print '<tr class="' . $style . '">';
        for ($i = 0; $i < $columns; $i++) {
            print '<td>' . $rec[$i] . '</td>';
        }
        print '</tr>';
    }
    // all done
    print '</table>';
    
include "footer.php";
?>