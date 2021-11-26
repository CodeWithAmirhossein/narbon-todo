DROP TABLE IF EXISTS `tasks`;
CREATE TABLE `tasks`
(
    `row`      int(11) NOT NULL AUTO_INCREMENT,
    `name`    text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    `id`     text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    `status`    text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    PRIMARY KEY (`row`)
);