# on sélectionne tous les champs de artiste
SELECT * FROM artiste;
# on sélectionne tous les champs de tableau
SELECT * FROM tableau;
# on sélectionne tous les artistes et tous 
# les tableaux en joignant chaque artiste à chaque
# tableau, sans tenir compte des jointures (UNION)
SELECT * FROM artiste, tableau;
# on sélectionne les artistes qui on fait au moins 
# une peinture (le distinct pour éviter le double
# affichage de Monet ou autres)
SELECT DISTINCT a.* FROM artiste a 
	INNER JOIN tableau t
    ON t.artiste_idArtiste = a.idArtiste;
# on sélectionne les artistes qui on fait au moins 
# une peinture, et on rajoute le champs nbPeinture 
# avec le nombre de peintures de chaque artiste
SELECT a.*, count(t.id) AS nbPeinture FROM artiste a 
	INNER JOIN tableau t
    ON t.artiste_idArtiste = a.idArtiste
    GROUP BY (a.idArtiste);
# on sélectionne les tableaux et on y ajoute
# lenom et leprenom de 'artiste' correspondant
SELECT t.*, a.lenom, a.leprenom FROM tableau t
	INNER JOIN artiste a 
    ON a.idArtiste = t.artiste_idArtiste;
# on ordonne en plus (que 24) par date de création
# ascendante
SELECT t.*, a.lenom, a.leprenom FROM tableau t
	INNER JOIN artiste a 
    ON a.idArtiste = t.artiste_idArtiste
    ORDER BY t.creation ASC;
    
SELECT a.*, GROUP_CONCAT(t.id) AS id, GROUP_CONCAT(t.titre SEPARATOR "@||@") AS titre, 
GROUP_CONCAT(t.image SEPARATOR "|@@|") AS image  
                    FROM artiste a
                        LEFT JOIN tableau t
                        ON a.idArtiste = t.artiste_idArtiste
                    WHERE a.idArtiste = 6
                    GROUP BY a.idArtiste;