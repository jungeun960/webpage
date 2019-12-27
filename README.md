# webpage
db 테이블

공지사항 db

CREATE TABLE `notice_board` (
	`number` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
	`title` VARCHAR(150) NOT NULL COLLATE 'utf8mb4_unicode_ci',
	`content` TEXT NOT NULL COLLATE 'utf8mb4_unicode_ci',
	`id` VARCHAR(20) NOT NULL COLLATE 'utf8mb4_unicode_ci',
	`password` VARCHAR(20) NOT NULL COLLATE 'utf8mb4_unicode_ci',
	`date` DATETIME NOT NULL,
	`hit` INT(10) UNSIGNED NOT NULL DEFAULT '0',
	PRIMARY KEY (`number`)
)
COMMENT='공지사항 게시글'
COLLATE='utf8mb4_unicode_ci'
ENGINE=InnoDB
AUTO_INCREMENT=13
;

Q&A DB

CREATE TABLE `qa_board` (
	`number` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
	`category` VARCHAR(150) NOT NULL COLLATE 'utf8mb4_unicode_ci',
	`id` VARCHAR(20) NOT NULL COLLATE 'utf8mb4_unicode_ci',
	`content` VARCHAR(150) NOT NULL COLLATE 'utf8mb4_unicode_ci',
	`password` VARCHAR(20) NOT NULL COLLATE 'utf8mb4_unicode_ci',
	`date` DATETIME NOT NULL,
	PRIMARY KEY (`number`)
)
COLLATE='utf8mb4_unicode_ci'
ENGINE=InnoDB
AUTO_INCREMENT=3
;

사용자 DB

CREATE TABLE `User` (
	`id` TEXT NOT NULL COLLATE 'utf8mb4_unicode_ci',
	`Password` TEXT NOT NULL COLLATE 'utf8mb4_unicode_ci',
	`Name` TEXT NOT NULL COLLATE 'utf8mb4_unicode_ci',
	`PhoneNum` TEXT NOT NULL COLLATE 'utf8mb4_unicode_ci',
	`Email` TEXT NOT NULL COLLATE 'utf8mb4_unicode_ci'
)
COLLATE='utf8mb4_unicode_ci'
ENGINE=InnoDB
;
