# tests de nos requêtes

# Sélection de tous les champs de la table thearticle.
SELECT * FROM thearticle;

# Sélection de tous les champs de la table theuser.
SELECT * FROM theuser;

# Sélection de tous les champs de la table thearticle classé par thearticledate descendant.
SELECT * FROM thearticle 
		ORDER BY thearticledate DESC;
        
# Sélection de tous les champs de la table thearticle classé par thearticledate descendant. On doit récupérer idtheuser et theuserlogin en jointure interne  depuis  
# la table theuser - càd l'utilisateur qui a écrit l'article.
SELECT thearticle.* , theuser.idtheuser, theuser.theuserlogin
		FROM thearticle
			INNER JOIN  theuser
            ON theuser.idtheuser = thearticle.theuser_idtheuser
		ORDER BY thearticle.thearticledate DESC;
        
 # Sélection de tous les champs de la table thearticle SAUF theuser_idtheuser classé par thearticledate descendant. On doit récupérer idtheuser et theuserlogin en jointure interne  depuis  
# la table theuser - càd l'utilisateur qui a écrit l'article.
SELECT thearticle.idthearticle, thearticle.thearticletitle, thearticle.thearticletext, thearticle.thearticledate , 
				theuser.idtheuser, theuser.theuserlogin
		FROM thearticle
			INNER JOIN  theuser
            ON theuser.idtheuser = thearticle.theuser_idtheuser
		ORDER BY thearticle.thearticledate DESC;       
        
# Sélection de tous les champs de la table thearticle SAUF theuser_idtheuser classé par thearticledate descendant. On doit récupérer idtheuser et theuserlogin en jointure interne  depuis  
# la table theuser - càd l'utilisateur qui a écrit l'article. ! UTILISATION d'alias de table, je ne mets pas le mot clef AS (pratique personnelle) , car je l'utilise pour les alias de sorties
SELECT a.idthearticle, a.thearticletitle, a.thearticletext, a.thearticledate,
				u.idtheuser, u.theuserlogin
		FROM thearticle a
			INNER JOIN  theuser u 
            ON u.idtheuser = a.theuser_idtheuser
		ORDER BY a.thearticledate DESC;        
        
# Sélection de tous les champs de la table thearticle SAUF theuser_idtheuser classé par thearticledate descendant. On doit récupérer idtheuser et theuserlogin en jointure interne  depuis  
# la table theuser - càd l'utilisateur qui a écrit l'article. ! UTILISATION d'alias de table, je ne mets pas le mot clef AS (pratique personnelle) , car je l'utilise pour les alias de sorties, 
# je veux récuper qu'un résultat (le dernier article), utilisation du LIMIT 1 (1 seul résultat, la clef '0') -- équivalent à LIMIT 0 (départ), 1 (nombre à prendre)
SELECT a.idthearticle, a.thearticletitle, a.thearticletext, a.thearticledate,
				u.idtheuser, u.theuserlogin
		FROM thearticle a
			INNER JOIN  theuser u 
            ON u.idtheuser = a.theuser_idtheuser
		ORDER BY a.thearticledate DESC
        LIMIT 1;               -- equal to LIMIT 0, 1