create database emploi;
use emploi;
CREATE TABLE roles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR (50)NOT NULL
);
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(150) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    role_id int,
    FOREIGN KEY ( role_id ) REFERENCES roles(id)
);



CREATE TABLE candidats (
    user_id INT PRIMARY KEY,
    min_salaire DECIMAL(10,2) NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(id) 
);

CREATE TABLE recruteurs (
    user_id INT PRIMARY KEY,
    company_name VARCHAR(255) NOT NULL,
    company_domain VARCHAR(255) NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(id) 
);

CREATE TABLE categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL
);

CREATE TABLE skills (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL ,
    categorie_id INT ,
    FOREIGN KEY (categorie_id) REFERENCES categories(id) 

);

CREATE TABLE postes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    lieu VARCHAR(100),
    poste VARCHAR(100) NOT NULL,
    mission TEXT,
    salaire DECIMAL(10,2),
    categorie_id INT,
    recruteur_id INT,
    FOREIGN KEY (categorie_id) REFERENCES categories(id),
    FOREIGN KEY (recruteur_id) REFERENCES recruteurs(user_id)
);

CREATE TABLE poste_skill (
    poste_id INT NOT NULL,
    skill_id INT NOT NULL,
    PRIMARY KEY (poste_id, skill_id),
    FOREIGN KEY (poste_id) REFERENCES postes(id),
    FOREIGN KEY (skill_id) REFERENCES skills(id) 
);

CREATE TABLE candidat_skill (
    candidat_id INT NOT NULL,
    skill_id INT NOT NULL,
    PRIMARY KEY (candidat_id, skill_id),
    FOREIGN KEY (candidat_id) REFERENCES candidats(user_id) ,
    FOREIGN KEY (skill_id) REFERENCES skills(id) 
);

CREATE TABLE candidatures (
    candidat_id INT NOT NULL,
    poste_id INT NOT NULL,
    date_postulation DATETIME DEFAULT CURRENT_TIMESTAMP,
    motif VARCHAR(50) not null,
    status Enum ("approved","denied"),
    PRIMARY KEY (candidat_id, poste_id),
    FOREIGN KEY (candidat_id) REFERENCES candidats(user_id),
    FOREIGN KEY (poste_id) REFERENCES postes(id) 
);
create table archive(
 id INT AUTO_INCREMENT PRIMARY KEY,
 date_archive DATETIME DEFAULT CURRENT_TIMESTAMP,
 user_id int ,
 poste_id int ,
 FOREIGN KEY (poste_id) REFERENCES postes(id),
 FOREIGN KEY (user_id) REFERENCES users(id)
);

insert into roles(title) Values ("Admin"),
("Candidat"),
("Recruteur");
