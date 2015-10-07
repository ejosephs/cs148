SELECT DISTINCT tblStudents.fldFirstName, tblStudents.fldLastName, count(tblEnrolls.fnkCourseId) as total, 
(SELECT AVG(tblEnrolls.fldGrade)) as averageGPA 
FROM tblStudents 
JOIN tblEnrolls on tblStudents.pmkStudentId = tblEnrolls.fnkstudentId 
WHERE tblStudents.fldState = "VT" AND tblEnrolls.fldGrade > "81" 
GROUP BY tblStudents.fldFirstName 
ORDER BY averageGPA DESC;