
SELECT firstname
FROM user
RIGHT JOIN articles ON user.id = articles.id_user WHERE articles.id=10;

