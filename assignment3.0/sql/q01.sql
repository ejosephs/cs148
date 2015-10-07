SELECT DISTINCT tblCourses.fldCourseName 
FROM tblCourses JOIN tblEnrolls 
on pmkCourseID = fnkCourseID 
WHERE fldGrade = "100" 
ORDER BY fldCourseName;