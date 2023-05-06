CREATE TABLE IF NOT EXISTS `Cart` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `desired_quantity` int,
    `unit_price` int,
    `product_id` int,
    `user_id` int,
    `created` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `modified` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`)
)