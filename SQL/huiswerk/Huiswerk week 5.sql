# 1.
# SELECT naam, functie 
# FROM Medewerker 
# WHERE afd = 30
# 2.
# SELECT naam, gbdatum 
# FROM Medewerker 
# WHERE gbdatum < '01-01-1960'
# 3.
# SELECT * 
# FROM Medewerker 
# WHERE functie = 'verkoper'
# 4.
# SELECT * 
# FROM Cursus 
# ORDER BY lengte
# 5.
# SELECT omschrijving 
# FROM Cursus 
# WHERE lengte < 3 
# ORDER BY code
# 6.
# SELECT naam, maandsal*12 AS jaarsal 
# FROM Medewerker 
# WHERE functie NOT 'Directeur'
# 7.
# SELECT * FROM Inschrijving 
# WHERE evaluatie IS NOT NULL 
# ORDER BY cursus, begindatum
# 8.
# SELECT Inschrijving.cursus, Inschrijving.evaluatie, Medewerker.naam 
# FROM Inschrijving 
# JOIN Medewerker ON Inschrijving.cursist = Medewerker.mnr
# 9.
# SELECT Medewerker.mnr, Medewerker.naam, Afdeling.naam 
# FROM Afdeling 
# JOIN Medewerker ON Afdeling.anr = Medewerker.afd 
# WHERE locatie = 'Utrecht'
# 10.
# SELECT Medewerker.naam, Cursus.omschrijving, Inschrijving.begindatum 
# FROM Inschrijving 
# JOIN Medewerker ON Medewerker.mnr = Inschrijving.cursist 
# JOIN Cursus ON Cursus.code = Inschrijving.cursus
# WHERE evaluatie IS NULL
# 11.
# SELECT Afdeling.naam, Medewerker.naam
# FROM Afdeling JOIN Medewerker ON Afdeling.hoofd = Medewerker.mnr
# 12.
# SELECT naam 
# FROM Medewerker 
# WHERE functie = 'Trainer' 
# AND gbdatum < '01-01-1960'
# 13.
# SELECT naam, functie, afd 
# FROM Medewerker 
# WHERE afd = 10 
# AND NOT functie = 'manager'
# 14.
# SELECT naam, functie, gbdatum, maandsal
# FROM Medewerker
# WHERE maandsal >= 2000 
# AND maandsal <= 3000
# ORDER BY gbdatum
# 15. 
# SELECT code, omschrijving
# FROM Cursus
# WHERE omschrijving = '%Ontwerp%'
# 16. 
# SELECT *
# FROM Medewerker
# WHERE afd = 30
# AND functie = 'verkoper' OR functie = 'boekhouder' OR functie = 'manager'
# 17.
# SELECT docent
# FROM Uitvoering
# WHERE locatie = 'Maastrischt' OR locatie = 'De Meern'
# 18.
# SELECT Medewerker.naam 
# FROM Uitvoering 
# JOIN Medewerker ON Uitvoering.docent = Medewerker.mnr 
# WHERE Uitvoering.locatie = 'De Meern' OR Uitvoering.locatie = 'Utrecht'
