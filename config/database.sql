DROP DATABASE capstone_project;

CREATE DATABASE capstone_project;

USE capstone_project;

CREATE TABLE account(
    id INT(10) PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(64) NOT NULL,
    middle_name VARCHAR(64) NOT NULL,
    last_name VARCHAR(64) NOT NULL,
    email VARCHAR(64) NOT NULL,
    date_of_birth DATE NOT NULL,
    gender VARCHAR(64) NOT NULL,
    phone_number VARCHAR(11) NOT NULL,
    home_address VARCHAR(256) NOT NULL,
    state_of_origin VARCHAR(128) NOT NULL,
    local_govt VARCHAR(128) NOT NULL,
    next_of_kin VARCHAR(128) NOT NULL,
    image_name VARCHAR(128) NOT NULL DEFAULT 'profile-image.png',
    jamb_score INT(11) NOT NULL,
    admin_status VARCHAR(64) NOT NULL DEFAULT 'undecided'
);

INSERT INTO account (id, first_name, middle_name, last_name, email, date_of_birth, gender, phone_number, home_address, state_of_origin, local_govt, next_of_kin, jamb_score) VALUES (1, 'abdulbaki', 'adabara', 'suraj', 'codelikesuraj@gmail.com', '1999-12-09', 'male', '08188608295', 'yetkem road', 'kogi', 'okehi', 'fawaz', 235);