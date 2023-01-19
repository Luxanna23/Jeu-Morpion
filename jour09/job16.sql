SELECT nom FROM etages
WHERE 'id' = (
    SELECT nom AS 'Biggest Room', MAX(capacite) FROM salles
    WHERE 'id_etage' = 'id';
    );