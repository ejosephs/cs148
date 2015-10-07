SELECT tblCourses.pmkCourseId, tblStudents.fldLastName, tblStudents.fldFirstName 
FROM tblStudents 
JOIN tblEnrolls on pmkStudentId = fnkStudentId 
JOIN tblCourses on fnkCourseId = pmkCourseId WHERE pmkCourseId = "392";