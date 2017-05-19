CREATE TABLE posts (
    id int NOT null AUTO_INCREMENT,
    titre varchar(255),
    contenu text,
    date DATETIME,
    PRIMARY KEY (id)
);

INSERT INTO posts VALUES
(1, "Mon premier post", "Coucou, bienvenue sur le premier article de mon blog.", "2017-05-17"),
(2, "Présentation", "Coucou, moi c'est Taylor et je fais du PHP.", "2017-05-17")
;
