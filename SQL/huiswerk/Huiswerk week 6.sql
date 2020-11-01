# 1.
#SELECT A.naam FROM Medewerker M 
#RIGHT JOIN Afdeling A ON anr = afd 
#WHERE M.mnr IS NULL
# 2.
#SELECT U.cursus, U.begindatum, U.docent
#FROM Uitvoering U
#LEFT JOIN Inschrijving I ON U.cursus = I.cursus AND U.begindatum = I.begindatum
#WHERE I.cursist IS NULL
# 3.
#SELECT M.naam
#FROM Medewerker M
#LEFT JOIN Uitvoering U ON M.mnr = U.docent
#WHERE U.docent IS NULL
# 4.
#SELECT C.code, C.omschrijving, U.locatie, U.begindatum
#FROM Cursus C
#LEFT JOIN Uitvoering U ON U.cursus = C.code
#ORDER BY C.code, U.begindatum
# 5.
#SELECT M.naam, mnr, afd, anr, A.naam
#FROM Medewerker M
#JOIN Afdeling 
#ON afd = anr
# 6.
#SELECT M.mnr, M.naam, A.anr, A.afd
#FROM Medewerker M
#LEFT JOIN Afdeling A ON M.mnr = A.hoofd
#ORDER BY M.naam
# 7.
#SELECT M.mnr, M.naam, M.afd, M.chef, A.naam, A.anr 
#FROM Medewerker M
#LEFT JOIN Afdeling A ON M.mnr = A.hoofd
#ORDER BY M.naam
# 1.

