# module-declarative-schema
Magento 2 - Working with DB

**Generate a db_schema_whitelist.json file with the following command:**

`php bin/magento setup:db-declaration:generate-whitelist --module-name=Internship_DeclarativeSchema`

**Execute a dry run with the following command:**

`php bin/magento setup:upgrade --dry-run=1 --keep-generated`

**The output of the dry run can be found in project_root/var/log/dry-run-installation.log file.**
This file contains all the DDL SQL statements that are generated during installation. You can use these SQL statements for debugging and optimizing performance processes.
_In dry run mode, the database state does not change._

`CREATE TABLE `employee` (
 `id` int(10) UNSIGNED NOT NULL  AUTO_INCREMENT COMMENT "Employee ID", 
 `employee_email` varchar(255) NULL  COMMENT "Employee Email", 
 `first_name` varchar(255) NOT NULL  COMMENT "Employee First Name", 
 `last_name` varchar(255) NOT NULL  COMMENT "Employee Last Name", 
 `hired_at` varchar(255) NOT NULL DEFAULT "CURRENT_TIMESTAMP" COMMENT "Employee Hire Date", 
 `department_id` int(10) UNSIGNED NOT NULL   COMMENT "Department ID", 
 CONSTRAINT  PRIMARY KEY (`id`), 
 CONSTRAINT `EMPLOYEE_EMPLOYEE_EMAIL` UNIQUE KEY (`employee_email`), 
 CONSTRAINT `EMPLOYEE_DEPARTMENT_ID_DEPARTMENT_ID` FOREIGN KEY (`department_id`) REFERENCES `department` (`id`)  ON DELETE CASCADE, 
 INDEX `EMPLOYEE_DEPARTMENT_ID` (`department_id`)
 ) ENGINE=innodb DEFAULT CHARSET=utf8 DEFAULT COLLATE=utf8_general_ci COMMENT="Employee Table"
 `
 
**Execute the schema update using the following command:**

`php bin/magento setup:upgrade --keep-generated`
 
