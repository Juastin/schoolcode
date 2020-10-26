/*Opdrachten college 5*/
/*5.1 (blz. 65)*/
/*Opdracht 1*/
/*SELECT functie, COUNT(*)
FROM Medewerker
GROUP BY functie;*/
/*Opdracht 2*/
/*SELECT functie, COUNT(*)
FROM Medewerker
GROUP BY functie
HAVING COUNT(*) < 3;*/
/*Opdracht 3*/
/*SELECT code, lengte, COUNT(*)
FROM Cursus
WHERE lengte > 2
GROUP BY code, lengte;*/
/*Opdracht 4*/
/*SELECT U.cursus, AVG(evaluatie)
FROM Inschrijving I
JOIN Uitvoering U ON I.begindatum = U.begindatum AND I.cursus = U.cursus
WHERE evaluatie IS NOT NULL
GROUP BY U.cursus;*/
/*Opdracht 5*/
/*alleen afdelingen met medewerkers*/
/*SELECT afd, MAX(maandsal)
FROM Medewerker
GROUP BY afd*/
/*ook afdelingen zonder medewerkers*/
/*SELECT anr, MAX(maandsal)
FROM Medewerker
RIGHT JOIN Afdeling ON afd = anr
GROUP BY anr*/
/*Opdracht 6*/
/*SELECT naam, COUNT(cursist)
FROM Medewerker
LEFT JOIN Inschrijving ON mnr = cursist
GROUP BY naam*/
/*Opdracht 7*/
/*SELECT mnr, naam, COUNT(*)
FROM Medewerker
JOIN Uitvoering ON mnr = docent
GROUP BY mnr, naam*/
/*Opdracht 8*/
/*SELECT U.cursus, COUNT(cursist), AVG(evaluatie)
FROM Uitvoering U
JOIN Inschrijving I ON I.begindatum = U.begindatum AND I.cursus = U.cursus
WHERE U.begindatum > '1995-12-31'
GROUP BY U.cursus*/
/*5.2 blz. 66)*/
/*Opdracht 1*/
/*SELECT M.mnr, M.naam, M.maandsal
FROM Medewerker M
WHERE M.maandsal >
(SELECT C.maandsal
FROM Medewerker C
WHERE C.mnr = M.chef);*/
/*Opdracht 2*/
/*SELECT M.mnr, M.naam, M.gbdatum, M.afd, ...
FROM Medewerker M
WHERE M.gbdatum <
(SELECT gbdatum
FROM Medewerker C
JOIN Afdeling ON hoofd = C.mnr AND  anr = C.afd
WHERE M.afd = C.afd)*/
/*Opdracht 3*/
/*SELECT U.docent, U.cursus
FROM Uitvoering U
WHERE U.cursus IN
(SELECT cursus
FROM Inschrijving I
WHERE I.cursus = U.cursus AND I.cursist = U.docent)*/
/*Opdracht 4*/
/*SELECT M.naam, M.maandsal
FROM Medewerker M
WHERE M.maandsal >
(SELECT AVG(C.maandsal)
FROM Medewerker C
WHERE M.afd = C.afd);*/
/*Opdracht 5*/
/*SELECT code, omschrijving, U.docent, U.begindatum
FROM Cursus
JOIN Uitvoering U ON code = U.cursus
WHERE U.docent IS NOT NULL 
AND U.begindatum =
(SELECT MIN(V.begindatum)
FROM Uitvoering V
WHERE U.cursus = V.cursus)*/