SELECT DISTINCT tblSections.fldDays, tblSections.fldStart FROM tblSections 
JOIN tblTeachers on pmkNetId = fnkTeacherNetId 
WHERE fldLastName LIKE "Snapp" AND fldFirstName LIKE "%Robert%";