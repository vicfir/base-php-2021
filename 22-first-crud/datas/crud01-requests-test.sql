# tests de nos requêtes

# Sélection de tous les champs de la table thearticle.
SELECT * FROM thearticle;

# Sélection de tous les champs de la table theuser.
SELECT * FROM theuser;

# Sélection de tous les champs de la table thearticle classé par thearticledate descendant.
SELECT * FROM thearticle 
		ORDER BY thearticledate DESC;
        
# Sélection de tous les champs de la table thearticle classé par thearticledate descendant. On doit récupérer idtheuser et theuserlogin en jointure interne  depuis  
# la table theuser - càd l'utilisateur qui a écrit l'article. ! UTILISATION d'alias de code, je ne mets pas le mot clef AS , car je l'utilisie pour les alias de sorties
SELECT a.* , u.idtheuser, u.theuserlogin
		FROM thearticle a
			INNER JOIN  theuser u 
            ON u.idtheuser = a.theuser_idtheuser
		ORDER BY a.thearticledate DESC;