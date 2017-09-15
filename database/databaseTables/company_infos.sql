CREATE TABLE `company_info` (
 id int auto_increment not null,
 `company_id` int(15) NOT NULL,
 `company_name` varchar(100) NOT NULL,
 `company_type` varchar(50) NOT NULL,
 `mobile` int(20) NOT NULL,
 `email` varchar(50) NOT NULL,
 `address` varchar(200) NOT NULL,
 `country` varchar(50) NOT NULL,
 `telephone` int(30) NOT NULL,
 `website` varchar(50) NOT NULL,
 `company_ac_no` varchar(50) NOT NULL,
 `company_sub_ac_no` varchar(50) NOT NULL,
 `company_license_no` varchar(50) NOT NULL,
 `company_description` varchar(200) NOT NULL,
`image` varchar(191),
    key(id),
 PRIMARY KEY (`company_id`)
) ;
