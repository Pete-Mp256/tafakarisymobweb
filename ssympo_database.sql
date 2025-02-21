CREATE DATABASE sympo_database;

USE sympo_database;

CREATE TABLE applicants (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50),
    last_name VARCHAR(50),
    gender VARCHAR(20),
    organisation VARCHAR(100),
    position VARCHAR(100),
    email VARCHAR(100) UNIQUE,
    phone VARCHAR(20),
    profile_link VARCHAR(255),
    country VARCHAR(50),
    state VARCHAR(50),
    career_stage VARCHAR(50),
    sector VARCHAR(100),
    background VARCHAR(100),
    expertise TEXT,
    event_goals TEXT,
    personal_connection TEXT,
    thematic_activities TEXT,
    heard_about VARCHAR(50),
    submission_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
