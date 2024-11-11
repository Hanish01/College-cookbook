CREATE TABLE recipes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT,
    image_path VARCHAR(255),
    ingredients TEXT,
    instructions TEXT,
    calories INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
