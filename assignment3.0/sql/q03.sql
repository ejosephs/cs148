SELECT DISTINCT tblCourses.fldCourseName, tblSections.fldDays, tblSections.fldStart FROM tblSections 
JOIN tblCourses on pmkCourseId = fnkCourseId 
WHERE fnkTeacherNetId LIKE "jlhorton" ORDER BY fldStart;