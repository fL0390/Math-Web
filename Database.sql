DROP DATABASE IF EXISTS math;
CREATE DATABASE math;
USE math;

CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) UNIQUE,
    password VARCHAR(255),
    is_admin BOOLEAN DEFAULT 0
);

CREATE TABLE exercise_settings (
    id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT,
    exercise_type ENUM('addition', 'subtraction', 'multiplication', 'division'),
    min_number INT,
    max_number INT,
    excluded_tables VARCHAR(255),
    timer_seconds INT,
    FOREIGN KEY (user_id) REFERENCES users(id)
);

CREATE TABLE exercise_logs (
    id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT,
    exercise_type VARCHAR(50),
    problem VARCHAR(255),
    user_answer VARCHAR(255),
    is_correct BOOLEAN,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id)
);