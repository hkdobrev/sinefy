ALTER TABLE  `movies` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
ALTER TABLE  `movies` ADD PRIMARY KEY (  `id` );
ALTER TABLE  `movies` CHANGE  `id`  `id` INT( 11 ) NOT NULL AUTO_INCREMENT;
ALTER TABLE  `movies` ADD  `actors` VARCHAR( 255 ) NOT NULL AFTER  `image`;
ALTER TABLE  `movies` CHANGE  `name`  `name` VARCHAR( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
CHANGE  `image`  `image` VARCHAR( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
CHANGE  `actors`  `actors` VARCHAR( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL;
ALTER TABLE  `movies` CHANGE  `image`  `image` VARCHAR( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT  'default_image.png';
ALTER TABLE  `movies` ADD  `about` TEXT NULL AFTER  `name`;
ALTER TABLE  `movies` ADD  `release_date` TIMESTAMP NULL AFTER  `actors` ,
ADD  `directed_by` VARCHAR( 255 ) NULL AFTER  `release_date` ,
ADD  `studio` VARCHAR( 255 ) NULL AFTER  `directed_by` ,
ADD  `likes` INT NOT NULL DEFAULT  '0' AFTER  `studio`;
ALTER TABLE `movies` DROP `image`;


ALTER TABLE  `movies_users` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
ALTER TABLE `movies_users` ADD PRIMARY KEY(`id`);
ALTER TABLE  `movies_users` CHANGE  `id`  `id` INT( 11 ) NOT NULL AUTO_INCREMENT;
ALTER TABLE  `movies_users` ADD  `wishlist` BOOLEAN NOT NULL DEFAULT  '0',
ADD  `watched` BOOLEAN NOT NULL DEFAULT  '0';

ALTER TABLE  `users` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
ALTER TABLE  `users` CHANGE  `name`  `name` VARCHAR( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
CHANGE  `email`  `email` VARCHAR( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;

ALTER TABLE  `user_tokens` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci
ALTER TABLE  `user_tokens` CHANGE  `user_agent`  `user_agent` VARCHAR( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
CHANGE  `token`  `token` VARCHAR( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
CHANGE  `type`  `type` VARCHAR( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;

CREATE TABLE IF NOT EXISTS `friends` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `friend_id` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;