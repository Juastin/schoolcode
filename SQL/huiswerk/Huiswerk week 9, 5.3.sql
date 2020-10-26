# 1.
#SELECT C.mnr, M.mnr, M.naam
#FROM Medewerker C
#LEFT JOIN Medewerker M ON C.mnr = M.chef
#WHERE M.chef IS NOT NULL
#ORDER BY C.mnr
# 2.
#SELECT C.mnr, COUNT(M.mnr)
#FROM Medewerker C
#LEFT JOIN Medewerker M ON C.mnr = M.chef
#GROUP BY C.mnr
#HAVING COUNT(M.mnr) > 0
# 3.
#SELECT C.naam, C.mnr, M.mnr, M.naam
#FROM Medewerker C
#LEFT JOIN Medewerker M ON C.mnr = M.chef
#WHERE M.chef IS NOT NULL
#ORDER BY C.mnr
# 4.
#SELECT C.naam, C.mnr, COUNT(M.mnr)
#FROM Medewerker C
#LEFT JOIN Medewerker M ON C.mnr = M.chef
#GROUP BY C.mnr
#HAVING COUNT(M.mnr) > 0
# 5.
#SELECT C.mnr, C.naam, M.mnr, M.naam
#FROM Medewerker C
#LEFT JOIN Medewerker M ON C.mnr = M.chef
# 6.
#SELECT C.mnr, COUNT(M.mnr)
#FROM Medewerker C
#LEFT JOIN Medewerker M ON C.mnr = M.chef
#GROUP BY C.mnr
# 7.
#SELECT C.mnr, COUNT(M.mnr)
#FROM Medewerker C
#LEFT JOIN Medewerker M ON C.mnr = M.chef
#GROUP BY C.mnr
#HAVING COUNT(M.mnr) > 2
# 8.
#SELECT C.mnr, C.naam COUNT(M.mnr)
#FROM Medewerker C
#LEFT JOIN Medewerker M ON C.mnr = M.chef
#GROUP BY C.mnr
#HAVING COUNT(M.mnr) > 2
# 9.
#SELECT C.mnr, C.naam COUNT(M.mnr)
#FROM Medewerker C
#LEFT JOIN Medewerker M ON C.mnr = M.chef
#GROUP BY C.mnr
#HAVING COUNT(M.mnr) < 2
# 10a.
#SELECT cursus, COUNT(cursist) aantal_inschrijvingen
#FROM Inschrijving
#GROUP BY cursus
# 10b.
#SELECT cursus, omschrijving, COUNT(cursist)
#FROM Inschrijving
#JOIN Cursus ON cursus = code
#GROUP BY cursus
#HAVING COUNT(cursist) < 5