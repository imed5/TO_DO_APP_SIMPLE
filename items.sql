
CREATE TABLE `items` (
  `item_id` int(11) NOT NULL,
  `title` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_time` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `title` (`title`);

ALTER TABLE `items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;
