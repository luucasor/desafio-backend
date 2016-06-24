CREATE DATABASE agenda_compromisso;

CREATE TABLE compromisso (
      'id' INT(6) AUTO_INCREMENT PRIMARY KEY,
      'titulo' VARCHAR(200) NOT NULL,
      'descricao' VARCHAR(1000) NULL
);

INSERT INTO compromisso (id, titulo) VALUES (1, 'Primeiro compromisso');
INSERT INTO compromisso (id, titulo) VALUES (2, 'Segundo compromisso');
