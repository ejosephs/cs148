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
    $query = 'SELECT DISTINCT tblStudents.fldFirstName, tblStudents.fldLastName, count(tblEnrolls.fnkCourseId) as total, 
            (SELECT AVG(tblEnrolls.fldGrade)) as averageGPA 
            FROM tblStudents 
            JOIN tblEnrolls on tblStudents.pmkStudentId = tblEnrolls.fnkstudentId 
            WHERE tblStudents.fldState = "VT" AND tblEnrolls.fldGrade > "81" 
            GROUP BY tblStudents.fldFirstName 
            ORDER BY averageGPA DESC;';
    
    $info2 = $thisDatabaseReader->select($query, "", 1, 2, 4, 1, false, false); 
    
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