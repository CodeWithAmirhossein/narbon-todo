/*
    Database name: narbontodo
*/

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

--
-- Sample user
--

INSERT INTO `people` (`id`, `name`, `email`, `password`) VALUES ('123456', 'امیرحسین محمدی', 'amirhosseinmohammadi1380@yahoo.com', 'amir2003');

--
-- Table structure for table `tasks`
--

DROP TABLE IF EXISTS `tasks`;
CREATE TABLE `tasks`
(
    `row`           int(11) NOT NULL AUTO_INCREMENT,
    `taskid`        text DEFAULT NULL,
    `userid`        text DEFAULT NULL,
    `name`          text DEFAULT NULL,
    `date`          text DEFAULT NULL,
    `status`        text DEFAULT NULL,
    PRIMARY KEY (`row`)
);