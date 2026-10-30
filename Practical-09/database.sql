-- ============================================================================
-- StudentHub Database Schema
-- Subject: ITUE203 (Web Development Frameworks)
-- Student: Jay Zalavadiya (25CE142) | CHARUSAT
-- ============================================================================

CREATE DATABASE IF NOT EXISTS studenthub_db;
USE studenthub_db;

-- ----------------------------------------------------------------------------
-- 1. Table: students
-- Used in: Practicals 8, 9, 10, 11, 14
-- ----------------------------------------------------------------------------
DROP TABLE IF EXISTS registrations;
DROP TABLE IF EXISTS events;
DROP TABLE IF EXISTS students;

CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL UNIQUE,
    mobile VARCHAR(15) NOT NULL,
    password_hash VARCHAR(255) NOT NULL,
    course VARCHAR(50) NOT NULL,
    academic_year VARCHAR(10) DEFAULT '1',
    gender VARCHAR(20) DEFAULT 'Other',
    role ENUM('student', 'admin') DEFAULT 'student',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------------------------------------------------------
-- 2. Table: events
-- Used in: Practicals 8, 12, 13, 14
-- ----------------------------------------------------------------------------
CREATE TABLE events (
    id INT AUTO_INCREMENT PRIMARY KEY,
    event_name VARCHAR(255) NOT NULL,
    event_date DATE NOT NULL,
    venue VARCHAR(255) NOT NULL,
    poster VARCHAR(255) DEFAULT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------------------------------------------------------
-- 3. Table: registrations
-- Used in: Practical 8 (Relation between Students and Events)
-- ----------------------------------------------------------------------------
CREATE TABLE registrations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    student_id INT NOT NULL,
    event_id INT NOT NULL,
    registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (student_id) REFERENCES students(id) ON DELETE CASCADE,
    FOREIGN KEY (event_id) REFERENCES events(id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------------------------------------------------------
-- Seed Data
-- ----------------------------------------------------------------------------
-- Admin Account (Email: admin@studenthub.com | Password: password)
-- Password hash generated using password_hash('password', PASSWORD_DEFAULT)
INSERT INTO students (name, email, mobile, password_hash, course, academic_year, gender, role) VALUES
('System Administrator', 'admin@studenthub.com', '9876543210', '$2y$10$4vPZ2cM9G6d0U6m5V0aORei5zU7gT3hJ9l1wS5cQ2uB3k20x6jA22', 'CE', '4', 'Other', 'admin'),
('Jay Zalavadiya', '25ce142@charusat.edu.in', '9123456780', '$2y$10$4vPZ2cM9G6d0U6m5V0aORei5zU7gT3hJ9l1wS5cQ2uB3k20x6jA22', 'CE', '2', 'Male', 'student'),
('Rahul Patel', 'rahul.patel@example.com', '9825012345', '$2y$10$4vPZ2cM9G6d0U6m5V0aORei5zU7gT3hJ9l1wS5cQ2uB3k20x6jA22', 'IT', '3', 'Male', 'student'),
('Priya Sharma', 'priya.sharma@example.com', '9825098765', '$2y$10$4vPZ2cM9G6d0U6m5V0aORei5zU7gT3hJ9l1wS5cQ2uB3k20x6jA22', 'CSE', '1', 'Female', 'student');

-- Sample Events
INSERT INTO events (event_name, event_date, venue, poster) VALUES
('TechFest 2026', '2026-04-15', 'Central Auditorium', 'techfest.jpg'),
('CodeStorm Hackathon', '2026-05-10', 'Computer Lab 3', 'codestorm.jpg'),
('Web Dev Bootcamp', '2026-05-22', 'Seminar Hall B', 'webdev.jpg');

-- Sample Registrations
INSERT INTO registrations (student_id, event_id) VALUES
(2, 1),
(2, 2),
(3, 1),
(4, 3);
