CREATE TABLE IF NOT EXISTS `bank`(
    `name` varchar(40) NOT NULL,
    `email` varchar(45) NOT NULL,
    `credit` int(20) NOT NULL

);
INSERT INTO `bank`(`Name`,`email`, `credit`) VALUES
('Divyanshu Slathia','divyanshu@gmail.com','445000'),
('Astle Pinto','astle.pinto25@gmail.com','392000'),
('Rolwyn Raju','rolzy@gmail.com','350000'),
('Arpan Sadhu','arp.ann7214@gmail.com','550000'),
('Tijo Thomas','thomasstijo@gmail.com','85000'),
('Gladden Rumao','grumao20@gmail.com','225000'),
('Ratan Tata','ratan12@gmail.com','184000'),
('Kartik Sharma','ks32@gmail.com','58000'),
('Milind Anand','milind672@gmail.com','94000'),
('Raghav Singh','raghav.s75@gmail.com','369000');


CREATE TABLE IF NOT EXISTS `transfers`(
    `from_user` varchar(40) NOT NULL,
    `to_user` varchar(40) NOT NULL,
    `Credit` varchar(40) NOT NULL
);