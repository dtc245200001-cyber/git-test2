CREATE TABLE IF NOT EXISTS patients (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(255) NOT NULL
);

INSERT INTO patients (full_name) VALUES 
('Nguyen Van A'),
('Tran Thi B'),
('Le Van C');
