SELECT c.id, c.name, g.grade FROM students s
JOIN grades g ON s.id=g.student_id
JOIN courses c ON c.id=g.course_id
WHERE s.name='Bart' AND g.grade<'C';

SELECT bc.name FROM students bs
JOIN grades bg ON bs.id=bg.student_id
JOIN courses bc ON bg.course_id=bc.id
JOIN courses lc ON bc.id=lc.id
JOIN grades lg ON lc.id=lg.course_id
JOIN students ls ON lg.student_id=ls.id
WHERE bs.name='Bart' AND ls.name='Lisa'

SELECT s.name, COUNT(*) num FROM teachers t
JOIN courses c ON t.id=c.teacher_id
JOIN grades g ON c.id=g.course_id
JOIN students s ON g.student_id=s.id
WHERE t.name='Krabappel'
GROUP BY s.name
HAVING num>=2