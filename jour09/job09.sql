SELECT * FROM etudiants
WHERE  (CURRENT_DATE() - INTERVAL '18' YEAR) > naissance;
