CREATE DATABASE control_de_asistencias;

USE control_de_asistencias;

CREATE TABLE estudiantes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    ci VARCHAR(20) NOT NULL,
    ru VARCHAR(20) NOT NULL
);

CREATE TABLE asistencias (
    id INT AUTO_INCREMENT PRIMARY KEY,
    estudiante_id INT,
    fecha DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (estudiante_id) REFERENCES estudiantes(id) ON DELETE CASCADE
);

INSERT INTO estudiantes (nombre, ci, ru)
VALUES('Juan Pérez', '12345678', 'RU1234'),
  ('María Rodríguez', '90123456', 'RU5678'),
  ('Carlos López', '78901234', 'RU9012');