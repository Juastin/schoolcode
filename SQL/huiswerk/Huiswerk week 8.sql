# 1
#SELECT omschrijving 
#FROM Cursus 
#WHERE code NOT IN 
#	(SELECT cursus 
#	FROM Uitvoering)
-- # 2
SELECT naam
FROM Medewerker
WHERE mnr IN 
	(SELECT hoofd 
	FROM Afdeling 
	WHERE anr = 10)
# 3
#SELECT mnr 
#FROM Medewerker
#WHERE chef IN 
	#(SELECT hoofd 
	#FROM Afdeling)
# 4
#SELECT naam
#FROM Medewerker
#WHERE mnr IN (SELECT docent FROM Uitvoering WHERE docent IS NOT NULL)
#ORDER BY naam
# 5
#SELECT * 
#FROM Afdeling
#WHERE anr NOT IN (SELECT afd FROM Medewerker)
# 6
# DELETE FROM Afdeking
# WHERE anr NOT IN (SELECT afd FROM Medewerker)
# 7
# INSERT INTO Afdeling (anr, naam, locatie, hoofd) VALUES (???)
# 8
#INSERT INTO Medewerker (maandsal) VALUES (maandsal + 200)
#WHERE mnr IN (SELECT hoofd FROM Afdeling)
# 9
#INSERT INTO Medewerker (maandsal) VALUES (maandsal - 200)
#WHERE mnr IN (SELECT hoofd FROM Afdeling)
# 10
#SELECT * FROM Uitvoering 
#WHERE cursus IN (SELECT code FROM Cursus WHERE lengte > 3)
#AND docent = 7369
# 11
#SELECT cursus, begindatum, docent 
#FROM Uitvoering
#WHERE cursus IN (SELECT cursus FROM Inschrijving WHERE cursist IS NULL)
# 12
#SELECT naam 
#FROM Medewerker
#WHERE mnr IN 
#(SELECT cursist FROM Inschrijving 
#LEFT JOIN Uitvoering WHERE docent IN 
#(SELECT mnr FROM Medewerker WHERE naam = 'Schotten'))
# 13
#SELECT naam, mnr 
#FROM Medewerker 
#WHERE mnr IN (SELECT chef FROM Medewerker)
# 14
#SELECT naam, mnr 
#FROM Medewerker 
#WHERE mnr NOT IN (SELECT chef FROM Medewerker)
# 1
#SELECT mnr, naam, maandsal, ROUND(maandsal * 1,279, 2) AS maandsal_in_dollar
#FROM Medewerker
# 2
#UPDATE Medewerkers
#SET maandsal = maandsal * 1.1
# 3
#UPDATE Medewerkers
#SET maandsal = maandsal * 1.1
#WHERE afd = 30
# 4
#UPDATE Medewerkers
#SET maandsal = maandsal * 1.1
#WHERE afd IN (SELECT anr FROM Afdeling WHERE naam = 'VERKOOP') 
# 1
#SELECT COUNT(maandsal) FROM Medewerker
# 2
#SELECT AVG(maandsal) FROM Medewerker WHERE functie = 'MANAGER'
# 3
#SELECT COUNT(cursist) 
#FROM Inschrijving 
#WHERE cursus IN (SELECT cursus FROM Cursus WHERE Omschrijving = 'FOR')
# 4
#SELECT COUNT(DISTINCT locatie) FROM Uitvoering
# 5
#SELECT COUNT(DISTINCT begindatum) 
#FROM Uitvoering 
#WHERE cursus IN (SELECT code FROM Cursus WHERE omschrijving = 'S02')
# 6
#SELECT MIN(gbdatum) FROM Medewerker WHERE afd IN (SELECT anr FROM Afdeling WHERE naam = 'VERKOOP')



