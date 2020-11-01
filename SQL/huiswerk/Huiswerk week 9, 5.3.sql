# 1.
#SELECT chef, mnr, naam
#FROM Medewerker
#WHERE chef IS NOT NULL 
#ORDER BY chef
# 2.
#SELECT C.mnr, COUNT(M.mnr)
#FROM Medewerker C
#LEFT JOIN Medewerker M ON C.mnr = M.chef
#GROUP BY C.mnr
#HAVING COUNT(M.mnr) > 0

#SELECT chef, COUNT(*)
#FROM medewerker
#WHERE chef IS NOT NULL
#GROUP BY chef
# 3.
#SELECT C.naam, C.mnr, M.mnr, M.naam
#FROM Medewerker C
#JOIN Medewerker M ON C.mnr = M.chef
#WHERE M.chef IS NOT NULL // NIET NODIG WANT INNER JOIN
#ORDER BY C.mnr
# 4.
#SELECT C.naam, C.mnr, COUNT(M.mnr)
#FROM Medewerker M
#JOIN Medewerker C ON M.chef = C.mnr
#GROUP BY C.mnr, C.naam
#HAVING COUNT(M.mnr) > 0 // HOEFT NIET MET INNER JOIN
# 5. correct :)
#SELECT C.mnr, C.naam, M.mnr, M.naam
#FROM Medewerker C
#LEFT JOIN Medewerker M ON C.mnr = M.chef
# 6.
#SELECT C.mnr, C.naam COUNT(C.chef)
#FROM Medewerker C
#LEFT JOIN Medewerker M ON C.mnr = M.chef
#GROUP BY C.mnr, C.naam
# 7.
#SELECT chef
#FROM Medewerker 
#WHERE chef IS NOT NULL
#GROUP BY chef
#HAVING COUNT(*) > 2
# 8.
#SELECT C.mnr, C.naam COUNT(M.mnr)
#FROM Medewerker M
#LEFT JOIN Medewerker C ON C.mnr = M.chef
#GROUP BY C.mnr, C.naam
#HAVING COUNT(M.mnr) > 2
# 9. correcto
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
#LEFT JOIN Cursus ON cursus = code
#GROUP BY cursus
#HAVING COUNT(cursist) < 5