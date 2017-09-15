CREATE TABLE `branch_info` (
 `branch_id` int(15) NOT NULL,
 `company_id` int(15) NOT NULL,
 `branch_name` varchar(100) NOT NULL,
 `branch_type` varchar(20) NOT NULL,
 `b_mobile` int(15) NOT NULL,
 `b_email` varchar(50) NOT NULL,
 `b_address` varchar(200) NOT NULL,
 `b_country` varchar(20) NOT NULL,
 `b_telephone` int(20) NOT NULL,
 `b_web` varchar(30) NOT NULL,
 `b_acc_no` varchar(50) NOT NULL,
 `b_sub_acc_no` varchar(50) NOT NULL,
 `b_license_no` varchar(50) NOT NULL,
 `b_description` varchar(150) NOT NULL,
`image` varchar(191),
 PRIMARY KEY (`branch_id`)
) ;
