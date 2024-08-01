# CRUD-AJAX-


-- إنشاء قاعدة البيانات
CREATE DATABASE IF NOT EXISTS crud_db;

-- استخدام قاعدة البيانات
USE crud_db;

-- إنشاء جدول السجلات
CREATE TABLE IF NOT EXISTS records (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    address VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- إضافة بيانات تجريبية
INSERT INTO records (name, email, phone, address) VALUES 
('John Doe', 'john.doe@example.com', '+1234567890', '123 Elm Street, Springfield'),
('Jane Smith', 'jane.smith@example.com', '+0987654321', '456 Oak Avenue, Metropolis'),
('Alice Johnson', 'alice.johnson@example.com', '+1122334455', '789 Pine Road, Gotham'),
('Bob Brown', 'bob.brown@example.com', '+5566778899', '101 Maple Lane, Star City'),
('Charlie Davis', 'charlie.davis@example.com', '+6677889900', '202 Birch Blvd, Central City'),
('Diana Evans', 'diana.evans@example.com', '+7788990011', '303 Cedar Drive, Coast City');
