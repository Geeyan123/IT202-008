CREATE TABLE IF NOT EXISTS Ratings (
                         id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                         product_id INT(11) UNSIGNED NOT NULL,
                         user_id INT(11) UNSIGNED NOT NULL,
                         rating TINYINT(1) NOT NULL,
                         comment TEXT,
                         created DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
                         modified DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);