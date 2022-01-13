SELECT c.id, title, COUNT(sc.student_id) AS student_count FROM `Classes` c
LEFT JOIN  Students_Classes sc ON c.id = sc.class_id
GROUP BY c.id

