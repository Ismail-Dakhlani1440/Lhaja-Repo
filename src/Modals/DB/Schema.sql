Drop DATABASE IF EXISTS emploi;
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
    FOREIGN KEY ( role_id ) REFERENCES roles(id) ON DELETE CASCADE
);



CREATE TABLE candidats (
    user_id INT PRIMARY KEY,
    min_salaire DECIMAL(10,2) NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

CREATE TABLE recruteurs (
    user_id INT PRIMARY KEY,
    company_name VARCHAR(255) NOT NULL,
    company_domain VARCHAR(255) NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

CREATE TABLE categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL
);

CREATE TABLE skills (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL ,
    categorie_id INT ,
    FOREIGN KEY (categorie_id) REFERENCES categories(id) ON DELETE CASCADE

);

CREATE TABLE postes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    lieu VARCHAR(100),
    poste VARCHAR(100) NOT NULL,
    mission TEXT,
    salaire DECIMAL(10,2),
    categorie_id INT,
    recruteur_id INT,
    FOREIGN KEY (categorie_id) REFERENCES categories(id) ON DELETE CASCADE,
    FOREIGN KEY (recruteur_id) REFERENCES recruteurs(user_id) ON DELETE CASCADE
);

CREATE TABLE poste_skill (
    poste_id INT NOT NULL,
    skill_id INT NOT NULL,
    PRIMARY KEY (poste_id, skill_id),
    FOREIGN KEY (poste_id) REFERENCES postes(id)
    ON DELETE CASCADE,
    FOREIGN KEY (skill_id) REFERENCES skills(id)
    ON DELETE CASCADE
);

CREATE TABLE candidat_skill (
    candidat_id INT NOT NULL,
    skill_id INT NOT NULL,
    PRIMARY KEY (candidat_id, skill_id),
    FOREIGN KEY (candidat_id) REFERENCES candidats(user_id) ON DELETE CASCADE,
    FOREIGN KEY (skill_id) REFERENCES skills(id) ON DELETE CASCADE
);

CREATE TABLE candidatures (
    candidat_id INT NOT NULL,
    poste_id INT NOT NULL,
    date_postulation DATETIME DEFAULT CURRENT_TIMESTAMP,
    motif VARCHAR(50) not null,
    status Enum ("approved","denied"),
    PRIMARY KEY (candidat_id, poste_id),
    FOREIGN KEY (candidat_id) REFERENCES candidats(user_id) ON DELETE CASCADE,
    FOREIGN KEY (poste_id) REFERENCES postes(id) ON DELETE CASCADE
);
create table archive(
 id INT AUTO_INCREMENT PRIMARY KEY,
 date_archive DATETIME DEFAULT CURRENT_TIMESTAMP,
 user_id int ,
 poste_id int ,
 FOREIGN KEY (poste_id) REFERENCES postes(id) ON DELETE CASCADE,
 FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

INSERT INTO roles (title)
VALUES
  ('Admin'),
  ('Candidat'),
  ('Recruteur');


INSERT INTO users (name, email, password, role_id) VALUES
('Admin User', 'admin@mail.com', 'hashed_pwd_admin', 1),
('John Doe', 'john@mail.com', 'hashed_pwd_john', 2),
('Jane Smith', 'jane@mail.com', 'hashed_pwd_jane', 2),
('Recruiter One', 'recruiter1@mail.com', 'hashed_pwd_rec1', 3),
('Recruiter Two', 'recruiter2@mail.com', 'hashed_pwd_rec2', 3);


INSERT INTO candidats (user_id, min_salaire) VALUES
(2, 5000.00),
(3, 6500.00);


INSERT INTO recruteurs (user_id, company_name, company_domain) VALUES
(4, 'TechCorp', 'Software Development'),
(5, 'BizGroup', 'Marketing & Sales');

INSERT INTO categories (title) VALUES
('Web Development'),
('Data Science'),
('Marketing');

INSERT INTO skills (title, categorie_id) VALUES
('PHP', 1),
('JavaScript', 1),
('Laravel', 1),
('Python', 2),
('Machine Learning', 2),
('SEO', 3),
('Content Marketing', 3);


INSERT INTO postes (lieu, poste, mission, salaire, categorie_id, recruteur_id) VALUES
('Casablanca', 'PHP Developer', 'Develop and maintain backend services', 8000.00, 1, 4),
('Rabat', 'Data Analyst', 'Analyze business data and reports', 9000.00, 2, 4),
('Remote', 'Marketing Specialist', 'SEO and content strategy', 7000.00, 3, 5);


INSERT INTO poste_skill (poste_id, skill_id) VALUES
(1, 1), -- PHP Developer -> PHP
(1, 3), -- PHP Developer -> Laravel
(2, 4), -- Data Analyst -> Python
(2, 5), -- Data Analyst -> ML
(3, 6), -- Marketing -> SEO
(3, 7); -- Marketing -> Content


INSERT INTO candidat_skill (candidat_id, skill_id) VALUES
(2, 1),
(2, 2),
(2, 3),
(3, 4),
(3, 5),
(3, 6);


INSERT INTO candidatures (candidat_id, poste_id, motif, status) VALUES
(2, 1, 'Strong backend experience', 'approved'),
(2, 2, 'Interested in data field', 'denied'),
(3, 2, 'Relevant academic background', 'approved'),
(3, 3, 'Marketing skills match', 'denied');


INSERT INTO archive (user_id, poste_id) VALUES
(2, 1),
(3, 2),
(4, 1),
(5, 3);
