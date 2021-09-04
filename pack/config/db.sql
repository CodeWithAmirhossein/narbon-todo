--
-- Table structure for table `people`
--

DROP TABLE IF EXISTS `people`;
CREATE TABLE `people`
(
    `row`       int(11) NOT NULL AUTO_INCREMENT,
    `id`        text DEFAULT NULL,
    `name`      text DEFAULT NULL,
    `email`     text DEFAULT NULL,
    `password`  text DEFAULT NULL,
    PRIMARY KEY (`row`)
);