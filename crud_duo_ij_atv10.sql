create database DuoCrud_ji;

CREATE TABLE professor (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) UNIQUE NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL
);

CREATE TABLE aula (
    id INT AUTO_INCREMENT PRIMARY KEY,
    sala INT UNIQUE NOT NULL,
    titulo VARCHAR(100) UNIQUE NOT NULL
);

CREATE TABLE diario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    professor_id INT NOT NULL,
    nome_prof VARCHAR (100) NOT NULL,
    aula_id INT NOT NULL,
    sala_aula INT NOT NULL,
    titulo_aula VARCHAR (100) NOT NULL,
    horaAula varchar(15),
    FOREIGN KEY (professor_id) REFERENCES professor(id),
    FOREIGN KEY (nome_prof) REFERENCES professor(nome),
    FOREIGN KEY (aula_id) REFERENCES aula(id),
    FOREIGN KEY (sala_aula) REFERENCES aula(sala),
    FOREIGN KEY (titulo_aula) REFERENCES aula(titulo)
);
