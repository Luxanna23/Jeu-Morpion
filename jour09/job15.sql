SELECT nom FROM salles
WHERE 'id_etage' = (
    SELECT nom FROM etages
    WHERE 'id' LIKE 'id_etage'
    );