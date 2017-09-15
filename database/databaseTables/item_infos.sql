CREATE TABLE `item_infos` (
 `item_id` int(11) NOT NULL AUTO_INCREMENT,
` item_category_id` int(15) NOT NULL,
 `barcode` varchar(60),
 `item_name` varchar(100) NOT NULL,
 `item_type` varchar(50) NOT NULL,
 `item_qty` varchar(50) NOT NULL,
 `item_unit` varchar(50) NOT NULL,
 `item_price` varchar(50) NOT NULL,
`discount_percent` double NOT NULL, 
`discount_tk` double NOT NULL,
 `bonus_qty` int(11) NOT NULL,
 `vat` int(5) NOT NULL,
 `e_date` varchar(10) NOT NULL,
 `c_date` varchar(15) NOT NULL,
 PRIMARY KEY (`item_id`)
) 
